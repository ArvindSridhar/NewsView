<!DOCTYPE html>
<html>
<head>
    <LINK REL="SHORTCUT ICON" HREF="NewsView_Icon.png">
    <title>NewsView</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.26.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.26.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/app.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script type="text/javascript" src="ndtestCLUSTERS.php"></script>
    <style>
        html, body {
              overflow: hidden;
            }
        .displayNOW {
              display: inline-block !important;
        }
    </style>
</head>
    
<body class="homepage">
	   <div class="container1">
            <div class="headerNews">
                    <h1>NewsView</h1>
                    <input class="short lessMoreSpaceLeft spaceAbove" type="text" id="location" placeholder="Location">
                    <input class="short spaceLeft spaceAbove" type="text" id="newsItem" placeholder="News topic">
                    <a href="#" class="button buttonRed moreSpaceLeft spaceAbove" id="tut">Tutorial</a>
                    <a href="#" class="button buttonGreen lessSpaceLeft spaceAbove" id="info">Information/About</a>            
            </div>
            <div class="headerNews2" id="popUpWind">
                    <h1>NewsView</h1>
                    <input class="short spaceAbove" type="text" id="locationM" placeholder="Location">
                    <input class="short lessSpaceAbove2" type="text" id="newsItemM" placeholder="News topic">
                    <div class="buttonsSameRow"><a href="#" class="button buttonRed spaceAbove" id="tut2">Tutorial</a>
                    <a href="#" class="button buttonGreen lessSpaceAbove" id="info2">Information/About</a></div>
                    <a href="#" class="displayLater button buttonRed spaceAbove" id="tut3">Tutorial</a>
                    <a href="#" class="displayLater button buttonGreen lessSpaceAbove" id="info3">Information/About</a>
            </div>
            <div class="menu" id="menu">menu</div>
		    <div class="map" id="map"></div>
            <div class="popUp" id="tutorial">                
                <h2>NewsView Tutorial</h2>
                <p class="firstP">NewsView is an educational platform developed by <a href="https://www.geofortomorrow.org" target="_blank">Geography for Tomorrow</a> (GFT Labs) to enable youth to envision and learn about current events as they happen. It begins by synthesizing the latest news from sources like <i>The New York Times</i>. Then, based on the location that each news item references, it is placed on the map, providing an interactive way to learn about what's going on in the world. Whether you are interested in the news of a specific region or news of a specific type, NewsView enables you to explore and build your awareness of current events.</p>
                <p><b>Markers: </b>Each marker on the map denotes a news item. Click on a marker of interest, and a small textbox appears with the title of the news. Click on the textbox, and you can learn more about the news item!</p>
                <p><b>Search: </b>Search for a specific region in the first search area marked "Location." Search for a specific news topic in the second search area marked "News topic." Note that you can only search for one at a time. Also note that News Topic search is currently being implemented</p>
                <p><b>Suggested Use: </b>This application was built to be used in the elementary, middle, and high school classroom, as well as for the individual who wants a quick visual digest of what's going on in the world. Students can open up the webpage on computers, tablets, or smartphones, and the teacher can guide the students through a 10-minute activity visiting different places on the map and learning about events that are happening in real-time.</p>
                <p><b>Note on Accessibility: </b>The news synthesized by this application comes from <i>The New York Times</i> and similar sources and thus adheres to the highest standards of appropriateness. However, we understand that some news items might be inappropriate for some audiences (ex. depicting overt violence), and we try our best to eliminate them from our news database.</p>
                <p><b>Games: </b>Coming soon!</p>
                <p><b>Updates: </b>News Topic search and Article Clusters (more than one article at a location) are features currently being implemented by the development team</p>
                <p><b>Contact us</b> for more information, suggested lesson plans, and feedback: <a href="mailto:contact@geofortomorrow.org">contact@geofortomorrow.org</a></p>
            </div>
            <div class="popUp" id="information">                
                <h2>About NewsView</h2>
                <h3>Version 2.0 &copy; 2017 Geography for Tomorrow Inc.</h3>
                <p class="firstP">NewsView was developed by <a href="https://www.geofortomorrow.org" target="_blank">Geography for Tomorrow</a> (GFT Labs) in collaboration with <a href="https://0xfireball.me/" target="_blank">0xFireball</a>. NewsView's creation was made possible by the resources provided by <a href="http://www.bcp.org" target="_blank">Bellarmine College Preparatory's</a> Computer Science Department.</p>
                <p><b>Project Leaders: </b> Arvind Sridhar (Founder/President of Geography for Tomorrow and GFT Labs), Nihal Talur (Vice President of GFT Labs), Dylan Doblar (Programmer at GFT Labs), and Brad Lindemann (Teacher at Bellarmine College Preparatory and Mentor at GFT Labs)</p>
                <p><b>Last Updated: </b>January 30, 2017</p>
                <p><b>History: </b>NewsView was started in Fall 2015 and continues to be actively developed. It is and always will be <b>100% open source</b></p>
                <p><b>Contact us</b> for troubleshooting, more information, suggested lesson plans, and feedback: <a href="mailto:contact@geofortomorrow.org">contact@geofortomorrow.org</a></p>
            </div>
            <div class="popUp2" id="tutorial2">                
                <h2>NewsView Tutorial</h2>
                <p class="firstP">NewsView is an educational platform developed by <a href="https://www.geofortomorrow.org" target="_blank">Geography for Tomorrow</a> (GFT Labs) to enable youth to envision and learn about current events as they happen. It begins by synthesizing the latest news from sources like <i>The New York Times</i>. Then, based on the location that each news item references, it is placed on the map, providing an interactive way to learn about what's going on in the world. Whether you are interested in the news of a specific region or news of a specific type, NewsView enables you to explore and build your awareness of current events.</p>
                <p><b>Markers: </b>Each marker on the map denotes a news item. Click on a marker of interest, and a small textbox appears with the title of the news. Click on the textbox, and you can learn more about the news item!</p>
                <p><b>Search: </b>Search for a specific region in the first search area marked "Location." Search for a specific news topic in the second search area marked "News topic." Note that you can only search for one at a time. Also note that News Topic search is currently being implemented</p>
                <p><b>Suggested Use: </b>This application was built to be used in the elementary, middle, and high school classroom, as well as for the individual who wants a quick visual digest of what's going on in the world. Students can open up the webpage on computers, tablets, or smartphones, and the teacher can guide the students through a 10-minute activity visiting different places on the map and learning about events that are happening in real-time.</p>
                <p><b>Note on Accessibility: </b>The news synthesized by this application comes from <i>The New York Times</i> and similar sources and thus adheres to the highest standards of appropriateness. However, we understand that some news items might be inappropriate for some audiences (ex. depicting overt violence), and we try our best to eliminate them from our news database.</p>
                <p><b>Games: </b>Coming soon!</p>
                <p><b>Updates: </b>News Topic search and Article Clusters (more than one article at a location) are features currently being implemented by the development team</p>
                <p><b>Contact us</b> for more information, suggested lesson plans, and feedback: <a href="mailto:contact@geofortomorrow.org">contact@geofortomorrow.org</a></p>
            </div>
            <div class="popUp2" id="information2">                
                <h2>About NewsView</h2>
                <h3>Version 2.0 &copy; 2017 Geography for Tomorrow Inc.</h3>
                <p class="firstP">NewsView was developed by <a href="https://www.geofortomorrow.org" target="_blank">Geography for Tomorrow</a> (GFT Labs) in collaboration with <a href="https://0xfireball.me/" target="_blank">0xFireball</a>. NewsView's creation was made possible by the resources provided by <a href="http://www.bcp.org" target="_blank">Bellarmine College Preparatory's</a> Computer Science Department.</p>
                <p><b>Project Leaders: </b> Arvind Sridhar (Founder/President of Geography for Tomorrow and GFT Labs), Nihal Talur (Vice President of GFT Labs), Dylan Doblar (Programmer at GFT Labs), and Brad Lindemann (Teacher at Bellarmine College Preparatory and Mentor at GFT Labs)</p>
                <p><b>Last Updated: </b>January 30, 2017</p>
                <p><b>History: </b>NewsView was started in Fall 2015 and continues to be actively developed. It is and always will be <b>100% open source</b></p>
                <p><b>Contact us</b> for troubleshooting, more information, suggested lesson plans, and feedback: <a href="mailto:contact@geofortomorrow.org">contact@geofortomorrow.org</a></p>
            </div>
            <div class="popUp3" id="newsBox">                
                <h2 id="newsTitle"></h2>
                <h3 id="newsCaption"><b id="author" style="text-transform: capitalize;"></b> (Source: <i><div id="source" style="display:inline-block;"></div></i>)</h3>
                <p class="firstP moreSpaceDown" id="newsItemText"></p>
                <div class="moveDown"><p><a href="" id="readFullArt" target="_blank">Read Full Article</a></p></div>
            </div>
            <div class="popUp4" id="newsBoxMobile">                
                <h2 id="newsTitleM"></h2>
                <h3 id="newsCaptionM"><b id="authorM" style="text-transform: capitalize;"></b> (Source: <i><div id="sourceM" style="display:inline-block;"></div></i>)</h3>
                <p class="firstP" id="newsItemTextM"></p>
                <div class="moveDown2"><p><a href="" id="readFullArtM" target="_blank">Read Full Article</a></p></div>
            </div>
            <div class="popUp3" id="clusterBox">    
                <?php include 'clusters.php';?>
                <!--<div class="tabRow">
                    <div id="clicked" class="tab2"><p>The New York Times</p></div>
                    <div class="tab2" style="border: 0px solid;"><p>BBC News</p></div>
                    <div class="tab2" style="border: 0px solid;" id="lastTab"><p>National Geographic</p></div>
                </div>
                <h2 id="newsTitle"></h2>
                <h3 id="newsCaption"><b id="author" style="text-transform: capitalize;"></b> (Source: <i><div id="source" style="display:inline-block;"></div></i>)</h3>
                <p class="firstP moreSpaceDown" id="newsItemText"></p>
                <div class="moveDown"><p><a href="" id="readFullArt" target="_blank">Read Full Article</a></p></div>-->
            </div>
            <script type="text/javascript">
            var count = 0;
            var count2 = 0;
            $(document).mouseup(function (e)
            {
                var container = $("#popUpWind");

                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0) // ... nor a descendant of the container
                {
                    container.fadeOut(300);
                }
            });
            $("#menu").click(function(){
                $("#popUpWind").fadeIn(300);
            });
            $("#tut").click(function(){
                $("#tutorial").show();
                $("#tutorial").animate({bottom:'0%'},800);
                count = count+1;
            });
            $("#tut2").click(function(){
                $("#tutorial2").fadeIn(300);
            });
            $("#tut3").click(function(){
                $("#tutorial2").fadeIn(300);
            });
            $("#info").click(function(){
                $("#information").show();
                $("#information").animate({bottom:'0%'},800);
                count2 = count2+1;
            });
            $("#info2").click(function(){
                $("#information2").fadeIn(300);
            });
            $("#info3").click(function(){
                $("#information2").fadeIn(300);
            });
            $(document).mouseup(function (e)
            {
                var container = $("#tutorial");

                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0 // ... nor a descendant of the container
                    && count%2!=0)
                {
                    count = count+1;
                    if (count%2==0) {
                    container.animate({bottom:'-80%'},800);
                    container.fadeOut(0);}
                }
            });
            $(document).mouseup(function (e)
            {
                var container = $("#information");

                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0 // ... nor a descendant of the container
                    && count2%2!=0)
                {
                    count2 = count2+1;
                    if (count2%2==0) {
                    container.animate({bottom:'-80%'},800);
                    container.fadeOut(0);}
                }
            });
            $(document).mouseup(function (e)
            {
                var container = $("#tutorial2");

                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0) // ... nor a descendant of the container
                {
                    container.fadeOut(300);
                }
            });
            $(document).mouseup(function (e)
            {
                var container = $("#information2");

                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0) // ... nor a descendant of the container
                {
                    container.fadeOut(300);
                }
            });
            $(document).mouseup(function (e)
            {
                var container = $("#newsBox");

                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0 // ... nor a descendant of the container
                    )
                {
                    container.fadeOut(300);
                }
            });
            $(document).mouseup(function (e)
            {
                var container = $("#newsBoxMobile");

                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0 // ... nor a descendant of the container
                    )
                {
                    container.fadeOut(300);
                }
            });
            $(document).mouseup(function (e)
            {
                var container = $("#clusterBox");

                if (!container.is(e.target) // if the target of the click isn't the container...
                    && container.has(e.target).length === 0 // ... nor a descendant of the container
                    )
                {
                    container.fadeOut(300);
                }
            });
            $("#location").keypress(function(e)
            {
                if (e.which == 13) {
                    var valueX = $('#location').val();
                    $.ajax({
                        type: 'post',
                        url: 'processLocation.php',
                        data: {ajaxid: valueX},
                        success: function(data) {
                            var result = $.parseJSON(data);
                            var lng = result[0];
                            var lat = result[1];
                            setMapCenterX(lng, lat, 9);
                        }
                    });
                }
            });
            $("#newsItem").keypress(function(e)
            {
                if (e.which == 13) {
                    alert("We are currently working on implementing this feature, and it should be here soon. Location search, however, is working.");
                }
            });
            $("#locationM").keypress(function(e)
            {
                if (e.which == 13) {
                    var valueX = $('#locationM').val();
                    $.ajax({
                        type: 'post',
                        url: 'processLocation.php',
                        data: {ajaxid: valueX},
                        success: function(data) {
                            var result = $.parseJSON(data);
                            var lng = result[0];
                            var lat = result[1];
                            setMapCenterX(lng, lat, 9);
                        }
                    });
                }
            });
            $("#newsItemM").keypress(function(e)
            {
                if (e.which == 13) {
                    alert("We are currently working on implementing this feature, and it should be here soon. Location search, however, is working.");
                }
            });
            $(document).on('click', 'a[target="_blank"]', function(ev) {
              var url;

              ev.preventDefault();
              url = $(this).attr('href');
              window.open(url, '_system');
            });
            </script>
        </div>

        
        <script async defer src="ndtestCLUSTERS.php"></script>
        
    
    <!--Some Framework Scripts-->
	<script src="js/vendor/jquery.min.js"></script>
    	<script src="js/vendor/what-input.min.js"></script>
    	<script src="js/foundation.min.js"></script>
    	<script src="js/app.js"></script>

</body>
</html