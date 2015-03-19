<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>支付宝纯网关接口接口</title>
</head>
<?php
/* *
 * 功能：纯网关接口接入页
 * 版本：3.3
 * 修改日期：2012-07-23
 * 说明：
 * 以下代码只是为了方便商户测试而提供的样例代码，商户可以根据自己网站的需要，按照技术文档编写,并非一定要使用该代码。
 * 该代码仅供学习和研究支付宝接口使用，只是提供一个参考。

 *************************注意*************************
 * 如果您在接口集成过程中遇到问题，可以按照下面的途径来解决
 * 1、商户服务中心（https://b.alipay.com/support/helperApply.htm?action=consultationApply），提交申请集成协助，我们会有专业的技术工程师主动联系您协助解决
 * 2、商户帮助中心（http://help.alipay.com/support/232511-16307/0-16307.htm?sh=Y&info_type=9）
 * 3、支付宝论坛（http://club.alipay.com/read-htm-tid-8681712.html）
 * 如果不想使用扩展功能请把扩展功能参数赋空值。
 */

require_once("alipay.config.php");
require_once("lib/alipay_submit.class.php");

/**************************请求参数**************************/
//      $baseurl="http://local.dcsj.com/";
//	    $baseurl="http://192.168.0.52/"; //必须以http开头, 本地测试用 52就是自己ip地址
//  	    $baseurl="http://www.fensj.cn/"; //必须以http开头，如果是服务测试，则要用服务器的地址。
//		$baseurl="http://www.duocai.cn/";

	    $baseurl =	Yii::app()->request->hostInfo;
	    $baseurl = $baseurl ."/";

        $myurl=$baseurl."alipay/default/";
        //支付类型
        $payment_type = "1";
        //必填，不能修改
        //服务器异步通知页面路径
        $notify_url = $myurl."notify";
        //需http://格式的完整路径，不能加?id=123这类自定义参数

        //页面跳转同步通知页面路径
        $return_url =  $myurl."return";
        //需http://格式的完整路径，不能加?id=123这类自定义参数，不能写成http://localhost/

        //卖家支付宝帐户
        $seller_email = "qcsj188@126.com";
        //必填

        //订单描述

        $body = $_POST['WIDbody'];
        //默认支付方式
        $paymethod = "bankPay";
        //必填
        //默认网银
        $defaultbank = "BOC";
        //必填，银行简码请参考接口技术文档

        //商品展示地址
        $show_url = $baseurl."/";
        //需以http://开头的完整路径，例如：http://www.商户网址.com/myorder.html

        //防钓鱼时间戳
        $anti_phishing_key = "";
        //若要使用请调用类文件submit中的query_timestamp函数

        //客户端的IP地址
        $exter_invoke_ip = "";
        //非局域网的外网IP地址，如：221.0.0.1


/************************************************************/

//构造要请求的参数数组，无需改动
$parameter = array(
		"service" => "create_direct_pay_by_user",
		"partner" => trim($alipay_config['partner']),
		"payment_type"	=> $payment_type,
		"notify_url"	=> $notify_url,
		"return_url"	=> $return_url,
		"seller_email"	=> $seller_email,
		"out_trade_no"	=> $WIDout_trade_no,
		"subject"	=> $WIDsubject,
		"total_fee"	=>$WIDtotal_fee,
		"body"	=> $body,
		"paymethod"	=> $paymethod,
		"defaultbank"	=> $defaultbank,
		"show_url"	=> $show_url,
		"anti_phishing_key"	=> $anti_phishing_key,
		"exter_invoke_ip"	=> $exter_invoke_ip,
		"_input_charset"	=> trim(strtolower($alipay_config['input_charset']))
);

//建立请求
$alipaySubmit = new AlipaySubmit($alipay_config);
//$html_text = $alipaySubmit->buildRequestForm($parameter,"get", "确认");
$html_text = $alipaySubmit->buildRequestForm($parameter,"get", "正在转向到付款页面中...");
echo $html_text;

?>
</body>
</html>