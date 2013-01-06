<?
/***********************************************************************
**  Crowns and Anchors On-Line Game (c_a.php)
**    by David Oxford
**    April 18, 2001
**  
**  This page expects to receive the following values from the calling page:
**
**  $crown - Amount bet on Crowns
**  $coin - Amount bet on Coins
**  $cup - Amount bet on Cups
**  $stick - Amount bet on Sticks
**  $sword - Amount bet on Swords
**  $anchor - Amount bet on Anchors
**  $totalamount - The total amount of money the player had before the
**                 dice were rolled
************************************************************************/
 
	function NumRolled($marker, $die) {
		// --------------------------------------------------------------
		// Calculate the number of dice which rolled a particular marker.
		// Return the number (1,2, or 3), or return -1 if no dice rolled
		// that marker so that the new-money calculation will correctly
		// calculate the money lost on that bet.
		// --------------------------------------------------------------
		$total_rolled = 0;

		// Check each die to see if it matches the marker
		for ($dienum = 1; $dienum <= 3; $dienum++) {
			if ($die[$dienum] == $marker) {
				$total_rolled++;
			}
		}

		if ($total_rolled == 0) {
			$total_rolled = -1;
		}
		
		return($total_rolled);		
	}

/***********************************************************************/	

	function BuildImgTags($marker, $imgfile, $die) {
		// ------------------------------------------------------------------
		// Build the list of <img ...> tags to be displayed over each marker
		// space.  There will be the one <img ...> tag in the list for each
		// die that rolled that marker, such that if there were two crowns
		// rolled, two crown dice images will appear over the crown marker
		// space.
		// ------------------------------------------------------------------
		$taglist = "";
		
		for ($dienum = 1; $dienum <= 3; $dienum++) {
			if ($die[$dienum] == $marker) {
			
				// Tack another <img ...> tag onto the list
				$taglist .= "<img src=\"$imgfile\" width=\"34\" height=\"32\">";
			}
		}

		// Make sure SOMETHING gets printed, even if it's just a 
		// non-breaking space.  Not actually necessary, but it looks good.
		// ---------------------------------------------------------------
		if ($taglist == "") {
			$taglist = "&nbsp;";
		}
		
		return ($taglist);
	}

/***********************************************************************/
	
	// Define some constants, for readability
	// --------------------------------------
	define("CROWN", 1);
	define("COIN",  2);
	define("CUP",   3);
	define("STICK", 4);
	define("SWORD", 5);
	define("ANCHOR",6);
	
	srand(time());
	
	// Roll the dice!!!
	// ----------------
	$die[1] = rand(1,6);
	$die[2] = rand(1,6);
	$die[3] = rand(1,6);

	// Calculate the new values to go into the form fields below
	// each marker space, determined by the amount won or lost
	// on each.  Note that NumRolled() will return -1 if no dice
	// rolled that marker, so that the resulting money value will be
	// zero [(-1 * bet) + bet always equals 0]
	// -------------------------------------------------------------
	$new_crown = ($crown  * NumRolled(CROWN, $die))  + $crown;
	$new_coin  = ($coin   * NumRolled(COIN, $die))   + $coin;
	$new_cup   = ($cup    * NumRolled(CUP, $die))    + $cup;
	$new_stick = ($stick  * NumRolled(STICK, $die))  + $stick;
	$new_sword = ($sword  * NumRolled(SWORD, $die))  + $sword;
	$new_anchor= ($anchor * NumRolled(ANCHOR, $die)) + $anchor;
	
	// Figure out the total winnings/losses and compute the money remaining
	// --------------------------------------------------------------------
	$totalbet = $crown + $coin + $cup + $stick + $sword + $anchor;
					 
	$totalwinnings = $new_crown + $new_coin + $new_cup + 
	                 $new_stick + $new_sword + $new_anchor;
					 
	$moneyleft = $totalamount - $totalbet + $totalwinnings;
	
	// Construct an appropriate message, depending on whether it was a win, loss, or break-even
	// ----------------------------------------------------------------------------------------
	if ($moneyleft > $totalamount) {
		if ($moneyleft > 0) {
			$message = "Congratulations! You won! Collect and place your bets, or just let it ride.";
		}
		if ($moneyleft == 0) {
			$message = "You made it back to being just plain broke. You probably shouldn't push your luck again.";
		}
		if ($moneyleft < 0) {
			$message = "You won, but you still owe us. Perhaps you'd rather work it off in the kitchen?";
		}
	}
	elseif ($moneyleft == $totalamount) {
		$message = "You broke even. Collect and place your bets, or just let it ride and try again.";
	}
	else {
		if ($moneyleft > 0) {
			$message = "The Inn thanks you for your support. Place your bets!";
		}
		if ($moneyleft == 0) {
			$message = "I'm sorry, you seem to be all tapped out. You can <a href=\"c_a.htm\">start over</a> or you can " .
					   "place bets on credit. Be warned, though, many a soul has found ruin on credit.";
		}
		if ($moneyleft < 0) {
			$message = "It seems you owe us money, now. Tsk, tsk. You were warned about playing on credit.";
		}
	}
		
					 
	// Build the <img ...> tag list (zero to three tags) for each 
	// marker space, based on the number of dice that rolled that
	// marker.  These will be inserted into the appropriate table
	// cells below
	// ----------------------------------------------------------
	$crown_img = BuildImgTags(CROWN, "die-crown.gif", $die);
	$coin_img = BuildImgTags(COIN, "die-coin.gif", $die);
	$cup_img = BuildImgTags(CUP, "die-cup.gif", $die);
	$stick_img = BuildImgTags(STICK, "die-stick.gif", $die);
	$sword_img = BuildImgTags(SWORD, "die-sword.gif", $die);
	$anchor_img = BuildImgTags(ANCHOR, "die-anchor.gif", $die);	


