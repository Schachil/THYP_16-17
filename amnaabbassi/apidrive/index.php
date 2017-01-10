<?php
require_once __DIR__.'/vendor/autoload.php';

session_start();

$client = new Google_Client();
$client->setAuthConfig('client_secrets.json');

$client->addScope(Google_Service_Drive::DRIVE_METADATA_READONLY);

if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
  $client->setAccessToken($_SESSION['access_token']);
  $drive_service = new Google_Service_Drive($client);
  $files_list = $drive_service->files->listFiles(array())->getFiles();
  if (count($files_list) == 0) {
    print "No files found.\n";
	} else {
	    foreach ($files_list as $file) {
	        $res['name'] = $file->getName();
	        $res['id'] = $file->getId();
	        $files[] = $res;
	    }
	    print_r($files);
	}
 
} else {
  $redirect_uri = 'http://localhost/THYP_16-17/amnaabbassi/apidrive/callback.php';
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}