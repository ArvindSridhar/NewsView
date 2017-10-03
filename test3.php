<?php
include_once("nyt.php");
include_once("natgeo.php");
include_once("ap.php");
include_once("bbc.php");
include_once("location.php");
header("content-type: application/x-javascript; charset=utf-8");
//Generate markers based on news tag
$newsObjectsNYT = getNewsObjects();
$resultsNYT = $newsObjectsNYT;
$newsObjectsNG = getNewsObjectsNG();
$resultsNatGeo = $newsObjectsNG;
$newsObjectsAP = getNewsObjectsAP();
$resultsAP = $newsObjectsAP;
$newsObjectsBBC = getNewsObjectsBBC();
$resultsBBC = $newsObjectsBBC;
$customMarkers = '';
$latArr = [];
$lngArr = [];
$titleArr = [];
$authorArr = [];
$abstractArr = [];
$urlArr = [];
$sourceArr = [];

$data1 = "

Trump
Alabama
Birmingham
Huntsville
Mobile
Montgomery
Alaska
Anchorage
Arizona
Chandler
Gilbert town
Glendale
Mesa
Peoria
Phoenix
Scottsdale
Tempe
Tucson
Arkansas
Little Rock
California
Anaheim
Antioch
Bakersfield
Berkeley
Burbank
Chula Vista
Concord
Corona
Costa Mesa
Daly City
Downey
El Monte
Elk Grove
Escondido
Fairfield
Fontana
Fremont
Fresno
Fullerton
Garden Grove
Glendale
Hayward
Huntington Beach
Inglewood
Irvine
Lancaster
Long Beach
Los Angeles
Modesto
Moreno Valley
Norwalk
Oakland
Oceanside
Ontario
Orange
Oxnard
Palmdale
Pasadena
Pomona
Rancho Cucamonga
Richmond
Riverside
Roseville
Sacramento
Salinas
San Bernardino
Ventura
San Diego
San Francisco
San Jose
Santa Ana
Santa Clara
Santa Clarita
Santa Rosa
Simi Valley
Stockton
Sunnyvale
Thousand Oaks
Torrance
Vallejo
Visalia
West Covina
Colorado
Arvada
Aurora
Colorado Springs
Denver
Fort Collins
Lakewood
Pueblo
Thornton
Westminster
Connecticut
Bridgeport
Hartford
New Haven
Stamford
Waterbury
District of Columbia
Washington1
Florida
Cape Coral
Clearwater
Coral Springs
Fort Lauderdale
Gainesville
Hialeah
Hollywood
Jacksonville
Miami
Miramar
Orlando
Pembroke Pines
Pompano Beach
Port St. Lucie
St. Petersburg
Tallahassee
Tampa
Georgia
Athens-Clarke
Atlanta
Augusta-Richmond
Columbus
Savannah
Hawaii
Honolulu
Idaho
Boise City
Illinois
Aurora
Chicago
Joliet
Naperville
Peoria
Rockford
Springfield
Indiana
Evansville
Fort Wayne
Indianapolis
South Bend
Iowa
Cedar Rapids
Des Moines
Kansas
Kansas City
Olathe
Overland Park
Topeka
Wichita
Kentucky
Lexington-Fayette
Louisville-Jefferson
Louisiana
Baton Rouge
Lafayette
New Orleans
Shreveport
Maryland
Baltimore
Massachusetts
Boston
Cambridge
Lowell
Springfield
Worcester
Michigan
Ann Arbor
Detroit
Flint
Grand Rapids
Lansing
Sterling Heights
Warren
Minnesota
Minneapolis
St. Paul
Mississippi
Jackson
Missouri
Independence
Kansas City
Springfield
St. Louis
Nebraska
Lincoln
Omaha
Nevada
Henderson
Las Vegas
North Las Vegas
Reno
New Hampshire
Manchester
New Jersey
Elizabeth
Jersey City
Newark
Paterson
New Mexico
Albuquerque
New York
Buffalo
New York
Rochester
Syracuse
Yonkers
North Carolina
Cary
Charlotte
Durham
Fayetteville
Greensboro
Raleigh
Winston-Salem
Ohio
Akron
Cincinnati
Cleveland
Columbus
Dayton
Toledo
Oklahoma
Norman
Oklahoma City
Tulsa
Oregon
Eugene
Portland
Salem
Pennsylvania
Allentown
Erie
Philadelphia
Pittsburgh
Rhode Island
Providence
South Carolina
Charleston
Columbia
South Dakota
Sioux Falls
Tennessee
Chattanooga
Clarksville
Knoxville
Memphis
Nashville-Davidson
Texas
Abilene
Amarillo
Arlington
Austin
Beaumont
Brownsville
Carrollton
Corpus Christi
Dallas
Denton
El Paso
Fort Worth
Garland
Grand Prairie
Houston
Irving
Killeen
Laredo
Lubbock
McAllen
Mesquite
Pasadena
Plano
San Antonio
Waco
Utah
Salt Lake City
West Valley City
Virginia
Alexandria
Arlington CDP
Chesapeake
Hampton
Newport News
Norfolk
Portsmouth
Richmond
Virginia Beach
Washington
Bellevue
Seattle
Spokane
Tacoma
Vancouver
Wisconsin
Green Bay
Madison
Milwaukee
United States
United States of America
US
USA
U.S.A
Mosul
Aleppo
Damascus
Baghdad
Afghanistan
Albania
Algeria
Andorra
Angola
Antigua and Barbuda
Argentina
Armenia
Aruba
Australia
Austria
Azerbaijan
Bahamas
Bahrain
Bangladesh
Barbados
Belarus
Belgium
Belize
Benin
Bermuda
Bhutan
Bolivia
Bosnia and Herzegovina
Botswana
Brazil
Britain
Brunei
Bulgaria
Burkina Faso
Burundi
Cote d'Ivoire
Cambodia
Cameroon
Canada
Cape Verde
Central African Republic
Chad
Chile
China
Colombia
Comoros
Cook Islands
Costa Rica
Croatia
Cuba
Cyprus
Czech Republic
Democratic Republic of the Congo
Denmark
Djibouti
Dominica
Dominican Republic
Ecuador
Egypt
El Salvador
Equatorial Guinea
Eritrea
Estonia
Ethiopia
Falkland Islands
Faroe Islands
Fiji
Finland
France
Gabon
Georgia
Germany
Ghana
Greece
Greenland
Grenada
Guam
Guatemala
Guernsey
Guinea Bissau
Guinea
Guyana
Haiti
Honduras
Hong Kong
Hungary
Iceland
India
Indonesia
Iran
Iraq
Ireland
Isle of Man
Israel
Italy
Jamaica
Japan
Jersey
Jordan
Kazakhstan
Kenya
Kiribati
Kuwait
Kyrgyzstan
Laos
Latvia
Lebanon
Lesotho
Liberia
Libya
Liechtenstein
Lithuania
Luxembourg
Macau
Macedonia
Madagascar
Malawi
Malaysia
Maldives
Mali
Malta
Marshall Islands
Mauritania
Mauritius
Mexico
Micronesia
Moldova
Monaco
Mongolia
Montenegro
Morocco
Mozambique
Myanmar
Namibia
Nauru
Nepal
Netherlands
New Zealand
Nicaragua
Niger
Nigeria
Niue
Norfolk Islands
North Korea
Northern Mariana Islands
Norway
Oman
Pakistan
Palau
Palestine
Panama
Papua New Guinea
Paraguay
Peru
Philippines
Poland
Portugal
Puerto Rico
Qatar
Taiwan
Republic of the Congo Maps
Romania
Russia
Rwanda
Saint Kitts And Nevis
Saint Lucia
Saint Vincent and the Grenadines
Samoa
San Marino
Sao Tome and Principe
Saudi Arabia
Senegal
Serbia
Seychelles
Sierra Leone
Singapore
Slovakia
Slovenia
Solomon Islands
Somalia
South Africa
South Korea
South Sudan
Spain
Sri Lanka
Sudan
Suriname
Swaziland
Sweden
Switzerland
Syria
Kosovo
Tajikistan
Tanzania
Thailand
The Gambia
Tibet
Timor Liste
Togo
Tonga
Trinidad and Tobago
Tunisia
Turkey
Turkmenistan
Uganda
Ukraine
United Arab Emirates
United Kingdom
United States
Uruguay
Uzbekistan
Vanuatu
Venezuela
Vietnam
Western Sahara
Yemen
Zambia
Zimbabwe
Surt
Benghazi
Tripoli
Asia
Africa
Europe
North America
South America
Australia
Antarctica
Abu Dhabi
Abuja
Accra
Addis
Algiers
Amman
Amsterdam
Andorra
Ankara
Antananarivo
Apia
Ashgabat
Asmara
Astana
Asuncion
Athens
Baghdad
Baku
Bamako
Bandar
Bangkok
Bangui
Banjul
Basseterre
Beijing
Beirut
Belfast
Belgrade
Belmopan
Berlin
Bern
Bishkek
Bissau
Bogota
Brasilia
Bratislava
Brazzaville
Bridgetown
Brussels
Bucharest
Budapest
Buenos Aires
Bujumbura
Cairo
Canberra
Caracas
Cardiff
Castries
Cayenne
Chisinau
Colombo
Conakry
Copenhagen
Dakar
Damascus
Dar es Salaam
Dhaka
Dili
Djibouti
Doha
Dublin
Dushanbe
Edinburgh
Freetown
Gaborone
Georgetown
Guatemala City
Hanoi
Harare
Havana
Helsinki
Honiara
Islamabad
Jakarta
Juba
Kabul
Kampala
Kathmandu
Khartoum
Kiev
Kigali
Kingston
Kingstown
Kinshasa
Kuala Lumpur
Kuwait City
La Paz
Libreville
Lilongwe
Lima
Lisbon
Ljubljana
Lome
London
London
Luanda
Lusaka
Luxembourg
Madrid
Majuro
Malabo
Male
Managua
Manama
Manila
Maputo
Maseru
Mbabana
Melekeok
Mexico City
Minsk
Mogadishu
Monaco
Monrovia
Montevideo
Moroni
Moscow
Muscat
N'Djamena
Nairobi
Nassau
New Delhi
Niamey
Nicosia
Nouakchott
Nuku'alofa
Oslo
Ottawa
Ouagadougou
Palikir
Panama City
Paramaribo
Paris
Phnom Penh
Podgorica
Port au Prince
Port Louis
Port Moresby
Port of Spain
Port Vila
Porto Novo
Prague
Praia
Pretoria
Pristina
Pyongyang
Quito
Rabat
Rangoon
Reykjavik
Riga
Riyadh
Rome
Roseau
Saint George's
Saint John's
San Jose
San Marino
San Salvador
Sanaa
Santiago
Santo Domingo
Sao Tome
Sarajevo
Seoul
Singapore
Skopje
Sofia
Stockholm
Suva
Taipei
Tallinn
Tarawa
Tashkent
Tbilisi
Tegucigalpa
Tehran
Tel Aviv
Thimphu
Tirana
Tokyo
Tripoli
Tunis
Ulaanbaatar
Vaduz
Vaiaku
Valletta
Vatican
Victoria
Vienna
Vientiane
Vilnius
Warsaw
Washington
Wellington
Windhoek
Yamoussoukro
Yaounde
Yerevan
Zagreb

