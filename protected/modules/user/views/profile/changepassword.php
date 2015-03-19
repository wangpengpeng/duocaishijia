<div class="my_info">
    <a class="current">我的密码</a>
</div>
<div class="profile_info1">
    <div class="box-title" style="font-size: 14px"><?php echo UserModule::t("Change password"); ?></div>
    <div class="box-content">
        <div class="form">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'changepassword-form',
                'enableAjaxValidation' => true,
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
            ));
            ?>

            <p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
            <?php echo $form->errorSummary($model); ?>

            <div class="row">
                <?php echo $form->labelEx($model, 'oldPassword'); ?>
                <?php echo $form->passwordField($model, 'oldPassword'); ?>
                <?php echo $form->error($model, 'oldPassword'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'password'); ?>
                <?php echo $form->passwordField($model, 'password'); ?>
                <?php echo $form->error($model, 'password'); ?>
                <p class="hint">
                    <?php echo UserModule::t("Minimal password length 4 symbols."); ?>
                </p>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'verifyPassword'); ?>
                <?php echo $form->passwordField($model, 'verifyPassword'); ?>
                <?php echo $form->error($model, 'verifyPassword'); ?>
            </div>


            <div class="row submit">
                <?php echo CHtml::submitButton(UserModule::t("Save")); ?>
            </div>

            <?php $this->endWidget(); ?>
        </div><!-- form -->
    </div>
</div>

