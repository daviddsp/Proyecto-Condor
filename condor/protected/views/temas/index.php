<?php
/* @var $this TemasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Temases',
);

$this->menu=array(
	array('label'=>'Create Temas', 'url'=>array('create')),
	array('label'=>'Manage Temas', 'url'=>array('admin')),
);
?>

<h1>Temases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