";

function multiexplode ($delimiters,$string) {
    $ready = str_replace($delimiters, $delimiters[0], $string);
    $launch = explode($delimiters[0], $ready);
    return  $launch;
}

//New York Times

$resultsnumNYT = sizeof($resultsNYT);
for ($i=0;$i<$resultsnumNYT;$i++) {
    $caption = $resultsNYT[$i]['caption'];
    $abstract = $resultsNYT[$i]['abstract'];
    $url = $resultsNYT[$i]['url'];
    $url = "https://www.google.com/search?q=%".$url."&btnI=Im+Feeling+Lucky";
    $url = "https://www.geofortomorrow.org/newsview/test3.html";
    //$date = $resultsNYT[$i]['published_date'];
    $date = date('Y-d-m', $resultsNYT[$i]['published_date']);
    $geoFacet = $resultsNYT[$i]['geo_facet'];
    $author = strtolower($resultsNYT[$i]['byline']);
    $locationStr = "";
    $determinateLocation = false;
    $lat = -1;
    $lng = -1;
    $title = $resultsNYT[$i]['title'];
    $abstract = str_replace("'", "`", $abstract);
    $title = str_replace("'", "`", $title);
    $abstract = str_replace('"', "`", $abstract);
    $title = str_replace('"', "`", $title);
    $arr = multiexplode(array(","," ",":","’"),$title);
    //$firstWord = $arr[0];
    //$firstWord = $firstWord."00";
    $firstWord = "nyt".$i;
    $isEnglish = true;
    if(!preg_match('/[^\W_ ] /',$title)) {
        $isEnglish = false;
    }
    //if ($firstWord !== "Why00") {
    if ($geoFacet != "") {
        $determinateLocation = true;
        $locationStr = $geoFacet[0];
        $latlng = getLatLngFromString($locationStr);
        $lat = $latlng['lat'];
        $lng = $latlng['lng'];
    }
    else {   
        $count = 0;
        foreach ($arr as $locationStr) {
            $regex = "/\n$locationStr\n/";
            $result2 = preg_match($regex, $data1, $matches);
            if ($result2==1 && $locationStr!="") {
                $determinateLocation = true;
                $latlng = getLatLngFromString($locationStr);
                $lat = $latlng['lat'];
                $lng = $latlng['lng'];
                //echo $lat."  ".$lng."  ".PHP_EOL;
                $count = $count+1;
                break;
            }
        }
        if ($count==0) {
            $arr2 = multiexplode(array(","," ",":","’"),$abstract);
            foreach ($arr2 as $locationStr2) {
                $regex2 = "/\n$locationStr2\n/";
                $result3 = preg_match($regex2, $data1, $matches2);
                if ($result3==1 && $locationStr2!="") {
                    $determinateLocation = true;
                    $latlng = getLatLngFromString($locationStr2);
                    $lat = $latlng['lat'];
                    $lng = $latlng['lng'];
                    break;
                }
            }
        }
    }//}
    if (empty($lat)) {
        $determinateLocation = false;
    }
    if ($determinateLocation) {
        $latArr[$firstWord] = strval($lat);
        $lngArr[$firstWord] = strval($lng);
        $titleArr[$firstWord] = ($title);
        $authorArr[$firstWord] = ($author);
        $abstractArr[$firstWord] = ($abstract);
        $urlArr[$firstWord] = ($url);
        $sourceArr[$firstWord] = ($source);
    }
    $source = "The New York Times";
    //strInputString = strInputString.replace(/'/g, "\\'");
    $currentResultMarker = <<<EOT

    var content = '<div id="$firstWord" onclick="processN(\'$title\', \'$author\', \'$abstract\', \'$url\', \'$source\')" style="color: #009dcd;cursor:pointer;">$title</div>';
    var popup = new mapboxgl.Popup({offset:[-5, -30], closeButton:false})
        .setHTML(content);
    var el = document.createElement('div');
    el.id = "marker";
    el.className = "marker";
    new mapboxgl.Marker(el, {offset:[-25, -25]})
        .setLngLat([$lng, $lat])
        .setPopup(popup) 
        .addTo(map);
        
EOT;
    
    if ($determinateLocation && $isEnglish) {
        $customMarkers .= $currentResultMarker;
    }
}
/*
//National Geographic

$resultsnumNG = sizeof($resultsNatGeo);
for ($i=0;$i<$resultsnumNG;$i++) {
    $title = $resultsNatGeo[$i]['title'];
    $author = strtolower($resultsNatGeo[$i]['author']);
    $author = 'by '.$author;
    $abstract = $resultsNatGeo[$i]['description'];
    $abstract = str_replace("'", "`", $abstract);
    $title = str_replace("'", "`", $title);
    $author = str_replace("'", "`", $author);
    $abstract = str_replace('"', "`", $abstract);
    $title = str_replace('"', "`", $title);
    $title = str_replace('&mdash;', '-', $title);
    $abstract = str_replace('&mdash;', '-', $abstract);
    $url = $resultsNatGeo[$i]['url'];
    $url = "https://www.google.com/search?q=%".$url."&btnI=Im+Feeling+Lucky";
    $locationStr = "";
    $determinateLocation = false;
    $lat = -1;
    $lng = -1;
    $arr = multiexplode(array(","," ",":","’"),$abstract);
    //$firstWord = $arr[0];
    //$firstWord = $firstWord."hello01";
    $firstWord = "natgeo".$i;
    $isEnglish = true;
    if(!preg_match('/[^\W_ ] /',$title)) {
        $isEnglish = false;
    }
    foreach ($arr as $locationStr) {
        $regex = "/\n$locationStr\n/";
        $result2 = preg_match($regex, $data1, $matches);
        if ($result2==1 && $locationStr!="") {
            $determinateLocation = true;
            $latlng = getLatLngFromString($locationStr);
            $lat = $latlng['lat'];
            $lng = $latlng['lng'];
            break;
        }
    }
    if (empty($lat)) {
        $determinateLocation = false;
    }
    if ($determinateLocation) {
        $latArr[$firstWord] = strval($lat);
        $lngArr[$firstWord] = strval($lng);
        $titleArr[$firstWord] = ($title);
        $authorArr[$firstWord] = ($author);
        $abstractArr[$firstWord] = ($abstract);
        $urlArr[$firstWord] = ($url);
        $sourceArr[$firstWord] = ($source);
    }
    $source = "National Geographic";
    $currentResultMarker = <<<EOT

    var content = '<div id="$firstWord" onclick="processN(\'$title\', \'$author\', \'$abstract\', \'$url\', \'$source\')" style="color: #009dcd;cursor:pointer;">$title</div>';
    var popup = new mapboxgl.Popup({offset:[-5, -30], closeButton:false})
        .setHTML(content);
    var el = document.createElement('div');
    el.id = "marker";
    el.className = "marker";
    new mapboxgl.Marker(el, {offset:[-25, -25]})
        .setLngLat([$lng, $lat])
        .setPopup(popup) 
        .addTo(map);
        
EOT;
    
    if ($determinateLocation && $isEnglish) {
        $customMarkers .= $currentResultMarker;
    }
}
*/
//Associated Press 

