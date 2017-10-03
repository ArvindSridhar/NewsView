<?php
include_once("config.php");
/************* DEMO ********************
header("Content-Type: text/plain");
error_reporting(-1);
$latlng = parseLatLngStrJsonForCoordinates(getLatLngJson("San Jose"));
$lat = $latlng['lat'];
$lng = $latlng['lng'];
echo $lat;
echo $lng;
*/
function getLatLngJson($geoKeyword)
{
    $geoKeyword = urlencode($geoKeyword);
    $hour = date("H");
    if ($hour<=6) {
        $thisAPI = $GOOGLEkey1;
    }
    elseif ($hour<=12) {
        $thisAPI = $GOOGLEkey2;
    }
    elseif ($hour<=18) {
        $thisAPI = $GOOGLEkey3;
    }
    else {
        $thisAPI = $GOOGLEkey4;
    }
    $uP = "address=".$geoKeyword."&key=$thisAPI";
    $wbr = file_get_contents("https://maps.googleapis.com/maps/api/geocode/json?".$uP);
    //echo($wbr);
    return $wbr;
}
function parseLatLngStrJsonForCoordinates($json)
{
    $jsonobject = json_decode($json, TRUE);
    $results = $jsonobject['results'];
    $locObj = $results[0]['geometry']['location'];
    $lat = $locObj['lat'];
    $lng = $locObj['lng'];
    //$llngstr = ((string)$lat).",".((string)$lng);
    //return $llngstr;
    return array('lat'=>$lat, 'lng'=>$lng);
}
function getLatLngFromString($locstr) //RETURNS AN ARRAY, where ARRAY['lat'] contains the latitude, and ARRAY['lng'] contains the longitude
{
    return parseLatLngStrJsonForCoordinates(getLatLngJson($locstr));
}

/*$latlng = getLatLngFromString("Mosul");
$lat = $latlng['lat'];
$lng = $latlng['lng'];
echo $lat." ".$lng;*/

?>