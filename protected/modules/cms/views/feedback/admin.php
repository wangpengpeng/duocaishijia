<?php$this->breadcrumbs = array(    Yii::t('main','Feedback') => array('index'),    Yii::t('main', 'Manage'),);$this->menu = array(    array('label' =>Yii::t('main','List Feedback'), 'url' => array('index')),);Yii::app()->clientScript->registerScript('search', "$('.search-button').click(function(){	$('.search-form').toggle();	return false;});$('.search-form form').submit(function(){	$.fn.yiiGridView.update('feedback-grid', {		data: $(this).serialize()	});	return false;});");?><h1><?php echo Yii::t('main','Manage Feedback');?></h1><?php$this->widget('bootstrap.widgets.TbGridView', array(    'id' => 'feedback-grid',    'dataProvider' => $model->search(),    'filter' => $model,    'columns' => array(        'id',        'name',        'tel',        'email',        array(// display 'create_time' using an expression            'name' => 'create_time',            'value' => 'date("Y-m-d", $data->create_time)',        ),        /*          'create_time',          'update_time',         */        array(            'class' => 'bootstrap.widgets.TbButtonColumn',        ),    ),));?>