$resultsnumAP = sizeof($resultsAP);
for ($i=0;$i<$resultsnumAP;$i++) {
    $title = $resultsAP[$i]['title'];
    if ($resultsAP[$i]['author'] != null) {
        $author = strtolower($resultsAP[$i]['author']);
    }
    else {
        $author = "aP staff";
    }
    $arrAuthor = explode(' ', $author);
    if ($arrAuthor[0] != 'by') {
        $author = 'by '.$author;
    }
    $abstract = $resultsAP[$i]['description'];
    $abstract = str_replace('&mdash;', '-', $abstract);
    $abstract = str_replace('&hellip;', '...', $abstract); 
    $abstract = str_replace("'", "`", $abstract);
    $title = str_replace("'", "`", $title);
    $abstract = str_replace('"', "`", $abstract);
    $title = str_replace('"', "`", $title);
    //$abstract = str_replace('/"(?=\w|$)/g', "“", $abstract);
    //$abstract = str_replace('/(?<=\w|^)"/g', "”", $abstract);
    //$title = str_replace('"', '“', $title);
    $url = $resultsAP[$i]['url'];
    $url = "https".substr($url, 4);
    //$url = "https://www.google.com/search?q=%".$url."&btnI=Im+Feeling+Lucky";
    //$url = "https://bigstory.ap.org/article/1441a4ed01494fc28dad592eff36beed/storms-preview-sea-rise-damage-california-roads-cities";
    $locationStr = "";
    $determinateLocation = false;
    $lat = -1;
    $lng = -1;
    $arr = multiexplode(array(","," ",":","’"),$abstract);
    $firstWord = "ap".$i;
    $isEnglish = true;
    if(!preg_match('/[^\W_ ] /',$title)) {
        $isEnglish = false;
    }
    $arrLoc = explode("(", $abstract);
    $locationStr = $arrLoc[0];
    $determinateLocation = true;
    $latlng = getLatLngFromString($locationStr);
    $lat = $latlng['lat'];
    $lng = $latlng['lng'];
    if (abs($lat) <= 10 && abs($lng) <= 10) {
        $determinateLocation = false;
    }
    if (empty($lat)) {
        $determinateLocation = false;
    }
    if ($determinateLocation) {
        $latArr[$firstWord] = strval($lat);
        $lngArr[$firstWord] = strval($lng);
        $titleArr[$firstWord] = ($title);
        $authorArr[$firstWord] = ($author);
        $abstractArr[$firstWord] = ($abstract);
        $urlArr[$firstWord] = ($url);
        $sourceArr[$firstWord] = ($source);
    }
    $source = "Associated Press";
    $currentResultMarker = <<<EOT

    var content = '<div id="$firstWord" onclick="processN(\'$title\', \'$author\', \'$abstract\', \'$url\', \'$source\')" style="color: #009dcd;cursor:pointer;">$title</div>';
    var popup = new mapboxgl.Popup({offset:[-5, -30], closeButton:false})
        .setHTML(content);
    var el = document.createElement('div');
    el.id = "marker";
    el.className = "marker";
    new mapboxgl.Marker(el, {offset:[-25, -25]})
        .setLngLat([$lng, $lat])
        .setPopup(popup) 
        .addTo(map);
        
EOT;
    
    if ($determinateLocation && $isEnglish) {
        $customMarkers .= $currentResultMarker;
    }
}

