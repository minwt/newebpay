<?php
$merchantID = ""; 																					//商店代號
$hashKey    = ""; 																					//HashKey
$hashIV     = ""; 																					//HashIV
$url        = "https://ccore.newebpay.com/MPG/mpg_gateway"; //測試環境URL
$ver        = "1.5";

$ReturnURL       = "https://newebpay.minwt.com/newebpay/thanks.html"; 			//支付完成 返回商店網址
$NotifyURL_atm   = "https://newebpay.minwt.com/newebpay/atm_notify.php"; 		//支付通知網址
$NotifyURL_ccard = "https://newebpay.minwt.com/newebpay/ccard_notify.php"; 	//支付通知網址
$ClientBackURL   = "https://newebpay.minwt.com/newebpay/"; 									//支付取消 返回商店網址

$NTD = 100;											//商品價格
$Order_Title = "梅壞掉紅茶包";		//商品名稱
$ATM_ExpireDate = 3;						//ATM付款到期日
?>