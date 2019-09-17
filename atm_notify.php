<?php
require_once('conf.php');
require_once('mwt-newebpay_sdk.php');
$TradeInfo = file_get_contents("php://input");

$arr = mb_split("&",$TradeInfo);
$get_aes = str_replace("TradeInfo=","",$arr[2]);

$data = create_aes_decrypt($get_aes,$hashKey,$hashIV);
$json = json_decode($data);

if($json->Status == "SUCCESS"){
	//繳費完成時.....
}
?>