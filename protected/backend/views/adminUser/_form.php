<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'admin-user-form',
//	'name'=>'AdminUser',
//	'enableAjaxValidation'=>false,
	'enableAjaxValidation'=>true,
)); ?>

	<p class="help-block">带<span class="required"> * </span>的必须填写。</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldControlGroup($model,'username',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldControlGroup($model,'password',array('class'=>'span5','maxlength'=>128, 'value'=>'')); ?>

	<?php echo $form->textFieldControlGroup($model,'email',array('class'=>'span5','maxlength'=>128)); ?>

	<?php echo $form->textFieldControlGroup($model,'profile',array('class'=>'span5','maxlength'=>128)); ?>

	<?php
    echo TbHtml::formActions(array(
			        TbHtml::submitButton('Submit', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
			        TbHtml::resetButton('Reset'),
         ));
    ?>

<?php $this->endWidget(); ?>
