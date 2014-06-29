<?php
/* @var $this TblCharsheetController */
/* @var $data TblCharsheet */

//$char = new CharsheetsModule;
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo "Имя"; ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pass')); ?>:</b>
	<?php echo CHtml::encode($data->pass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('privx_pass')); ?>:</b>
	<?php echo CHtml::encode($data->privx_pass); ?>
	<br />
*/ ?>
	<b><?php echo "Почта"; ?>:</b>
	<?php echo CHtml::encode($data->mail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('icq')); ?>:</b>
	<?php echo CHtml::encode($data->icq); ?>
	<br />
<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('www')); ?>:</b>
	<?php echo CHtml::encode($data->www); ?>
	<br />

	*/?>
	<b><?php echo "Статус"; ?>:</b>
	<?php
//	echo CHtml::encode($data->faculty);
		switch (CHtml::encode($data->faculty))
		{
			case "i":
				echo "Факультет Истории Магии";
				break;
			case "b":
				echo "Факультет Биоэнергетики";
				break;
			case "o":
				echo "Факультет Оккультизма";
				break;
			case "a":
				echo "Факультет Алхимии";
				break;
			case "r":
				echo "Преподаватель";
				break;
			case "j":
				echo "Житель";
				break;
			case "z":
				echo "Отключен";
				break;
			case "m":
				echo "Опальная администрация";
				break;
			default:
				echo "Непонятный крендель";
				break;
		}
	?>
	<br />
<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('dreamfaculty')); ?>:</b>
	<?php echo CHtml::encode($data->dreamfaculty); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kurs')); ?>:</b>
	<?php echo CHtml::encode($data->kurs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ip_address')); ?>:</b>
	<?php echo CHtml::encode($data->ip_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('face')); ?>:</b>
	<?php echo CHtml::encode($data->face); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('balls')); ?>:</b>
	<?php echo CHtml::encode($data->balls); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('blvl')); ?>:</b>
	<?php echo CHtml::encode($data->blvl); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('brpg')); ?>:</b>
	<?php echo CHtml::encode($data->brpg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rasa')); ?>:</b>
	<?php echo CHtml::encode($data->rasa); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dation')); ?>:</b>
	<?php echo CHtml::encode($data->dation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('anim')); ?>:</b>
	<?php echo CHtml::encode($data->anim); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bio')); ?>:</b>
	<?php echo CHtml::encode($data->bio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('phis')); ?>:</b>
	<?php echo CHtml::encode($data->phis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mag')); ?>:</b>
	<?php echo CHtml::encode($data->mag); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('char_skills')); ?>:</b>
	<?php echo CHtml::encode($data->char_skills); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('item')); ?>:</b>
	<?php echo CHtml::encode($data->item); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inventory')); ?>:</b>
	<?php echo CHtml::encode($data->inventory); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('look')); ?>:</b>
	<?php echo CHtml::encode($data->look); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ch')); ?>:</b>
	<?php echo CHtml::encode($data->ch); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('other')); ?>:</b>
	<?php echo CHtml::encode($data->other); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avatar')); ?>:</b>
	<?php echo CHtml::encode($data->avatar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
	<?php echo CHtml::encode($data->status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('privx_status')); ?>:</b>
	<?php echo CHtml::encode($data->privx_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('viewcont')); ?>:</b>
	<?php echo CHtml::encode($data->viewcont); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rass')); ?>:</b>
	<?php echo CHtml::encode($data->rass); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('marks')); ?>:</b>
	<?php echo CHtml::encode($data->marks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('today')); ?>:</b>
	<?php echo CHtml::encode($data->today); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dataf')); ?>:</b>
	<?php echo CHtml::encode($data->dataf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_visit')); ?>:</b>
	<?php echo CHtml::encode($data->last_visit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bank')); ?>:</b>
	<?php echo CHtml::encode($data->bank); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stud')); ?>:</b>
	<?php echo CHtml::encode($data->stud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('oldworks')); ?>:</b>
	<?php echo CHtml::encode($data->oldworks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('discuss')); ?>:</b>
	<?php echo CHtml::encode($data->discuss); ?>
	<br />
*/ ?>
	<b><?php echo "Вкл/Выкл"; ?>:</b>
	<?php echo CHtml::encode($data->state); ?>
	<br />



</div>