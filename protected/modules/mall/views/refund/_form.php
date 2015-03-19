<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'refund-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="help-block">带<span class="required"> * </span>的必须填写。</p>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'refund_sn',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'money',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'currency',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'order_id',array('class'=>'span5','maxlength'=>20)); ?>

	<?php echo $form->textFieldRow($model,'pay_method',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'user_id',array('class'=>'span5','maxlength'=>10)); ?>

	<?php echo $form->textFieldRow($model,'account',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'bank',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'refund_account',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'status',array('class'=>'span5','maxlength'=>8)); ?>

	<?php echo $form->textFieldRow($model,'create_time',array('class'=>'span5','maxlength'=>10)); ?>


<div class="form-actions">
    <?php  echo TbHtml::formActions(array(
        TbHtml::submitButton('Submit', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
        TbHtml::resetButton('Reset'),
    )); ?>
</div>

<?php $this->endWidget(); ?>
