<?php
/* @var $this TblCharsheetController */
/* @var $model TblCharsheet */

$this->breadcrumbs=array(
	'Tbl Charsheets'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List TblCharsheet', 'url'=>array('index')),
	array('label'=>'Create TblCharsheet', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tbl-charsheet-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Tbl Charsheets</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tbl-charsheet-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
//		'pass',
//		'privx_pass',
		'mail',
//		'icq',

//		'www',
		'faculty',
//		'dreamfaculty',
		'kurs',
//		'ip_address',
//		'face',
//		'balls',
//		'blvl',
//		'brpg',
//		'rasa',
//		'dation',
//		'anim',
//		'bio',
//		'phis',
//		'mag',
//		'char_skills',
//		'item',
//		'inventory',
//		'look',
//		'ch',
//		'other',
//		'avatar',
//		'status',
//		'privx_status',
//		'viewcont',
//		'rass',
//		'marks',
//		'today',
//		'dataf',
//		'last_visit',
//		'bank',
//		'stud',
//		'oldworks',
//		'discuss',
		'state',

		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
