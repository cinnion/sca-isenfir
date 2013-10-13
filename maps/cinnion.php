<html>
    <head>
        <script src="https://maps.google.com/maps?file=api&amp;key=AIzaSyDS7QXM2ua-7bdG11I1Om-d2R3QV-I2-LA&amp;v=3&amp;sensor=false", type="text/javascript"></script>
    <script type="text/javascript">

function map_init()
{
    if (!GBrowserIsCompatible()) {
        alert("Sorry, the Google Maps API is not compatible with this browser");
        return;
    }

    function createMarker(point, html, icon) {
        var marker = new GMarker(point, icon);
        GEvent.addListener(marker, "click", function() {
            marker.openInfoWindowHtml(html);
        });
        marker.openInfoWindowHtml(html);
        return marker;
    }

    /*
     * Setup the icons.
     */
    var baseIcon = new GIcon();
    baseIcon.iconSize = new GSize(32, 32);
    baseIcon.shadowSize=new GSize(56, 32);
    baseIcon.iconAnchor = new GPoint(24,24);
    baseIcon.infoWindowAnchor = new GPoint(16,0);
    
    var home_point = new GLatLng(38.064282, -78.893686);
    var home_icon  = new GIcon(baseIcon,
                               "http://maps.google.com/mapfiles/kml/pal3/icon56.png",
                               null,
                               "http://maps.google.com/mapfiles/kml/pal3/icon56s.png");
    var home_html = '\
<div style="width:240px">\
    Cinnion &amp; Khiba&rsquo;s<br/>\
    477 Chestnut Ave<br/>\
    Waynesboro VA 22980\
    <hr/>\
    <a href="http://maps.google.com/maps?q=477+Chestnut+Ave+Waynesboro+VA+22980&f=d" target="new">Directions</a>\
</div>\
'
    

    
    
    var map = new GMap2(document.getElementById("map"));
    map.addControl(new GLargeMapControl());
    map.addControl(new GMapTypeControl());
    map.setCenter(home_point, 18);

    map.setMapType(google.maps.HYBRID_MAP);

    var home_marker = createMarker(home_point, home_html, home_icon);
    map.addOverlay(home_marker);
//    home_marker.setIcon(home_icon);

    var icons = home_marker.getIcon();
}
    </script>

        <title>Direction to Cinnion &amp; Khiba's</title>
        <link rel="stylesheet" type="text/css" media="screen" href="/css/default.css" />
    </head>

    <body onload="map_init()" onunload="GUnload()">
        <table width="100%" border="0">
            <tr valign="top">
                <td width="20%" id="Menu"><? include "../menu.php"; ?></td>
                <td id="Content">
                    <h1>Direction to Cinnion &amp; Khiba's</h1>
                    
                    <div id="map" style="width: 550px; height: 450px"></div>
                </td>
            </tr>
        </table>
    </body>
</html>
