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

<table>
	<tr>
		<th>Ф-т Биоэнергетики</th>
		<th>Ф-т Алхимии</th>
		<th>Ф-т Оккультизма</th>
		<th>Ф-т Истории</th>
		<th>Преподаватели</th>
		<th>Обитатели</th>
	</tr>
	<tr>
		<?php
			foreach ($persons as $specs) {
				echo "<td><ul>";
				foreach ($specs as $spec)
				{
					echo "<li><a href='".Yii::app()->createUrl("/evil_dm/charsheets/person?id=").$spec["id"]."'target='_blank'>".$spec["name"]."</li>";
				}
				echo "</ul></td>";
			}
		?>
	</tr>
</table>