/***************** Debugging Printouts *********************
	    print("crown  = $crown <br>");
    	print("coin   = $coin  <br>");
	    print("cup    = $cup   <br>");
	    print("stick  = $stick <br>");
	    print("sword  = $sword <br>");
	    print("anchor = $anchor<br>");

		print("Die 1 = " . $die[1] . "<br>");
		print("Die 2 = " . $die[2] . "<br>");
		print("Die 3 = " . $die[3] . "<br>");
	
	    print("Number of crowns rolled = " . NumRolled(CROWN, $die) . "<br>");
	    print("Number of coins rolled = " . NumRolled(COIN, $die) . "<br>");
	    print("Number of cups rolled = " . NumRolled(CUP, $die) . "<br>");
	    print("Number of sticks rolled = " . NumRolled(STICK, $die) . "<br>");
	    print("Number of swords rolled = " . NumRolled(SWORD, $die) . "<br>");
	    print("Number of anchors rolled = " . NumRolled(ANCHOR, $die) . "<br>");

	    print("new_crown  = $new_crown <br>");
	    print("new_coin   = $new_coin  <br>");
	    print("new_cup    = $new_cup   <br>");
	    print("new_stick  = $new_stick <br>");
	    print("new_sword  = $new_sword <br>");
	    print("new_anchor = $new_anchor<br>");

		print("Started with = $totalamount <br>");
		print("Total winnings/losses = $totalwinnings <br>");
		print("Total bet = $totalbet <br>");
		print("Money left = $moneyleft <br>");
***************** Debugging Printouts *********************/	
	
?>

<html>
<head>
<title>Play Crowns and Anchors</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link rel="stylesheet" href="../../general.css" type="text/css">
</head>

<body bgcolor="#FFFFDE" text="#000000">
<p align="center"><b><font face="Arial, Helvetica, sans-serif" size="6">Play Crowns 
  and Anchors</font></b></p>
<form name="form1" method="post" action="c_a.php">
<?
  print("<input type=\"hidden\" name=\"totalamount\" value=\"$moneyleft\">\n");
?>  
  <table width="612" cellspacing="0" cellpadding="0" align="center">
    <tr> 

<?
      print("<td width=\"102\">$crown_img</td>\n");
	  print("<td width=\"102\">$coin_img</td>\n");
	  print("<td width=\"102\">$cup_img</td>\n");
	  print("<td width=\"102\">$stick_img</td>\n");
	  print("<td width=\"102\">$sword_img</td>\n");
	  print("<td width=\"102\">$anchor_img</td>\n");
?>

    </tr>
    <tr> 
      <td width="102"><img src="brd-crown.gif" width="102" height="144"></td>
      <td width="102"><img src="brd-coin.gif" width="102" height="144"></td>
      <td width="102"><img src="brd-cup.gif" width="102" height="144"></td>
      <td width="102"><img src="brd-stick.gif" width="102" height="144"></td>
      <td width="102"><img src="brd-sword.gif" width="102" height="144"></td>
      <td width="102"><img src="brd-anchor.gif" width="102" height="144"></td>
    </tr>
    <tr align="center"> 
      <td width="102">
<?        print("<input type=\"text\" name=\"crown\" size=\"5\" maxlength=\"5\" value=\"$new_crown\">\n"); ?>
      </td>
      <td width="102"> 
<?        print("<input type=\"text\" name=\"coin\" size=\"5\" maxlength=\"5\" value=\"$new_coin\">\n"); ?>
      </td>
      <td width="102"> 
<?        print("<input type=\"text\" name=\"cup\" size=\"5\" maxlength=\"5\" value=\"$new_cup\">\n"); ?>
      </td>
      <td width="102"> 
<?        print("<input type=\"text\" name=\"stick\" size=\"5\" maxlength=\"5\" value=\"$new_stick\">\n"); ?>
      </td>
      <td width="102"> 
<?        print("<input type=\"text\" name=\"sword\" size=\"5\" maxlength=\"5\" value=\"$new_sword\">\n"); ?>
      </td>
      <td width="102"> 
<?        print("<input type=\"text\" name=\"anchor\" size=\"5\" maxlength=\"5\" value=\"$new_anchor\">\n"); ?>
      </td>
    </tr>
    <tr align="center"> 
      <td colspan="6">
        <p>&nbsp;<br>
		<font face="Arial, Helvetica, sans-serif" size="2">
<?		
	print("$message");	
?>		
		</font></p>
        <p><font face="Arial, Helvetica, sans-serif" size="2">You have <font size="3"><b> 
<?
	print("$moneyleft");
?>
        </b></font> pence total. </font></p>
      </td>
    </tr>
  </table>
  <p align="center"> 
    <input type="submit" name="Submit" value="Roll the dice">
  </p>
</form>
<p align="center"><font face="Arial, Helvetica, sans-serif" size="2"><br>
  <a href="../home.htm">Return to the Red Mountain Inn Main Page</a></font></p>
</body>
</html>

