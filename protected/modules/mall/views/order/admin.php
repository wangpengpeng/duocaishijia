<?php
$this->breadcrumbs = array(
    Yii::t('main','Orders') => array('index'),
    Yii::t('main','Manage'),
);
?>
<h1><?php echo Yii::t('main','Manage Orders');?></h1>

<p>You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
    or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>
<?php echo CHtml::link('<div class="btn btn-primary">创建订单</div>', '#', array('class' => 'search-button',)); ?>
<div class="search-form" style="display:none">
    <?php $this->renderPartial('select_user', array(
        'users' => $users,
    )); ?>
</div>
<?php $this->widget('bootstrap.widgets.TbGridView', array(
    'id' => 'order-grid',
    'dataProvider' => $model->search($news),
    'filter' => $model,
    'enableHistory' => 'true',
    'columns' => array(

        'order_id',
        array(
            'name' => 'user_id',
            'header' => '会员账号',
            'value' => 'Tbfunction::getUser($data->user_id)',
        ),
        array(
            'name' => 'pay_status',
            'value' => 'Tbfunction::showPayStatus($data->pay_status)',
            //  'filter' => Tbfunction::ReturnPayStatus(),
        ),


        array(
            'name' => 'refund_status',
            'value' => 'Tbfunction::showRefundStatus($data->refund_status)',
            'filter' => Tbfunction::ReturnRefundStatus(),
        ),
//        array(
//            'name' => 'payment_method_id',
//            'value' => 'Tbfunction::showPayMethod($data->payment_method_id)',
//            'filter' => Tbfunction::ReturnPayMethod(),
//        ),
        'pay_fee',
//        'ship_fee',
        'total_fee',
//        array(
//            'name' => 'shipping_method_id',
//            'value' => 'Tbfunction::showShipMethod($data->shipping_method_id)',
//            'filter' => Tbfunction::ReturnShipMethod(),
//        ),
        array(
            'name' => 'create_time',
            'value' => 'date("Y-m-d H:i:s",$data->create_time)'
        ),
        array(
            'name' => 'receiver_name',
        ),
//        array(
//            'name' => 'ship_status',
//            'value' => 'Tbfunction::showShipStatus($data->ship_status)',
//            'filter' => Tbfunction::ReturnShipStatus(),
//        ),
//        array(
//            'class' => 'bootstrap.widgets.TbButtonColumn',
//            'template' => '{deliver}',
//            'buttons' => array(
//                'deliver' => array(
//                    'label' => '发货',
////                    'icon' => 'plane',
//                    'url' => 'Yii::app()->createUrl("mall/order/deliver", array("id"=>$data->order_id))',
//                    'options' => array(
//                        'class' => 'btn btn-info btn-lg',
//                        'data-target' => '#myModal',
//                        'data-toggle' => 'modal',
//                        'ajax' => array(
//                            'type' => 'POST',
//                            'url' => "js:$(this).attr('href')",
//                            'success' => 'function(data) { $("#myModal .modal-body").html(data); $("#myModal").modal(); }',
//                            'error' => 'function(XHR) {$("#myModal .modal-body").html("未知错误"); $("#myModal").modal();}',
//                            'data' => array('fid' => 'js:this.value', 'YII_CSRF_TOKEN' => Yii::app()->request->csrfToken),
//                        ),
//                    ),
//                ),
//            ),
//        ),
	    array(
		    'value' => 'Tbfunction::getNews($data->news)',
		    'htmlOptions'=>array(
			    'class'=>'newsOrder',
		    ),
	    ),
        array(
            'class' => 'bootstrap.widgets.TbButtonColumn',
            'template'=>'{view}{update}{delete}',
	        'buttons'=>array(
		        'view'=>array(
			        "options" => array(
				        'onclick' => 'return del(this);'
			        ),
		        ),
		        'update'=>array(
			        "options" => array(
				        'onclick' => 'return del(this);'
			        ),
		        ),
	        ),

        ),
    )
));
?>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">发货</h4>
            </div>
            <div class="modal-body">
                ...
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
	$(function(){
		$("#myModal").on("hidden", function () {
			$(this).removeData("modal");
		});
	});
//	$(".update").click(function(){
//		if($(this).parent().parent().children('.newsOrder').text()=='new'){
//			var href = $(this).attr('href');
//			var Id = href.substr(href.lastIndexOf('=')+1);
//			var data = {'Id' :Id };
//			$.post("order/deleteNews",data , function(response) {
////				if(response.success){
////					alert('ok');
////				}else{
////					alert('not ok');
////				}
//			}, 'json' );
//		}
//
//    });
//    $(".view").click(function(){
//	    if($(this).parent().parent().children('.newsOrder').text()=='new'){
//		    var href = $(this).attr('href');
//		    var Id = href.substr(href.lastIndexOf('=')+1);
//		    var data = {'Id' :Id };
//		    $.post("order/deleteNews",data , function(response) {
//			    return false;
////			    if(response.success){
////				    alert('ok');
////			    }else{
////				    alert('not ok');
////			    }
//		    }, 'json' );
//	    }
//
//    });
	function del(id){
		if($(id).parent().parent().children('.newsOrder').text()=='new'){
			var href = $(id).attr('href');

			var Id = href.substr(href.lastIndexOf('=')+1);
			var data = {'Id' :Id };

			var response = testAsync(data);

//			alert(response.success);
			if(response.success){
				return true;
			}else{
				alert('删除new出错，请重新点击');
				return false;
			}
		}
	}
	function delpost(data){
		var result;
		$.post("order/deleteNews",data , function (response) {
			result = response;
		}, 'json' );

		return result;
	}
	function testAsync(data) {
	 //定义一个全局变量来接受$post的返回值
	  var result;
	 // 用ajax的“同步方式”调用一般处理程序
	   $.ajax({
	   url: "order/deleteNews",
	   async: false,//改为同步方式
	   type: "POST",
	   dataType:'json',
	   data: data,
		   success: function (response) {
	         result = response;
	   }
	   });
	  return result;
	}
</script>

