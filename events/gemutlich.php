<html>
<head>
    <title>Gem&uuml;tlichplatz</title>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/new_default.css" />
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
            <h1>Gem&uuml;tlichplatz</h1>
            <h2>April 12- 13, 2014<br />Shire of Isenfir</h2>

<!-- Content Begins Here -->

<div id="contents">
<p>On April 23, 1516, the Reinheitsgebot, or German Beer &ldquo;Purity Order&rdquo;, was signed into law by William IV, Duke of Bavaria. It stated that beer may only be brewed with water, barley and hops. Put forth as a quality control law, many believe its true purpose was to end a price war between brewers and bakers over the price of wheat and rye.</p>
<p>Come join us as we begin the countdown to the 500<sup>th</sup> anniversary of this momentous law that defined German beer until well into the 20<sup>th</sup> Century. The celebration will include a collegium with classes on brewing and northern European culture, as well as an open brewers table and a wondrous German feast.</p>

<h3>Martial Activities:</h3>
<div>As combat is not gem&uuml;tlich, no martial activities are planned.</div>

<h3>Arts &amp; Sciences Activities:</h3>
<div>A class schedule will be posted soon and an announcement made when that happens. Please contact Lady Khiba' al-Jabaliyya if you would like to teach a class (Linda Needham; cat.the.elf[AT]gmail.com; (540)471-7253 NLT 10:00)</div>

<h3>Cost:</h3>
<div>
    <table id="cost">
    <tr><td>Adult, Member:</td><td>$15.00 Day-Trip</td><td>$12.00 Feast</td><td>$6.00 Camping</td></tr>
    <tr><td>Adult, Non-Member:</td><td>$20.00 Day-Trip</td><td>$12.00 Feast</td><td>$6.00 Camping</td></tr>
    <tr><td>Youth (8-17):</td><td>$15.00 Day-Trip</td><td>$12.00 Feast</td><td>$6.00 Camping</td></tr>
    <tr><td>Child (0-7):</td><td>$15.00 Day-Trip</td><td>$0.00 Feast</td><td>$6.00 Camping</td></tr>
    </table>

    <h4>Make Checks Payable To:</h4>
    <div>
        SCA, Inc., Shire of Isenfir
    </div>
    <h4>Cost Notes:</h4>
    <div>
        Cabin space is included in your camping fee. Mattresses are provided but you need to bring your own
        bedding. Cabins are unheated and sleep 20 each. Tent camping is also allowed. A dayboard on Saturday and a light
        breakfast on Sunday are included in your site fees.
    </div>
</div>
<h3>Site:</h3>
<div>
    Camp Albermarle, 1675 4-H Way
    Charlottesville VA  22901

    Camp Albermarle is located in the lovely forested hills of Atlantia&rsquo;s western frontier. The hall is warm and
    cozy &ndash; truly gem&uuml;tlich. The site opens at 9:00 a.m. on Saturday and closes at 11:00 a.m. on Sunday.


    <h4>Site Restrictions:</h4>
    <div>
        Wet site. No firearms. There is a fireplace in the hall and a fire circle in the field; no other fires are permitted. Pets are welcome but you must clean up after them.
    </div>
</div>


<h3>Feast Information:</h3>
<div>
    A full and hearty feast of traditional German food will be served. You MUST pre-register for feast; there will be no feast spots available at the gate.
</div>
<h3>Other Information:</h3>
<div>
There is a strict site limit of 99 persons and an overnight limit of 80 persons, so preregistering is strongly recommended.<br />
</div>
<h3>Autocrat's Information:</h3>
<div>
Lord Brynjolf the Redbearded (Matt Garland), 29 Brandon Ladd Circle, Waynesboro, VA 22980,  Phone: (540) 290-5770, E-mail:  theredbearded[AT]gmail.com<br />
</div>
<h3>Reservations:</h3>
<div>
Lady Elena Modarova vnuka (Karolyn McNeely), 131 Crompton Road, Waynesboro, VA 22980,  Phone: (540) 471-1401, E-mail:  dorathalia[AT]yahoo.com<br />
</div>
<h3>Directions &amp; map:</h3>
<div>
    <h4>From Baltimore/DC:</h4>
    <div>
        From I-66, take Exit 43A to US-29 South. As you near Charlottesville, begin looking for the airport signs, and take a right onto Airport Road (649). At the traffic circle, take the 3rd exit onto Dickerson Rd (606). Go 1.1 miles, and at the next traffic circle, take the 2nd exit onto Earlysville Rd (743). Go 3.2 miles and take a right onto Woodlands Rd (676). Go 4 miles and take a right onto Free Union Rd (601). Go 2.2 miles and the site will be on the left.
    </div>
    <h4>From western Maryland:</h4>
    <div>
        From I-81, take Exit 247A and follow the signs to US-33 East. In about 29 miles, turn right onto Dyke Road (Rt 810). In 8 miles, continue onto Markwood Rd (664). In 1.2 miles, turn right onto Davis Shop Rd (671). In 2 miles, turn left onto Free Union Rd (601). Go 5.3 miles and the site will be on the right.
    </div>
    <h4>From Richmond, VA:</h4>
    <div>
        From I-64, take Exit 124 and turn right onto US-250/Richmond Rd. Go 5 miles and take the County Road 654/Barracks Road exit. Turn right onto Barracks Rd. (654). Go 2 miles and continue onto Garth Rd (601). Go 2.7 miles and turn right onto Free Union Rd (601). Go 3 miles and the site will be on the left.
    </div>
    <h4>From Roanoke, VA:</h4>
    <div>
        From I-81, take Exit 221 and merge onto I-64 East. Take Exit 107 for US-250 and turn left onto US-250 East. Go 7.4 miles and turn left onto Owensville Rd (678). Go 4.2 miles and turn right onto Garth Rd (614). Go 1.1 miles and turn left onto Free Union Rd (601). Go 3 miles and the site will be on the left.
    </div>
    <div id="map"></div>
</div>

<h3>Class List:</h3>
<ul>
    <li>Mikhail Novgorodets
    <ul>
        <li><b>Period German Beer and Brewing</b> A look at period techniques and thoughts, plus a "pub crawl" through
               period beers, from the perspective of a 16<sup>th</sup> Century German Doctor.<br/>
              (1hr, 20 students, no fees; donations welcome to help defray cost of handout reproduction)
        </li>
        <li><b>Russian Mead from the Domostroi</b> An examination of five mead recipes and their variations as presented
               in the household-management book <i>The Domostroi</i><br/>
               (1 hour, 20 students, no fees; donations welcome to help defray the cost of handout reproduction)
        </li>
    </ul>
    </li>
</ul>
</div>

<!-- Content Ends Here -->

</tr></table>
<? include "../footer.php"; ?>
</body>
</html>



