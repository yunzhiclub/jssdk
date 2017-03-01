<?php
require_once "jssdk.php";
$url = urldecode($_GET['url']);
$jssdk = new JSSDK("wx91d4563fddff9b28", "f6d816bbfd813c51956c1f9f6e078b00", $url);
$signPackage = $jssdk->GetSignPackage();
// unset($signPackage['url']);
unset($signPackage['rawString']);
header('Content-type: application/json');
echo json_encode($signPackage);
?>
