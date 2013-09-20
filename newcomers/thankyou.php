<html><head>
	<title>Newcomer Information</title>
	<link rel="stylesheet" type="text/css" media="screen" href="/css/default.css" />
</head><body>
<table width="100%" border="0"><tr valign="top">
<td width="20%" id="Menu"><? include "../menu.php"; ?></td>

<td id="Content">
<h1>Newcomer Information</h1>

<!-- Content Begins Here -->

<h1 align="center">Thank You!</h1>
<p>&nbsp;</p>

<?php
$msg = "The following information was received on the Isenfir Newcomer website:\n\n";
$msg .= "NAME = $NAME\n\n";
$msg .= "SCANAME = $SCANAME\n\n";
$msg .= "ADDRESS1 = $ADDRESS1\n\n";
$msg .= "ADDRESS2 = $ADDRESS2\n\n";
$msg .= "ADDRESS3 = $ADDRESS3\n\n";
$msg .= "PHONE = $PHONE\n\n";
$msg .= "EMAIL = $EMAIL\n\n";
$msg .= "COMMENTS = $Comments\n\n";

$spam_count = substr_count($msg,"http");

if ($spam_count == 0) {

	print "<p>Thank you for your request for information from the Shire of Isenfir.  Someone will respond to you shortly with more information.</p>";

	//mail("webminister@isenfir.org", $subject, $msg, "From: Isenfir Newcomer Website <donotreply@isenfir.org>\nReply-To: Isenfir Webminister <webminister@isenfir.org>");

	mail("webminister@isenfir.org,knschmid@gmail.com,cometwine@gmail.com,otherland@gmail.com,sallykuntz@juno.com", $subject, $msg, "From: Isenfir Newcomer Website <donotreply@isenfir.org>\nReply-To: Isenfir Webminister <webminister@isenfir.org>");

} else {

	print "<p>Oops, I'm afraid you've entered illegal characters in your request.  Please note that that web links and URL references are not allowed.  Thank you!";

}

 ?>
 
<!-- Content Ends Here -->

</tr></table>
<? include "../footer.php"; ?>
</body></html>
