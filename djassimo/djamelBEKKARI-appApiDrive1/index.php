<?php
require_once __DIR__.'/vendor/autoload.php';

session_start();

$client = new Google_Client();
$client->setAuthConfig('client_secret.json');
$client->addScope(Google_Service_Drive::DRIVE_METADATA_READONLY);

if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
  $client->setAccessToken($_SESSION['access_token']);
  $drive_service = new Google_Service_Drive($client);
  $files_list = $drive_service->files->listFiles(array())->getFiles();
    
  //echo json_encode($files_list);
    if (count($files_list) == 0) {
    print "No files found.\n";
} else {
    foreach ($files_list as $file) {
        $res['name'] = $file->getName();
        $res['id'] = $file->getId();
        $res['size'] = $file->getSize();
        $files[] = $res;
        //echo $files;
    }
    print_r($files);
}
    
    
} else {
  $redirect_uri = 'http://localhost/THYP_16-17/djassimo/djamelBEKKARI-appApiDrive1/oauth2callback.php';
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}