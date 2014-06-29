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
<?php echo $val1; ?>
<table>
<?php
$x = 0;
//echo "<tr><td>11</td></tr>";
while ($x < 10)
{
	echo "<tr><td>".$x."</td><td>2</td></tr>";
	$x++;
}
?>
</table>