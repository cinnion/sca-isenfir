<html><head>
	<title>Shire of Isenfir - Webminister Contact</title>
	<link rel="stylesheet" type="text/css" media="screen" href="default.css" />
    <style type="text/css">
<!--
.style1 {font-size: 14pt}
-->
    </style>
</head>
<body>

<table width="100%" border="0">
<tr valign="top">

<td width="20%" id="Menu">
	<? include "menu.php"; ?>
</td>

<td id="Content">
<h1>Contact the Webminister</h1>
<p>Please enter your information, along with your comment, suggestion or question, in the form below.  Thanks for your feedback!</p>
<form action="/cgi-sys/formmail.pl" method="POST">
<input type=hidden name="recipient" value="webdude">
<table border="0" cellspacing="0">
	<tr><td align="right" width="153">Name:</td>
	    <td width="393"><input type="text" size="25" name="NAME"></td></tr>
	<tr><td align="right" width="153">SCA Name (if any):</td>
	    <td width="393"><input type="text" size="25" name="SCANAME"></td></tr>
	<tr><td align="right" width="153">E-mail:</td>
	    <td width="393"><input type="text" size="37" name="EMAIL"></td></tr>
	<tr><td align="left">&nbsp;</td>
	    <td width="393">Questions or comments:</td></tr>
	<tr><td align="right" width="153"></td>
	    <td width="393"><textarea name="Comments" rows="8" cols="60"></textarea></td></tr>
	<tr><td align="left">&nbsp;</td>
	    <td width="393"><input type="submit" name="Send" value="Email the Webminister">
                  <input type="reset" name="Reset" value="Clear"></td></tr>
</table>
</form>


</td>

</tr>
</table>

<? include "footer.php"; ?>
</body></html>