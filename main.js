var map;

function getParameterByName(name) {
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

function tryParseLocFromURL(oLoc)
{
    var lat = getParameterByName('lat');
    var lng = getParameterByName('lng');
    var newLoc = oLoc;
    if ((lat!='')&&(lng!=''))
    {
        return new google.maps.LatLng(parseFloat(lat), parseFloat(lng));
    }
    else
    {
        return oLoc;
    }
}

function initializeMap(lng, lat, zm) {
    mapboxgl.accessToken = 'pk.eyJ1IjoiYXJ2aW5kc3JpZGhhciIsImEiOiJjaXVlcWZtdHEwMGQ2Mm9ud3VyNGE3ZXl3In0.IyVj90UmYfDVgkAfw_4vDg';
    map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mapbox/streets-v9', //stylesheet location
        center: [lng,lat], // starting position
        zoom: zm//11 // starting zoom
    });
        
    navBar = new mapboxgl.NavigationControl({position: 'bottom-right'});
    map.addControl(navBar);

    //Set map's starting location based on current location of user
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            initialLocation = [position.coords.longitude, position.coords.latitude];
            map.setCenter(initialLocation);
        });
    }
    
    mapMain(map);
}

function setMapCenterX(lng, lat, zm) {
    locationX = [lng, lat];
    if (lng==null) {
        alert("Invalid location, please try again");
    }
    else {
        map.setCenter(locationX);
    }
}

function mapMain(map)
{
    //Main code
    addMarkers(map);
    //showInfoWindows();
}

initializeMap(-122.4167, 37.7833, 11); //2