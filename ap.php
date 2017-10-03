<?php
include_once('./httpful.phar');
include_once("location.php");
include_once("config.php");
header('Content-Type: text/html; charset=utf-8');
getNewsObjectsAP();

function getNewsObjectsAP()
{
    $uri = "https://newsapi.org/v1/articles?source=associated-press&sortBy=latest&apiKey=$apKey";
    $rawresponsejson = \Httpful\Request::get($uri)->send();
    $responsejson = $rawresponsejson.raw_body;
    return parseArticleObjectsFromJsonAP($responsejson);
}

function parseArticleObjectsFromJsonAP($jsonToParse)
{
    $jsonToParse = mb_convert_encoding($jsonToParse, "HTML-ENTITIES", "UTF-8");
    $jsonToParse = str_ireplace("raw_body","",$jsonToParse);
    $jsonToParse = str_ireplace("â€˜","&rsquo;",$jsonToParse);
    $jsonobject = json_decode($jsonToParse, TRUE);
    $results = $jsonobject['articles'];
    return $results;
}

?>