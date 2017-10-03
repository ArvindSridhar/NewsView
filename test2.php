<?php 
require("location.php");

$data1 = "

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
Mosul,
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

";

$regex = '/\nMosul,\n/';
if (!preg_match( '/\nMosul,\n/', $data1, $matches)) {
    echo("ha");
}
else {
    $result2 = preg_match( '/\nMosul,\n/', $data1, $matches);
    if ($result2 ==1) {
        echo('yay');
    }
}

$latlng = parseLatLngStrJsonForCoordinates(getLatLngJson("Mosul"));
$lat = $latlng['lat'];
$lng = $latlng['lng'];
echo $lat." ".$lng;
?>