//BBC

$resultsnumBBC = sizeof($resultsBBC);
for ($i=0;$i<$resultsnumBBC;$i++) {
    $title = $resultsBBC[$i]['title'];
    $author = strtolower($resultsBBC[$i]['author']);
    if ($author == 'bbc news') {
        $author = "bBC news";
    }
    $arrAuthor = explode(' ', $author);
    if ($arrAuthor[0] != 'by') {
        $author = 'by '.$author;
    }
    $abstract = $resultsBBC[$i]['description'];
    $abstract = str_replace("'", "`", $abstract);
    $title = str_replace("'", "`", $title);
    $abstract = str_replace('"', "`", $abstract);
    $title = str_replace('"', "`", $title);
    $url = $resultsBBC[$i]['url'];
    $locationStr = "";
    $determinateLocation = false;
    $lat = -1;
    $lng = -1;
    $arr = multiexplode(array(","," ",":","’"),$abstract);
    //$firstWord = $arr[0];
    //$firstWord = $firstWord."hello01";
    $firstWord = "bbc".$i;
    $isEnglish = true;
    if(!preg_match('/[^\W_ ] /',$title)) {
        $isEnglish = false;
    }
    foreach ($arr as $locationStr) {
        $regex = "/\n$locationStr\n/";
        $result2 = preg_match($regex, $data1, $matches);
        if ($result2==1 && $locationStr!="") {
            $determinateLocation = true;
            $latlng = getLatLngFromString($locationStr);
            $lat = $latlng['lat'];
            $lng = $latlng['lng'];
            break;
        }
    }
    if (empty($lat)) {
        $determinateLocation = false;
    }
    if ($determinateLocation) {
        $latArr[$firstWord] = strval($lat);
        $lngArr[$firstWord] = strval($lng);
        $titleArr[$firstWord] = ($title);
        $authorArr[$firstWord] = ($author);
        $abstractArr[$firstWord] = ($abstract);
        $urlArr[$firstWord] = ($url);
        $sourceArr[$firstWord] = ($source);
    }
    $source = "BBC News";
    $currentResultMarker = <<<EOT

    var content = '<div id="$firstWord" onclick="processN(\'$title\', \'$author\', \'$abstract\', \'$url\', \'$source\')" style="color: #009dcd;cursor:pointer;">$title</div>';
    var popup = new mapboxgl.Popup({offset:[-5, -30], closeButton:false})
        .setHTML(content);
    var el = document.createElement('div');
    el.id = "marker";
    el.className = "marker";
    new mapboxgl.Marker(el, {offset:[-25, -25]})
        .setLngLat([$lng, $lat])
        .setPopup(popup) 
        .addTo(map);
        
EOT;
    
    if ($determinateLocation && $isEnglish) {
        $customMarkers .= $currentResultMarker;
    }
}

