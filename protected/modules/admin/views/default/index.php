<?php
/* @var $this DefaultController */

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

<ul>
	<li>
		<a href="<?php Yii::app()->createUrl("/evil_dm/tblCharsheet/"); ?>">Редактируем анкеты</a>
	</li>
	<li>
		<a href="<?php Yii::app()->createUrl("/evil_dm/charsheets/"); ?>">Список анкет</a>
	</li>
	<li>
		<a href="<?php Yii::app()->createUrl("/user/auth/"); ?>">Авторизация</a>
	</li>
	<li>
		<a href="<?php Yii::app()->createUrl("/user/user/"); ?>">Список пользователей</a>
	</li>
	<li>
		<a href="<?php Yii::app()->createUrl("/registration"); ?>">Регистрация</a>
	</li>
	<li>
		<a href="<?php

//		Yii::app()->createUrl("");
		?>"></a>
	</li>
	<li>
		<?php
			echo CHtml::form();

			$input = "Пароль";
			$output = "Результат";
			echo "<div>";
			echo CHtml::label('Текст', 'input');
			echo CHtml::textField('input', $input);
			echo "</div>";

			echo "<div>";
			echo CHtml::label('Результат', 'output');
			// name и id для textarea автоматически заданы как 'output'.
			echo CHtml::textArea('output', $output);
			echo "</div>";

			echo "<div>";
			echo CHtml::ajaxSubmitButton('Обработать', CController::createUrl("GenerateBlowfish"), array(
				'type' => 'POST',
				// Результат запроса записываем в элемент, найденный
				// по CSS-селектору #output.
				'update' => '#output',
			),
			array(
				// Меняем тип элемента на submit, чтобы у пользователей
				// с отключенным JavaScript всё было хорошо.
				'type' => 'submit'
			));
			echo "</div>";
//			echo CHtml::

			echo CHtml::endForm();
		?>
	</li>
	<li>
		<?php
			echo CHtml::form();
			echo "<label>Поиск персонажа: " . CHtml::textField("ajax", "") . "</label>";
			echo "<div>";
			echo CHtml::ajaxSubmitButton('Пыщь', CController::createUrl("TestAjax"), array(
				'type' => 'POST',
				'update' => '#query_res',
			),
			array(
				// Меняем тип элемента на submit, чтобы у пользователей
				// с отключенным JavaScript всё было хорошо.
				'type' => 'submit'
			));
			echo "</div>";
			echo "<div id='query_res'></div>";
			echo CHtml::endForm();
		?>
	</li>
</ul>
