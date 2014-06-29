<?php
/* @var $this TblCharsheetController */
/* @var $model TblCharsheet */

$this->breadcrumbs=array(
	'Tbl Charsheets'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List TblCharsheet', 'url'=>array('index')),
	array('label'=>'Create TblCharsheet', 'url'=>array('create')),
	array('label'=>'Update TblCharsheet', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete TblCharsheet', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage TblCharsheet', 'url'=>array('admin')),
);
?>

<h1>View TblCharsheet #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'pass',
		'privx_pass',
		'mail',
		'icq',
		'www',
		'faculty',
		'dreamfaculty',
		'kurs',
		'ip_address',
		'face',
		'balls',
		'blvl',
		'brpg',
		'rasa',
		'dation',
		'anim',
		'bio',
		'phis',
		'mag',
		'char_skills',
		'item',
		'inventory',
		'look',
		'ch',
		'other',
		'avatar',
		'status',
		'privx_status',
		'viewcont',
		'rass',
		'marks',
		'today',
		'dataf',
		'last_visit',
		'bank',
		'stud',
		'oldworks',
		'discuss',
		'state',
	),
)); ?>
