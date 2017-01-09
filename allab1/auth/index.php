<?php
require_once __DIR__.'/google-api-php-client-2.1.0/vendor/autoload.php';

session_start();

$client = new Google_Client();
$client->setAuthConfig('sv.json');
$client->addScope(Google_Service_Drive::DRIVE_METADATA_READONLY);
$client->addScope(Google_Service_YouTube::YOUTUBE_FORCE_SSL);

if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
  $client->setAccessToken($_SESSION['access_token']);
  $drive_service = new Google_Service_Drive($client);
  $files_list = $drive_service->files->listFiles(array())->getFiles();
  echo json_encode($files_list);
  $youtube = new Google_Service_YouTube($client);
  $comments = $youtube->commentThreads->listCommentThreads('snippet', [ 1]);

  
} else {
  $redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . '/auth/oauth2callback.php';
  header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
}
?>

