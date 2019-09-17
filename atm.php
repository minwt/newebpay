<?php
require_once('conf.php');
require_once('mwt-newebpay_sdk.php');

/* 金鑰與版本設定 */
$MerchantID = $merchantID;
$HashKey = $hashKey;
$HashIV = $hashIV;
$URL = $url;
$VER = $ver;

/* 送給藍新資料 */
$trade_info_arr = array(
	'MerchantID' => $merchantID,
	'RespondType' => 'JSON',
	'TimeStamp' => 1485232229,
	'Version' => $VER,
	'MerchantOrderNo' => getOrderNo(),
	'Amt' => $NTD,
	'ItemDesc' => $Order_Title,
	'CREDIT' => 0,
	'VACC' => 1,//ATM
	'ReturnURL' => $ReturnURL, //支付完成 返回商店網址
	'NotifyURL' => $NotifyURL_atm, //支付通知網址
	'CustomerURL' =>$CustomerURL, //商店取號網址
	'ClientBackURL' => $ClientBackURL , //支付取消 返回商店網址
	'ExpireDate' => date("Y-m-d" , mktime(0,0,0,date("m"),date("d")+$ATM_ExpireDate,date("Y")))
);

if (isset($_GET['pay']) == 1 && $_GET['pay'] == "y"){
	$TradeInfo = create_mpg_aes_encrypt($trade_info_arr, $HashKey, $HashIV);
	$SHA256 = strtoupper(hash("sha256", SHA256($HashKey,$TradeInfo,$HashIV)));
	echo CheckOut($URL,$MerchantID,$TradeInfo,$SHA256,$VER);
}
?>