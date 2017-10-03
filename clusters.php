<?php
$numInCluster = $_POST["numArticles"];
$titles = json_decode(base64_decode($_POST["titles"]));
echo('<h2 id="newsTitle">'.strval($numInCluster).'</h2>');


/*echo '<h2 id="newsTitle">'.$titles[0:10].'</h2>';*/
/*$num2 = intval($clusterNum)+2;
echo($num2);*/
/*$titleForCluster = $_SESSION['titleForCluster0'];
echo '<h2 id="newsTitle">'.$titleForCluster[1].'</h2>';*/
?>