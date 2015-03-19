<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="language" content="en"/>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
	<?php Yii::app()->getClientScript()->registerCssFile(F::themeUrl().'/css/bootstrap.css'); ?>
	<?php Yii::app()->getClientScript()->registerCssFile(F::themeUrl().'/css/bootstrap-responsive.css'); ?>
	<?php Yii::app()->getClientScript()->registerCssFile(F::themeUrl().'/css/yiistrap.css'); ?>
	<?php Yii::app()->getClientScript()->registerCssFile(F::themeUrl().'/css/styles.css'); ?>
	<?php Yii::app()->getClientScript()->registerCoreScript('jquery'); ?>
	<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/common.css"/>
	<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/common.css"/>
	<?php //Yii::app()->bootstrap->register(); ?>

</head>
<body screen_capture_injected="true">

<?php

	$countOrder = Order::model()->countByAttributes(array(
		'news' => 1,
	));

	$countMeasure = ArOrderMeasure::model()->countByAttributes(array(
		'news' => 1,
	));

	$counts = $countOrder + $countMeasure;

	$this->widget('bootstrap.widgets.TbNavbar', array(
    'color' => TbHtml::NAVBAR_COLOR_INVERSE,
    'brandLabel' => '后台管理',
    'collapse' => true,
    'items' => array(
        array(
            'class' => 'bootstrap.widgets.TbNav',
            'items' => array(
                array('label' => '控制面板', 'url' => array('/site/index'), 'visible' => !Yii::app()->user->isGuest),
                array('label' => '内容管理', 'url' => '#', 'items' => array(
//                    array('label' => '内容分类', 'url' => array('/cms/contentCategory/admin')),
                    array('label' => '单页管理', 'url' => array('/cms/page/admin')),
	        //      array('label' => '文章管理', 'url' => array('/cms/article/admin')),
//                    array('label' => '新闻管理', 'url' => array('/cms/news/admin')),
//                    array('label' => '留言管理', 'url' => array('/cms/feedback/admin')),
//                    array('label' => '视频管理','url' => array('/cms/video/admin')),
//                    array('label' => 'OTHER'),
                    array('label' => '广告管理', 'url' => array('/cms/ad/admin')),
//                    array('label' => '友情链接', 'url' => array('/cms/friendLink/admin')),
////                    array('label' => '邮件订阅', 'url' => array('/cms/newsletterSubscriber/admin')),
//                    array('label' => '客服管理', 'url' => array('/cms/customerService/admin')),
                ), 'visible' => !Yii::app()->user->isGuest && !Yii::app()->user->isCustomService()), //&& !Yii::app()->user->isCustomService()),

                array('label' => '商城管理', 'url' => '#', 'items' => array(
                    array('label' => 'ITEM', 'visible' =>!Yii::app()->user->isCustomService()) ,
                    array('label' => '商品分类', 'url' => array('/mall/itemCategory/admin')),
                    array('label' => '商品属性', 'url' => array('/mall/itemProp/admin')),
                    array('label' => '商品列表', 'url' => array('/mall/item/admin')),
                    array('label' => '图片空间', 'url' => array('/mall/elfinder/admin')),
	                array('label' => '商品颜色图组', 'url' => array('/mall/itemPropImg/admin')),
//                    array('label' => 'Payment'),
//                    array('label' => '支付方式', 'url' => array('/mall/paymentMethod/admin')),
//                    array('label' => '物流配送', 'url' => array('/mall/shippingMethod/admin')),
                    array('label' => '' ,'htmlOptions' => array('style' => 'background:#f5f5f5'),),
                    array('label' => '订单列表', 'url' => array('/mall/order/admin')),


//                    array('label' => '资金列表', 'url' => array('/mall/payment/admin')),
//                    array('label' => '订单日志', 'url' => array('/mall/orderLog/admin')),
//                    array('label' => 'Service'),
//                    array('label' => '发货单', 'url' => array('/mall/shipping/admin')),
//                    array('label' => '退货单', 'url' => array('/mall/refund/admin')),
                ), 'visible' => !Yii::app()->user->isGuest && !Yii::app()->user->isCustomService()),//&& !Yii::app()->user->isCustomService()),


	            array('label' => '门店', 'url' => '#', 'items'=>array(
		            array('label' => '查看门店', 'url' => array('/mall/store/admin')),
//		            array('label' => '门店分配订单','url' => array('/mall/order/adminStore'),),
	            ), 'visible' => !Yii::app()->user->isGuest or Yii::app()->user->isCustomService()),//&& !Yii::app()->user->isCustomService() ),

				array('label' => '查看预约单', 'url' => array('/mall/measureOderList/admin'), 'visible' => !Yii::app()->user->isGuest),

	            array('label' => '用户控制', 'url' => '#', 'items' => array(
                    array('label' => '会员列表', 'url' => array('/user/admin/admin')),
                    array('label' => '管理员列表', 'url' => array('/adminUser/admin')),
                    array('label' => '权限管理', 'url' => array('/auth/assignment/index')),
                ), 'visible' => !Yii::app()->user->isGuest && !Yii::app()->user->isCustomService()),//&& !Yii::app()->user->isCustomService() ),

//	            array('label' => '插件列表', 'url' => array('/plugin/pluginmanage/index') , 'visible' => !Yii::app()->user->isGuest&& !Yii::app()->user->isCustomService()),
                array('label' => '系统设置', 'url' => '#', 'items' => array(
                    array('label' => '菜单管理', 'url' => array('/menu/admin')),
                    array('label' => '分类管理', 'url' => array('/category/admin')),
//                    array('label' => '皮肤管理', 'url' => array('/theme/admin')),
//                    array('label' => '语言管理', 'url' => array('/language/admin')),
//                    array('label' => '货币管理', 'url' => array('/currency/admin')),
                ), 'visible' => !Yii::app()->user->isGuest && !Yii::app()->user->isCustomService()),//&&!Yii::app()->user->isCustomService()),//&& !Yii::app()->user->isCustomService()),
            ),

        ),
	    array(
		    'class' => 'bootstrap.widgets.TbNav',
		    'htmlOptions' => array('class' => 'news'),
		    'items' => array(
			    array('label'=>'您有'.$counts.'条新消息!',
			          'url' => '#',
				      'items' =>array(
					      array('label' => '订单列表('.$countOrder.')',
					            'url' => array('/mall/order/admin/news/1'),
					            'htmlOptions' => array('class' => 'orderCount'),
					      ),
					      array('label' => '预约单('.$countMeasure.')',
					            'url' => array('/mall/measureOderList/admin'),
					            'htmlOptions' => array('class' => 'measureCount'),
					      ),
				      ),
			          'htmlOptions' => array('class' => 'newsCount',),
			          'visible' => !Yii::app()->user->isGuest && !Yii::app()->user->isCustomService(),
			    ),

		    ),

	    ),
//	    '<ul class="news">
//		   <span class="newsCount">新消息</span>
//		 </ul>',

        array(
            'class' => 'bootstrap.widgets.TbNav',
            'htmlOptions' => array('class' => 'pull-right'),
            'items' => array(
//                array('label' => '清除前台缓存', 'url' => Yii::app()->createUrl('settings/clearFrontend'), 'visible' => !Yii::app()->user->isGuest&& !Yii::app()->user->isCustomService()),
//                array('label' => '清除后台缓存', 'url' => Yii::app()->createUrl('settings/clearBackend'), 'visible' => !Yii::app()->user->isGuest&& !Yii::app()->user->isCustomService()),
//	            array('label' => '网站前台', 'url' => Yii::app()->request->hostInfo.Yii::app()->baseUrl ,'visible' => !Yii::app()->user->isGuest&& !Yii::app()->user->isCustomService()),
//                array('label' => '站点配置', 'url' => array('/settings/index'), 'visible' => !Yii::app()->user->isGuest&& !Yii::app()->user->isCustomService()),
                array('label' => '登录', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                array('label' => Yii::app()->user->name, 'url' => '#', 'items' => array(
                    array('label' => '个人资料', 'icon' => 'user', 'url' => array('/adminUser/view', 'id'=>Yii::app()->user->id)),
                    array('label' => '退出', 'icon' => 'off', 'url' => array('/site/logout')),
					array('label' => '返回前台', 'url' => '#','htmlOptions' => array('class' => 'taget'),)
                ), 'visible' => !Yii::app()->user->isGuest),
            ),
        ),

    ),

));

?>

<div class="container-fluid" id="page">

	<?php echo $content; ?>

	<div class="clear"></div>

	<footer class="clearfix">
		<div class="row-fluid">
			<div class="span12">
				<p class="powered"><?php echo Yii::powered(); ?>
					/ <?php echo CHtml::link('和佳软件', 'http://www.hejia.cn'); ?>
					<span class="copy">Copyright &copy; <?php echo date('Y'); ?> by <?php echo F::sg('site', 'name'); ?>
						. All Rights Reserved.</span>
				</p>
			</div>
		</div>
	</footer>
	<!-- footer -->

</div>
<!-- page -->
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/common.js"></script>

<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.dynotable.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/common.js"></script>
<?php
	$cs = Yii::app()->clientScript;
	$cs->registerScriptFile(Yii::app()->baseUrl.'/js/jquery.form.js', CClientScript::POS_END);
	$cs->registerScriptFile(Yii::app()->baseUrl.'/js/skus.js', CClientScript::POS_END);?>

<script >
	function auto_reflush()
	{
		var temp_content='';
		var url = "order/getNewsCount";
		$.get(url,{site_id:97},function(data){
			if(data.counts!=0){
			$('.news').show();
			$('.newsCount').children('.dropdown-toggle').html('您有'+data.counts+'条新消息!'+'<b class="caret"></b>');
//			$('.newsCount').children('.dropdown-toggle').after('<b class="caret"></b>');

				if(data.countOrder!=0){
					$('.orderCount').show();
					$('.orderCount').children('a').text('订单列表（'+data.countOrder+')');
				}else{
					$('.orderCount').hide();
				}

				if(data.countMeasure!=0){
					$('.measureCount').show();
					$('.measureCount').children('a').text('预约单（'+data.countMeasure+')');
				}else{
					$('.measureCount').hide();
				}
			}else{
				$('.news').hide();
			}
		},'json');

	}
	$(document).ready(function () {
		var count = <?php echo $counts?>;
		if(count==0){
			$('.news').hide();
		}
		setInterval("auto_reflush()",3000);
		$(".taget").children('a').attr("target", "_blank");
		$(".taget").children('a').attr("href",'<?php echo Yii::app()->request->getHostInfo()?>')
	});
</script>
</body>
</html>
