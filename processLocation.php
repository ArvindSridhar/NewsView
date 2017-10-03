<?php
include_once("location.php");


/*function getLoc($locationStr)
{*/
    
    $locationStr = $_POST['ajaxid'];
    $latlng = parseLatLngStrJsonForCoordinates(getLatLngJson($locationStr));
    $lat = $latlng['lat'];
    $lng = $latlng['lng'];
    print json_encode(array($lng, $lat));
/*}*/

?>