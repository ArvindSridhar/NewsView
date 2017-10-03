<?php

$html = file_get_contents("http://www.bbc.co.uk/news/uk-38846102");
$html = str_replace('stylesheet" href="//', 'stylesheet" href="https://', $html);
$html = str_replace('"//', '"https://', $html);
echo $html;

?>