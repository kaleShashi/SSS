<?php
	session_start();
	require_once "GoogleAPI/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("335508691279-ev8ca8r0o9qr055r82iu01urnemiulvm.apps.googleusercontent.com");
	$gClient->setClientSecret("Q4bY0KTX0lRaV_EHbSidfS5p");
	$gClient->setApplicationName("CPI Login");
	$gClient->setRedirectUri("http://localhost/GoogleLogin/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
?>
