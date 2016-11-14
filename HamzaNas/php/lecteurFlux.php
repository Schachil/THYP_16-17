<?php header("Access-Control-Allow-Origin: *"); ?>
<?php
$arrUrl = array(
	"THYP1516data"=>"https://docs.google.com/spreadsheets/d/1ED680az81kja4nkUi89PhZldzkdwVrJVF21AwHDf6j8/pub?gid=2078932914&single=true&output=csv"
	,"THYP1617data"=>"https://docs.google.com/spreadsheets/d/1FP1ZqWonLsnLJBX4XY3KUtOJe-v4bY4Se-ZrImGUwos/pub?gid=840118204&single=true&output=csv"
	,"THYP1617photo"=>"https://get.google.com/albumarchive/117590660096025980525/album/AF1QipPQRGpr650d3ax9uwVbNJHoUgsGzc3H4GNEsm0G"
	,"CFI1617data"=>"https://docs.google.com/spreadsheets/d/1tKXAG8mCk7Y-piLDi68DhZzuiQuo8eVyBPr_zMz1Zl8/pub?gid=293749862&single=true&output=csv"
	);
//$_GET['url'] = 	"THYP1617photo";
curl($arrUrl[$_GET['url']]);

function curl($url){
	// initialize session
	$handle = curl_init();
	curl_setopt($handle, CURLOPT_URL, $url);
    curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($handle);
    curl_close($handle);
    
    echo $response;
}
