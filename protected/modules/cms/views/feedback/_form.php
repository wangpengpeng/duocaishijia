<div class="form"><?php $form=$this->beginWidget('CActiveForm', array(	'id'=>'feedback-form',	'enableAjaxValidation'=>false,)); ?><!--	<p class="note">带<span class="required"> * </span>的必须填写。</p>-->	<?php echo $form->errorSummary($model); ?>	<div class="row"><!--		--><?php //echo $form->labelEx($model,'name'); ?><!--		--><?php //echo $form->textField($model,'name',array('size'=>50,'maxlength'=>50)); ?><!--		--><?php //echo $form->error($model,'name'); ?>        <?php echo CHtml::encode($model->getAttributeLabel('name')); ?>:</b>        <?php echo CHtml::encode($model->name); ?>	</div>	<div class="row"><!--		--><?php //echo $form->labelEx($model,'tel'); ?><!--		--><?php //echo $form->textField($model,'tel',array('size'=>60,'maxlength'=>100)); ?><!--		--><?php //echo $form->error($model,'tel'); ?>        <?php echo CHtml::encode($model->getAttributeLabel('name')); ?>:</b>        <?php echo CHtml::encode($model->name); ?>	</div>	<div class="row"><!--		--><?php //echo $form->labelEx($model,'email'); ?><!--		--><?php //echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?><!--		--><?php //echo $form->error($model,'email'); ?>        <?php echo CHtml::encode($model->getAttributeLabel('tel')); ?>:</b>        <?php echo CHtml::encode($model->tel); ?>	</div>	<div class="row"><!--		--><?php //echo $form->labelEx($model,'content'); ?><!--		--><?php //echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?><!--		--><?php //echo $form->error($model,'content'); ?>        <?php echo CHtml::encode($model->getAttributeLabel('content')); ?>:</b>        <?php echo CHtml::encode($model->content); ?>	</div>	<div class="row">		<?php echo $form->labelEx($model,'reply'); ?>		<?php echo $form->textArea($model,'reply',array('rows'=>6, 'cols'=>50)); ?>		<?php echo $form->error($model,'reply'); ?>	</div>	<div class="row buttons">		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>	</div><?php $this->endWidget(); ?></div><!-- form -->