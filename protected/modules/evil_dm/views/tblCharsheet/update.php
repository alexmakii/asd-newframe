<?php
/* @var $this TblCharsheetController */
/* @var $model TblCharsheet */

$this->breadcrumbs=array(
	'Tbl Charsheets'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List TblCharsheet', 'url'=>array('index')),
	array('label'=>'Create TblCharsheet', 'url'=>array('create')),
	array('label'=>'View TblCharsheet', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage TblCharsheet', 'url'=>array('admin')),
);
?>

<h1>Update TblCharsheet <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>