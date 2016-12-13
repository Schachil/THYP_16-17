<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '136282823888-9jsn1kmuvq7n7a12ctk4fu8c3kd9i7oq.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'YQtjtq7H-lOfxCwmtExGk3p3'; //Google client secret
$redirectURL = 'http://localhost/login_with_google_using_php/'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to CodexWorld.com');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>