//Article Cluster Calculations
/*
$latCount = array_count_values($latArr);
//print_r($latCount);
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
$count2 = 0;
foreach ($latVals as $latVal) {
    $ids = array_keys($latArr, $latVal);
    $titleForCluster = [];
    $authorForCluster = [];
    $abstractForCluster = [];
    $urlForCluster = [];
    $sourceForCluster = [];
    $latForCluster = $latVal;
    $lngForCluster = [];
    $isActuallyDup = false;
    $count = 0;
    foreach ($ids as $id) {
        $titleForCluster[$count] = $titleArr[$id];
        $authorForCluster[$count] = $authorArr[$id];
        $abstractForCluster[$count] = $abstractArr[$id];
        $urlForCluster[$count] = $urlArr[$id];
        $sourceForCluster[$count] = $sourceArr[$id];
        $lngForCluster[$count] = $lngArr[$id];
        //echo $latVal.' '.$id.PHP_EOL;
        //add to the arrays above based on the id, then construct the var content thingy right below this foreach loop (within the outer foreach)
        $count = $count+1;
    }
    $lngAreSame = array_count_values($lngForCluster);
    if (count($lngAreSame) == 1) {
        //echo $latVal.' '.$lngForCluster[0].' are same'.PHP_EOL;
        $isActuallyDup = true;
        $lngVal = $lngForCluster[0];
    }
    if ($isActuallyDup) {
        $numInCluster = $count;
        $idForCluster = "cluster".$count2;
        $textToDisp = strval($numInCluster).' news items at this location';
        $textToDisp = strval($textToDisp);
        $latToDisp = floatval($latVal);
        $lngToDisp = floatval($lngVal);
        $currentResultMarker = <<<EOT

    var content = '<div id="$idForCluster" onclick="processN2(\'$titleForCluster\', \'$authorForCluster\', \'$abstractForCluster\', \'$urlForCluster\', \'$sourceForCluster\')" style="color: #009dcd;cursor:pointer;">$textToDisp</div>';
    var popup = new mapboxgl.Popup({offset:[-5, -30], closeButton:false})
        .setHTML(content);
    var el = document.createElement('div');
    el.id = "marker2";
    el.className = "marker2";
    new mapboxgl.Marker(el, {offset:[-25, -25]})
        .setLngLat([$lngToDisp, $latToDisp])
        .setPopup(popup) 
        .addTo(map);
        
EOT;
        
        //echo $count.PHP_EOL;
        $customMarkers .= $currentResultMarker;
    }
    $count2 = $count2+1;
}
*/
$markerWrapperFunction = <<<EOT


function addMarkers(map)
{
    $customMarkers
}


function processN(title, author, abstract, url, source) 
{
    screenW = $(window).width();
    if (screenW>980) {
        $("#newsBox").fadeIn(300);
        $("#newsTitle").text(title);
        $("#author").text(author); 
        $("#newsItemText").text(abstract);
        $("#readFullArt").attr("href", url);
        $("#source").text(source);
    }
    else {
        $("#newsBoxMobile").fadeIn(300);
        $("#newsTitleM").text(title);
        $("#authorM").text(author); 
        $("#newsItemTextM").text(abstract);
        $("#fullArtFrame").attr("src", url);
        $("#sourceM").text(source);
    }
}

function processN2(titleA, authorA, abstractA, urlA, sourceA)
{
    alert("Article clusters feature currently being implemented, please check back again later");
}


EOT;

echo file_get_contents("main.js"); //Echo map core
echo $markerWrapperFunction;

?>