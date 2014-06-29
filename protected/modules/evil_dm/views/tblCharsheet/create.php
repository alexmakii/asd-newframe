<?php
/* @var $this TblCharsheetController */
/* @var $model TblCharsheet */

$this->breadcrumbs=array(
	'Tbl Charsheets'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List TblCharsheet', 'url'=>array('index')),
	array('label'=>'Manage TblCharsheet', 'url'=>array('admin')),
);
?>

<h1>Create TblCharsheet</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>