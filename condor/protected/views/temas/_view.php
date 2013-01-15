<?php
/* @var $this TemasController */
/* @var $data Temas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_tema')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_tema), array('view', 'id'=>$data->id_tema)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_tema')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_tema); ?>
	<br />


</div>