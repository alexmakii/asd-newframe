<?php
/* @var $this TblCharsheetController */
/* @var $model TblCharsheet */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tbl-charsheet-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pass'); ?>
		<?php echo $form->passwordField($model,'pass',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'privx_pass'); ?>
		<?php echo $form->textField($model,'privx_pass',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'privx_pass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mail'); ?>
		<?php echo $form->textField($model,'mail',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'icq'); ?>
		<?php echo $form->textField($model,'icq',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'icq'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'www'); ?>
		<?php echo $form->textField($model,'www',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'www'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'faculty'); ?>
		<?php echo $form->textField($model,'faculty',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'faculty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dreamfaculty'); ?>
		<?php echo $form->textField($model,'dreamfaculty',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'dreamfaculty'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'kurs'); ?>
		<?php echo $form->textField($model,'kurs'); ?>
		<?php echo $form->error($model,'kurs'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ip_address'); ?>
		<?php echo $form->textField($model,'ip_address',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'ip_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'face'); ?>
		<?php echo $form->textField($model,'face',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'face'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'balls'); ?>
		<?php echo $form->textField($model,'balls'); ?>
		<?php echo $form->error($model,'balls'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'blvl'); ?>
		<?php echo $form->textField($model,'blvl',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'blvl'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'brpg'); ?>
		<?php echo $form->textField($model,'brpg'); ?>
		<?php echo $form->error($model,'brpg'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rasa'); ?>
		<?php echo $form->textField($model,'rasa',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'rasa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dation'); ?>
		<?php echo $form->textField($model,'dation',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'dation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'anim'); ?>
		<?php echo $form->textField($model,'anim',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'anim'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bio'); ?>
		<?php echo $form->textArea($model,'bio',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'bio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phis'); ?>
		<?php echo $form->textArea($model,'phis',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'phis'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'mag'); ?>
		<?php echo $form->textArea($model,'mag',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'mag'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'char_skills'); ?>
		<?php echo $form->textArea($model,'char_skills',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'char_skills'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'item'); ?>
		<?php echo $form->textArea($model,'item',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'item'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inventory'); ?>
		<?php echo $form->textArea($model,'inventory',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'inventory'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'look'); ?>
		<?php echo $form->textArea($model,'look',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'look'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ch'); ?>
		<?php echo $form->textArea($model,'ch',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'ch'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other'); ?>
		<?php echo $form->textArea($model,'other',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'other'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'avatar'); ?>
		<?php echo $form->textField($model,'avatar',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'avatar'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'privx_status'); ?>
		<?php echo $form->textArea($model,'privx_status',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'privx_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'viewcont'); ?>
		<?php echo $form->textField($model,'viewcont'); ?>
		<?php echo $form->error($model,'viewcont'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'rass'); ?>
		<?php echo $form->textField($model,'rass'); ?>
		<?php echo $form->error($model,'rass'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'marks'); ?>
		<?php echo $form->textArea($model,'marks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'marks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'today'); ?>
		<?php echo $form->textField($model,'today'); ?>
		<?php echo $form->error($model,'today'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dataf'); ?>
		<?php echo $form->textField($model,'dataf',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'dataf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_visit'); ?>
		<?php echo $form->textField($model,'last_visit'); ?>
		<?php echo $form->error($model,'last_visit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bank'); ?>
		<?php echo $form->textField($model,'bank'); ?>
		<?php echo $form->error($model,'bank'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'stud'); ?>
		<?php echo $form->textField($model,'stud',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'stud'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'oldworks'); ?>
		<?php echo $form->textArea($model,'oldworks',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'oldworks'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'discuss'); ?>
		<?php echo $form->textArea($model,'discuss',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'discuss'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'state'); ?>
		<?php echo $form->textField($model,'state'); ?>
		<?php echo $form->error($model,'state'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->