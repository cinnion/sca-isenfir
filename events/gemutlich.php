<html>
<head>
    <title>Gem&uuml;tlichplatz</title>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/new_default.css" />
	<link rel="stylesheet" type="text/css" media="screen" href="/css/gemutlich.css" />
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyDS7QXM2ua-7bdG11I1Om-d2R3QV-I2-LA&sensor=false" type="text/javascript"></script>
    <script type="text/javascript">

function map_init()
{
    var mapdiv = document.getElementById("map");
    var useragent = navigator.userAgent;
    var LatLong = new google.maps.LatLng(38.139464, -78.557203);

    if (useragent.indexOf('iPhone') != -1 || useragent.indexOf('Android') != -1) {
        mapdiv.style.width = '100%';
        mapdiv.style.height = '100%';
    } else {
        mapdiv.style.width = '600px';
        mapdiv.style.height = '480px';
    }

    var infoWindowContent = '<div id="content">' +
        '<div style="width: 150px; height: 75px;">' +
        'Camp Albemarle<br/>' +
        '1675 4-H Way<br/>' +
        'Charlottesville VA 22901 <br/>' +
        '<a href="http://maps.google.com/maps?q=Camp+Albermarle,1675+4-H+Way+Charlottesville+VA+22901&f=d" target="new">Directions</a>' +
        '</div>';

    var infoWindowOptions =
    {
        content: infoWindowContent
    };

    var infoWindow = new google.maps.InfoWindow(infoWindowOptions);

    var mapOptions =
    {
        center:  	LatLong,
        zoom:	 	15,
        panControl: false,
        mapTypeControlOptions:
        {
            style:		google.maps.MapTypeControlStyle.DROPDOWN_MENU
        },
        zoomControlOptions:
        {
            style: google.maps.ZoomControlStyle.SMALL
        }
    };

    var map = new google.maps.Map(mapdiv, mapOptions);

    var LatLong2 = new google.maps.LatLng(38.139265, -78.557110);
    var markerOptions =
    {
        map:		map,
        position:	LatLong2,
        title:		"Gemutlichplatz",
        icon:		"https://maps.gstatic.com/intl/en_us/mapfiles/markers2/star-on-map.png",
    };

    var marker = new google.maps.Marker(markerOptions);
    google.maps.event.addListener(marker, 'click', function () { infoWindow.open(map, marker); });

}
    </script>

</head>
<body onload="map_init()">
    <table width="100%" border="0"><tr valign="top">
    <td width="20%" id="Menu"><? include "../menu.php"; ?></td>
    <td id="Content">
            <h1>Gem&uuml;tlichplatz II</h1>
            <h2>TBD<br />Shire of Isenfir</h2>

<!-- Content Begins Here -->

<div id="contents">
<p>On April 23, 1516, the Reinheitsgebot, or German Beer &ldquo;Purity Order&rdquo;, was signed into law by William IV, Duke of Bavaria. It stated that beer may only be brewed with water, barley and hops. Put forth as a quality control law, many believe its true purpose was to end a price war between brewers and bakers over the price of wheat and rye.</p>
<p>Come join us as we begin the countdown to the 500<sup>th</sup> anniversary of this momentous law that defined German beer until well into the 20<sup>th</sup> Century. The celebration will include a collegium with classes on brewing and northern European culture, as well as an open brewers table and a wondrous German feast.</p>
</div>

<div>Gemütlichplatz II will be posted this summer.  Contact Brynjolf the Redbearded at theredbearded AT gmail if you have any questions about the event.</div>

<!--
<h3><a id="map2">Directions &amp; map:</a></h3>
<div>
<h4>East of the Blue Ridge</h4>
<div>
Take your best route to Charlottesville and Route 29. Exit Route 29 at the Barracks Road interchange and go west on Barracks Road/Garth Road/Route 601 five miles. Turn right onto Free Union Road/Route 601. An SCA sign will be on the corner opposite the country store. Go north approximately three miles to 4H Road. Site is on the left. There will be another SCA sign at the turn.</div>

<h4>West of the Blue Ridge</h4>
<div>Take your best route to I-64 east. Take exit 107 onto Rockfish Gap Turnpike/Rt. 250 east toward Crozet Yancy Mills for 1.7 miles. Turn left onto Crozet Avenue/Rt. 240 east for 2.4 miles. Just after crossing under the railroad bridge in Crozet go straight onto Buck Road/White Hall Road/Rt. 810 for 3.5 miles. At the T intersection, turn right onto Garth Road/Route 614 and continue east for 6.2 miles. Turn left onto Free Union Road/Route 601. An SCA sign will be on the corner opposite the country store. Go north approximately three miles to 4H Road. Site is on the left. There will be another SCA sign at the turn.</div>
    <div id="map"></div>
</div>
-->

</div>

<!-- Content Ends Here -->

</tr></table>
<? include "../footer.php"; ?>
</body>
</html>



