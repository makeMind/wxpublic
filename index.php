<?php
$signature = $_GET["signature"];
$timestamp = $_GET["timestamp"];
$nonce = $_GET["nonce"];
$echostr = $_GET["echostr"];
$flag = $signature && $timestamp && $nonce && $echostr;
if(!$flag){
  exit();
}
$token = 'rorypublic';
$tmpArr = array($token, $timestamp, $nonce);
sort($tmpArr, SORT_STRING);
$tmpStr = implode( $tmpArr );
$tmpStr = sha1( $tmpStr );
if( $tmpStr !== $signature ){
   exit();
}
echo $echostr;
?>
