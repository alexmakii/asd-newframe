<?php
/* @var $this CharsheetsController */

$this->breadcrumbs=array(
	$this->module->id,
);
?>
<h1><?php echo $this->uniqueId . '/' . $this->action->id; ?></h1>

<p>
This is the view content for action "<?php echo $this->action->id; ?>".
The action belongs to the controller "<?php echo get_class($this); ?>"
in the "<?php echo $this->module->id; ?>" module.
</p>
<p>
You may customize this page by editing <tt><?php echo __FILE__; ?></tt>
</p>

<h2>
	<?php echo $char["name"]?>
</h2>
<a href="<?php echo Yii::app()->createUrl("/evil_dm/")?>">Назад</a>
<?php $this->widget('application.modules.user.components.LoginWidget'); ?>
<div id="inset01">
	<img src="<?php echo $char["avatar"]?>" alt="Аватар" title="<?php echo $char["name"]?> в картинках">
	<div>
		<span style="font-weight: 700;">Дата рождения: </span>
		<?php echo $char["dation"]?>
	</div>
	<div>
		<span style="font-weight: 700;">Раса: </span>
		<?php echo $char["rasa"]?>
	</div>
	<div>
		<span style="font-weight: 700;">Звероформа: </span>
		<?php echo $char["anim"]?>
	</div>
	<div>
		<span style="font-weight: 700;">Образ: </span>
		<?php echo $char["face"]?>
	</div>
	<div>
		<span style="font-weight: 700;">Статус: </span>
		<?php echo $char["role"]?>
	</div>
	<div>
		<span style="font-weight: 700;">Профессия: </span>
		<?php echo $char["dreamfaculty"]?>
	</div>
	<div>
		<span style="font-weight: 700;">Баллы в журнале: </span>
		<?php echo $char["balls"]?>
	</div>
	<div>
		<span style="font-weight: 700;">Запас учебных: </span>
		<?php echo $char["blvl"]?>
	</div>
	<div>
		<span style="font-weight: 700;">Запас РПГ: </span>
		<?php echo $char["brpg"]?> балл(а/ов).
	</div>
	<div>
		<span style="font-weight: 700;">Финансы: </span>
		<?php
			echo (empty($char["bank"])) ? "денег нет." : $char["bank"] . " руб.";
		?>
	</div>
	<div>
		<span style="font-weight: 700;">Связь с игроком</span>
		<?php
		if (!empty($char["icq"]) && !empty($char["mail"]))
		{
			echo ": <br />ICQ: ".$char["icq"] . "<br />";
			echo "email: ".$char["mail"];
		}
		else
		{
			echo "отсутствует.";
		}
		?>
	</div>
	<div>
		<span style="font-weight: 700;">Прочее:</span>
		<?php
			echo $char["other"] . "<br />";
			echo $_SERVER['REMOTE_ADDR'] . "<br />"; //хозяйке на заметку
//			var_dump($_SERVER);
//			echo $_SERVER['HTTP_X_FORWARDED_FOR'];
		?>
	</div>

</div>
<div id="inset02">
	<h3>Биография</h3>
	<?php
		echo $char["bio"];
	?>
</div>
<div id="inset03">
	<h3>Способности</h3>
	<b>Магические способности:</b><br />
	<div>
	<?php

		$skills = "";
		if (!empty($char["char_skills"]) && json_decode($char["char_skills"]))
		{
			/**
			 * @TODO
			 * делаем навыки ссылками на канон
			 */
			$t_skills = json_decode($char["char_skills"], true);
			foreach ($t_skills as $skill)
			{
				$skills .= "<b>".$skill["name"].":</b><span>, ".$skill["skill"].((!empty($skill["comments"])) ? ", /".$skill["comments"]."/" : "")."</span><br />";
			}
		}
		else
		{
			$skills = $char["mag"];
		}
		echo $skills;
		/*$a = array();
		$a[] = array("name"=>"Шаманизм", "skill"=>"Мастер 3", "comments"=>"");
		$a[] = array("name"=>"Магия первоначал: Тьма", "skill"=>"Мастер 1", "comments"=>"");
		$a[] = array("name"=>"Ритуальная магия", "skill"=>"ПМ3", "comments"=>"");
		$a[] = array("name"=>"Магия стихий: Огонь", "skill"=>"ПМ3", "comments"=>"");
		$a[] = array("name"=>"Магия пространства", "skill"=>"Ученик", "comments"=>"темный портал же");
		echo "<br/>". json_encode($a);*/
//		var_dump($a);

	?>
	</div>

	Физич
	Внешность
	Характер
	Артефакты
</div>
<div id="inset04">
	<h3>Ролевые</h3>

</div>
