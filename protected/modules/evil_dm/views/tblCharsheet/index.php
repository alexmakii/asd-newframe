<?php
/* @var $this TblCharsheetController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tbl Charsheets',
);

$this->menu=array(
	array('label'=>'Create TblCharsheet', 'url'=>array('create')),
	array('label'=>'Manage TblCharsheet', 'url'=>array('admin')),
);
?>

<h1>Tbl Charsheets</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
