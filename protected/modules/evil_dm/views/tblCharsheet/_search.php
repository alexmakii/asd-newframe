<?php
/* @var $this TblCharsheetController */
/* @var $model TblCharsheet */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>5,'maxlength'=>5)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'pass'); ?>
		<?php echo $form->passwordField($model,'pass',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'privx_pass'); ?>
		<?php echo $form->textField($model,'privx_pass',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mail'); ?>
		<?php echo $form->textField($model,'mail',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'icq'); ?>
		<?php echo $form->textField($model,'icq',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'www'); ?>
		<?php echo $form->textField($model,'www',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'faculty'); ?>
		<?php echo $form->textField($model,'faculty',array('size'=>1,'maxlength'=>1)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dreamfaculty'); ?>
		<?php echo $form->textField($model,'dreamfaculty',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'kurs'); ?>
		<?php echo $form->textField($model,'kurs'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ip_address'); ?>
		<?php echo $form->textField($model,'ip_address',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'face'); ?>
		<?php echo $form->textField($model,'face',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'balls'); ?>
		<?php echo $form->textField($model,'balls'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'blvl'); ?>
		<?php echo $form->textField($model,'blvl',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'brpg'); ?>
		<?php echo $form->textField($model,'brpg'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rasa'); ?>
		<?php echo $form->textField($model,'rasa',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dation'); ?>
		<?php echo $form->textField($model,'dation',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'anim'); ?>
		<?php echo $form->textField($model,'anim',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bio'); ?>
		<?php echo $form->textArea($model,'bio',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'phis'); ?>
		<?php echo $form->textArea($model,'phis',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'mag'); ?>
		<?php echo $form->textArea($model,'mag',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'char_skills'); ?>
		<?php echo $form->textArea($model,'char_skills',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'item'); ?>
		<?php echo $form->textArea($model,'item',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'inventory'); ?>
		<?php echo $form->textArea($model,'inventory',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'look'); ?>
		<?php echo $form->textArea($model,'look',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ch'); ?>
		<?php echo $form->textArea($model,'ch',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'other'); ?>
		<?php echo $form->textArea($model,'other',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'avatar'); ?>
		<?php echo $form->textField($model,'avatar',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'privx_status'); ?>
		<?php echo $form->textArea($model,'privx_status',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'viewcont'); ?>
		<?php echo $form->textField($model,'viewcont'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'rass'); ?>
		<?php echo $form->textField($model,'rass'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'marks'); ?>
		<?php echo $form->textArea($model,'marks',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'today'); ?>
		<?php echo $form->textField($model,'today'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'dataf'); ?>
		<?php echo $form->textField($model,'dataf',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'last_visit'); ?>
		<?php echo $form->textField($model,'last_visit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bank'); ?>
		<?php echo $form->textField($model,'bank'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'stud'); ?>
		<?php echo $form->textField($model,'stud',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'oldworks'); ?>
		<?php echo $form->textArea($model,'oldworks',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'discuss'); ?>
		<?php echo $form->textArea($model,'discuss',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->