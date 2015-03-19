<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Restore");
$this->breadcrumbs=array(
	UserModule::t("Login") => array('/user/login'),
	UserModule::t("Restore"),
);
?>
<div class="login_box col-lg-12">
    <div class="login_tit">
        <a class="current"><?php echo UserModule::t("RestoreTitle"); ?></a>
    </div>
    <div class="login_ct">
        <div class="login col-lg-6">
            <div class="login_form">
<?php if(Yii::app()->user->hasFlash('recoveryMessage')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('recoveryMessage'); ?>
</div>
<?php else: ?>

<div class="form">
<?php echo CHtml::beginForm(); ?>

	<?php echo CHtml::errorSummary($form); ?>
	

    <div class="form_m">
        <div class="form_1"> <?php echo CHtml::activeLabel($form,'login_or_email'); ?></div>
        <?php echo CHtml::activeTextField($form,'login_or_email') ?>
    </div>

	<div class="form_msubmit">
		<?php echo CHtml::submitButton(UserModule::t("Restore")); ?>
	</div>

<?php echo CHtml::endForm(); ?>
</div><!-- form -->
<?php endif; ?>
    </div>
</div>
        <div class="logo_c col-lg-6">
<!--            <img alt="" src="--><?php //echo Yii::app()->theme->baseUrl; ?><!--/image/logo_b.png" width="257" height="152"/>-->
        </div>
</div>
</div>
    <div class="clear"></div>
