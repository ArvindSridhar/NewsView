<?php
header("content-type: application/x-javascript; charset=utf-8");
$latArr = [];
$lngArr = [];

$id1 = "nyt.1";
$lat1 = "-50.948489294959595959595959230481029342104981230948120397";
echo (gettype($lat1)).PHP_EOL;
$lng1 = "20";
$id2 = "natgeo.2";
$lat2 = "-78";
$lng2 = "52";
$id3 = "ap.4";
$lat3 = "-50";
$lng3 = "20";
$id4 = "bbc.6";
$lat4 = "-86";
$lng4 = "74";
$id5 = "bbc.8";
$lat5 = "-86";
$lng5 = "74";

$latArr[$id1] = $lat1;
$lngArr[$id1] = $lng1;
$latArr[$id2] = $lat2;
$lngArr[$id2] = $lng2;
$latArr[$id3] = $lat3;
$lngArr[$id3] = $lng3;
$latArr[$id4] = $lat4;
$lngArr[$id4] = $lng4;
$latArr[$id5] = $lat5;
$lngArr[$id5] = $lng5;

print_r($latArr);
$latCount = array_count_values($latArr);
print_r($latCount);
$latKeys = array_keys($latCount);
$latCount = array_values($latCount);
$latVals = [];
$count = 0;
$count2 = 0;
foreach ($latCount as $numAppears) {
    if ($numAppears > 1) {
        $latVals[$count2] = $latKeys[$count];
        $count2 = $count2+1;
    }
    $count = $count+1;
}
foreach ($latVals as $latVal) {
    $ids = array_keys($latArr, $latVal);
    foreach ($ids as $id) {
        
    }
}

?>