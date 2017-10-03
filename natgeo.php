<?php
include_once('./httpful.phar');
include_once("location.php");
include_once("config.php")
header('Content-Type: text/html; charset=utf-8');
getNewsObjectsNG();

function getNewsObjectsNG()
{
    $uri = "https://newsapi.org/v1/articles?source=national-geographic&sortBy=top&apiKey=$natgeoapikey";
    $rawresponsejson = \Httpful\Request::get($uri)->send();
    $responsejson = $rawresponsejson.raw_body;
    return parseArticleObjectsFromJsonNG($responsejson);
}

function parseArticleObjectsFromJsonNG($jsonToParse)
{
    $jsonToParse = mb_convert_encoding($jsonToParse, "HTML-ENTITIES", "UTF-8");
    $jsonToParse = str_ireplace("raw_body","",$jsonToParse);
    $jsonToParse = str_ireplace("â€˜","&rsquo;",$jsonToParse);
    $jsonobject = json_decode($jsonToParse, TRUE);
    $results = $jsonobject['articles'];
    return $results;
}

?>