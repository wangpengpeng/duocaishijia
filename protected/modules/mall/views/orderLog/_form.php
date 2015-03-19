<div class="form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'order-log-form',
        'enableAjaxValidation'=>false,
    )); ?>

    <p class="note">带<span class="required"> * </span>的必须填写。</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="input-group">
        <?php echo $form->labelEx($model,'order_id'); ?>
        <?php echo $form->textField($model,'order_id'); ?>
        <?php echo $form->error($model,'order_id'); ?>
    </div>

    <div class="input-group">
        <?php echo $form->labelEx($model,'op_name'); ?>
        <?php echo $form->textField($model,'op_name',array('size'=>45,'maxlength'=>45)); ?>
        <?php echo $form->error($model,'op_name'); ?>
    </div>

    <div class="input-group">
        <?php echo $form->labelEx($model,'log_text'); ?>
        <?php echo $form->textArea($model,'log_text',array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->error($model,'log_text'); ?>
    </div>

    <div class="input-group">
        <?php echo $form->labelEx($model,'action_time'); ?>
        <?php echo $form->textField($model,'action_time',array('size'=>10,'maxlength'=>10)); ?>
        <?php echo $form->error($model,'action_time'); ?>
    </div>

    <div class="input-group">
        <?php echo $form->labelEx($model,'user_id'); ?>
        <?php echo $form->textField($model,'user_id',array('size'=>20,'maxlength'=>20)); ?>
        <?php echo $form->error($model,'user_id'); ?>
    </div>

    <div class="input-group">
        <?php echo $form->labelEx($model,'result'); ?>
        <?php echo $form->textField($model,'result',array('size'=>7,'maxlength'=>7)); ?>
        <?php echo $form->error($model,'result'); ?>
    </div>


    <div class="form-actions space" style="width: 65%">
        <?php echo TbHtml::formActions(array(
            TbHtml::submitButton('Submit', array('color' => TbHtml::BUTTON_COLOR_PRIMARY)),
            TbHtml::resetButton('Reset'),
        )); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->