<?php$this->breadcrumbs = array(    Yii::t('main','Page')=> array('index'),    $model->title,);$this->menu = array(    array('label' =>Yii::t('main','Create Page'), 'icon' => 'plus', 'url' => array('create')),    array('label' =>Yii::t('main','Update Page'), 'icon' => 'pencil','url' => array('update', 'id' => $model->id)),    array('label' =>Yii::t('main','Delete Page'), 'icon' => 'trash','url' => '#', 'linkOptions' => array('submit' => array('delete', 'id' => $model->id), 'confirm' => 'Are you sure you want to delete this item?')),    array('label' =>Yii::t('main','Manage Page'), 'icon'=>'cog','url'=>array('admin')),);?><h1><?php echo Yii::t('main','View Page'); ?> #<?php echo $model->id; ?></h1><?php$this->widget('bootstrap.widgets.TbDetailView', array(    'data' => $model,    'attributes' => array(        'id',        'key',        'title',        'content:html',    ),));?>