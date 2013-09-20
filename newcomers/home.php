<html><head>
	<title>Newcomer Information</title>
	<link rel="stylesheet" type="text/css" media="screen" href="../default.css" />
</head><body>
<table width="100%" border="0"><tr valign="top">
<td width="20%" id="Menu"><? include "../menu.php"; ?></td>

<td id="Content">
<h1>Newcomer Information</h1>

<!-- Content Begins Here -->

<p>Thank you for your interest in the Shire of Isenfir and the Society for Creative Anachronism!  If you would like for us to contact you with more information, please fill out the form below and click the Send Me More Information button. All information is optional and confidential.  If you would prefer to be contacted in a specific way (phone, e-mail or mail), please say so in the comment section.  If you would like for us to call you, please give an indication of what would be the best times to call.</p>

<p>There are plans to embellish this section with a number of files to be of use to Newcomers to the Shire and to the SCA.  In the meantime, these files can be found at the:</p>


<h2>Request for more information</h2>
<!--<form action="/cgi-sys/formmail.pl" method="POST">-->
<form action="thankyou.php" method="POST">
<input type=hidden name="subject" value="Isenfir Information Request">
<input type=hidden name="recipient" value="newcomers">
<table border="0" cellspacing="0">
	<tr><td align="right" width="153">Name:</td>
	    <td width="393"><input type="text" size="25" name="NAME"></td></tr>
	<tr><td align="right" width="153">SCA Name (if any):</td>
	    <td width="393"><input type="text" size="25" name="SCANAME"></td></tr>
	<tr><td align="right" width="153">Mailing Address (line 1):</td>
	    <td width="393"><input type="text" size="54" name="ADDRESS1"></td></tr>
	<tr><td align="right" width="153">(line 2):</td>
	    <td width="393"><input type="text" size="54" name="ADDRESS2"></td></tr>
	<tr><td align="right" width="153">City, State and ZIP:</td>
	    <td width="393"><input type="text" size="54" name="ADDRESS3"></td></tr>
	<tr><td align="right" width="153">Phone:</td>
	    <td width="393"><input type="text" size="28" name="PHONE"></td></tr>
	<tr><td align="right" width="153">E-mail:</td>
	    <td width="393"><input type="text" size="37" name="EMAIL"></td></tr>
	<tr><td align="left">&nbsp;</td>
	    <td width="393">Do you have any specific questions or comments?</td></tr>
	<tr><td align="right" width="153"></td>
	    <td width="393"><textarea name="Comments" rows="3" cols="48"></textarea></td></tr>
</table>
<p align="center"><input type="submit" name="Send" value="Send Me More Information">
                  <input type="reset" name="Reset" value="Clear"></p>
</form>

<!-- Content Ends Here -->

</tr></table>
<? include "../footer.php"; ?>
</body></html>
