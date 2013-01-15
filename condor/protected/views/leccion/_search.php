<?php
/* @var $this LeccionController */
/* @var $model Leccion */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_leccion'); ?>
		<?php echo $form->textField($model,'id_leccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'nombre_leccion'); ?>
		<?php echo $form->textField($model,'nombre_leccion',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->