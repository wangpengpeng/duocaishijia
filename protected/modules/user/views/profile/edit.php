<div class="my_info">
    <a class="current">我的个人信息</a>
</div>
<div class="profile_info1">
    <div class="box-title" style="font-size: 14px"><?php echo UserModule::t("修改信息"); ?></div>
    <div class="box-content">
        <?php if (Yii::app()->user->hasFlash('profileMessage')): ?>
            <div class="success">
                <?php echo Yii::app()->user->getFlash('profileMessage'); ?>
            </div>
        <?php endif; ?>
        <div class="form">
            <?php
            $form = $this->beginWidget('CActiveForm', array(
                'id' => 'profile-form',
                'enableAjaxValidation' => true,
                'htmlOptions' => array('enctype' => 'multipart/form-data'),
            ));
            ?>

            <p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>

            <?php echo $form->errorSummary(array($model, $profile)); ?>

            <?php
            $profileFields = Profile::getFields();
            if ($profileFields) {
                foreach ($profileFields as $field) {
                    ?>
                    <div class="row">
                        <?php
                        echo $form->labelEx($profile, $field->varname);

                        if ($widgetEdit = $field->widgetEdit($profile)) {
                            echo $widgetEdit;
                        } elseif ($field->range) {
                            echo $form->dropDownList($profile, $field->varname, Profile::range($field->range));
                        } elseif ($field->field_type == "TEXT") {
                            echo $form->textArea($profile, $field->varname, array('rows' => 6, 'cols' => 50));
                        } else {
                            echo $form->textField($profile, $field->varname, array('size' => 60, 'maxlength' => (($field->field_size) ? $field->field_size : 255)));
                        }
                        echo $form->error($profile, $field->varname);
                        ?>
                    </div>
                <?php
                }
            }
            ?>
            <div class="row">
                <?php echo $form->labelEx($model, 'username'); ?>
                <?php echo $form->textField($model, 'username', array('size' => 60, 'maxlength' => 60)); ?>
                <?php echo $form->error($model, 'username'); ?>
            </div>

            <div class="row">
                <?php echo $form->labelEx($model, 'email'); ?>
                <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 128)); ?>
                <?php echo $form->error($model, 'email'); ?>
            </div>

            <div class="row buttons">
                <?php echo CHtml::submitButton($model->isNewRecord ? UserModule::t('Create') : UserModule::t('Save')); ?>
            </div>

            <?php $this->endWidget(); ?>

        </div><!-- form -->
    </div>
</div>
