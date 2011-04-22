<?php 
session_start();
//include('header.php');
?>
<html>
<body>
<?php
//include('siteNavigator.php');
?>

<!-- Page info goes below-->

<?php

echo "<br/><br/><a href = 'home.php'>return home</a><br/><br/>";
include('DB.php');

$famID = $_SESSION['familyID'];
$familyID = $_SESSION['familyID'];
$firstName = $_SESSION['userFirstName']; 
$lastName = $_SESSION['userLastName'];
$yearJoined = $_SESSION['yearJoined'];
$streetAddress = $_SESSION['streetAddress'];
$city = $_SESSION['city'];
$state = $_SESSION['state'];
$zip = $_SESSION['zip'];
$homePhone = $_SESSION['homePhone'];
$workPhone = $_SESSION['workPhone'];
$cellPhone = $_SESSION['cellPhone'];
$accessLevel = $_SESSION['accessLevel'];
$overallAFD = $_SESSION['overallAFD'];
$currentAFD = $_SESSION['currentAFD'];
/*better calculation for AFP*/
$Q = "SELECT currentAFD, overallAFD FROM families WHERE familyID = $famID;";
$r = mysqli_query($db,$Q);
while($row = mysqli_fetch_array($r)){
	$overallAFD = $row['overallAFD'];
	$currentAFD = $row['currentAFD'];
}


$savings = $overallAFD - $currentAFD;

$familyName = $firstName . " " . $lastName; 

$query = "SELECT swimmerFirstName, swimmerMiddleInitial, swimmerLastName, swimGroup, birthday 
			FROM swimmers WHERE familyID = '$famID';";

$result = mysqli_query($db, $query);

$first = true;

$today = getdate();
$day = $today[mday];
$year = $today[year];
$month = $today[mon];
$today = $month . "/" . $day . "/" . $year;

$numSwimmers = 0;

echo "
<table border=1>

     <tr>
      <td>
      <table>
       <tr>
        <td width='5%' style='width:5.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>
        </td>
        <td width='45%' style='width:45.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:10.0pt;font-family:'Verdana','sans-serif';
        mso-fareast-font-family:'Times New Roman';mso-bidi-font-family:Arial'>RAYS
        AFP ACCOUNT STATEMENT</span><span style='font-size:7.5pt;font-family:
        'Arial','sans-serif';mso-fareast-font-family:'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='19%' style='width:19.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal align=right style='text-align:right'><b><u><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>BirthDate</span></u></b><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='1%' style='width:1.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>
        </td>
        <td width='30%' style='width:30.0%;padding:.75pt .75pt .75pt .75pt'>

        <p class=MsoNormal><b><u><span style='font-size:10.0pt;font-family:
        'Verdana','sans-serif';mso-fareast-font-family:'Times New Roman';
        mso-bidi-font-family:Arial'>Athletes / Group</span></u></b><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
       </tr>
	   <!--SECOND ROW -->
       <tr style='mso-yfti-irow:1'>
        <td width='5%' style='width:5.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>
        </td>
        <td width='45%' style='width:45.0%;padding:.75pt .75pt .75pt .75pt'>

        <p class=MsoNormal><span style='font-size:10.0pt;font-family:'Verdana','sans-serif';
        mso-fareast-font-family:'Times New Roman';mso-bidi-font-family:Arial'>**THIS
        IS NOT A BILL**</span><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''><o:p></o:p></span></p>
        </td>";
		
		while($row = mysqli_fetch_array($result)) 
		{
		$fname = $row[swimmerFirstName]; 
		$mi = $row[swimmerMiddleInitial];
		$lname = $row[swimmerLastName];
		$name = $fname . " " . $mi . " " . $lname;
		$group = $row[swimGroup];
		$birthday = $row[birthday];
		$numSwimmers++;
		echo "	
        <td width='19%' style='width:19.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal align=right style='text-align:right'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>$birthday</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='1%' style='width:1.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>
        </td>
        <td width='30%' style='width:30.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:10.0pt;font-family:'Verdana','sans-serif';
        mso-fareast-font-family:'Times New Roman';mso-bidi-font-family:Arial'>";
		echo $name . " / ";
		echo $group;
		echo "</span><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''><o:p></o:p></span></p>
        </td>
       </tr>
       <tr style='mso-yfti-irow:2'>
        <td width='5%' style='width:5.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>
        </td>";
		if($first = true){
		echo "
        <td width='45%' style='width:45.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:10.0pt;font-family:'Verdana','sans-serif';
        mso-fareast-font-family:'Times New Roman';mso-bidi-font-family:Arial'>***DO
        NOT SEND ANY PAYMENT**</span><span style='font-size:7.5pt;font-family:
        'Arial','sans-serif';mso-fareast-font-family:'Times New Roman''><o:p></o:p></span></p>
        </td>";
		$first = false;
		}
		}
		echo "
        </td>
        <td width='45%' style='width:45.0%;padding:.75pt .75pt .75pt .75pt'></td>
        <td width='19%' style='width:19.0%;padding:.75pt .75pt .75pt .75pt'></td>
        <td width='1%' style='width:1.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>
        </td>
        <td width='30%' style='width:30.0%;padding:.75pt .75pt .75pt .75pt'></td>
       </tr>
       <tr style='mso-yfti-irow:4'>

        <td width='5%' style='width:5.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>
        </td>
        <td width='45%' style='width:45.0%;padding:.75pt .75pt .75pt .75pt'></td>
        <td width='19%' style='width:19.0%;padding:.75pt .75pt .75pt .75pt'></td>
        <td width='1%' style='width:1.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>
        </td>
        <td width='30%' style='width:30.0%;padding:.75pt .75pt .75pt .75pt'></td>

       </tr>
       <tr style='mso-yfti-irow:5'>
        <td width='5%' style='width:5.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>
        </td>
		<td width='45%' style='width:45.0%;padding:.75pt .75pt .75pt .75pt'></td>
        <td width='19%' style='width:19.0%;padding:.75pt .75pt .75pt .75pt'></td>
        <td width='1%' style='width:1.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>

        </td>
        <td width='30%' style='width:30.0%;padding:.75pt .75pt .75pt .75pt'></td>
       </tr>
       <tr style='mso-yfti-irow:6;mso-yfti-lastrow:yes'>
        <td width='5%' style='width:5.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>
        </td>
        <td width='45%' style='width:45.0%;padding:.75pt .75pt .75pt .75pt'></td>
        <td width='19%' style='width:19.0%;padding:.75pt .75pt .75pt .75pt'></td>

        <td width='1%' style='width:1.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>
        </td>
        <td width='30%' style='width:30.0%;padding:.75pt .75pt .75pt .75pt'></td>
       </tr>
      </table>
      <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
      mso-fareast-font-family:'Times New Roman';display:none;mso-hide:all'><o:p>&nbsp;</o:p></span></p>
      <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
       width='100%' style='width:100.0%;mso-cellspacing:0in;mso-yfti-tbllook:
       1184'>";
	   //END HEADER INFORMATION
	   //BEGIN FAMILY INFORMATION
	   echo "
       <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>

        <td width='5%' style='width:5.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>
        </td>
        <td width='45%' style='width:45.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:10.0pt;font-family:'Verdana','sans-serif';
        mso-fareast-font-family:'Times New Roman';mso-bidi-font-family:Arial'>$familyName
		</span><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='1%' style='width:1.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>

        </td>
        <td width='39%' style='width:39.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal align=right style='text-align:right'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>Home: $homePhone</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='10%' style='width:10.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>
        </td>
       </tr>

       <tr style='mso-yfti-irow:1'>
        <td width='5%' style='width:5.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>
        </td>
        <td width='45%' style='width:45.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:10.0pt;font-family:'Verdana','sans-serif';
        mso-fareast-font-family:'Times New Roman';mso-bidi-font-family:Arial'>$streetAddress
		</span><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='1%' style='width:1.0%;padding:.75pt .75pt .75pt .75pt'>

        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>
        </td>
        <td width='39%' style='width:39.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal align=right style='text-align:right'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>Office: $workPhone</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='10%' style='width:10.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>
        </td>

       </tr>
       <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
        <td width='5%' style='width:5.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>
        </td>
        <td width='45%' style='width:45.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:10.0pt;font-family:'Verdana','sans-serif';
        mso-fareast-font-family:'Times New Roman';mso-bidi-font-family:Arial'>$city,
        $state $zip</span><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''><o:p></o:p></span></p>
        </td>

        <td width='1%' style='width:1.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>
        </td>
        <td width='39%' style='width:39.0%;padding:.75pt .75pt .75pt .75pt'></td>
        <td width='10%' style='width:10.0%;padding:.75pt .75pt .75pt .75pt'>
        <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''>&nbsp;<o:p></o:p></span></p>
        </td>
       </tr>
      </table>";
	  //END FAMILY INFORMATION
	  //BEGIN ACCOUNT INFORMATION
	  echo "
      <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
      mso-fareast-font-family:'Times New Roman';display:none;mso-hide:all'><o:p>&nbsp;</o:p></span></p>
      <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
       width='100%' style='width:100.0%;mso-cellspacing:0in;mso-yfti-tbllook:
       1184;mso-padding-alt:1.5pt 1.5pt 1.5pt 1.5pt'>
       <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
        <td width='100%' style='width:100.0%;padding:1.5pt 1.5pt 1.5pt 1.5pt'>
        <p class=MsoNormal align=center style='text-align:center'><b><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>Account#: $famID</span></b><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
       </tr>
       <tr style='mso-yfti-irow:1;mso-yfti-lastrow:yes'>

        <td width='100%' style='width:100.0%;padding:1.5pt 1.5pt 1.5pt 1.5pt'>
        <p class=MsoNormal align=right style='text-align:right'><b><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>Remaining AFP Balance:
        $currentAFD</span></b><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''><o:p></o:p></span></p>
        </td>
       </tr>
      </table>
      <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
      mso-fareast-font-family:'Times New Roman';display:none;mso-hide:all'><o:p>&nbsp;</o:p></span></p>
      <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
       width='100%' style='width:100.0%;mso-cellspacing:0in;mso-yfti-tbllook:
       1184;mso-padding-alt:2.25pt 2.25pt 2.25pt 2.25pt' rules=cols>
       <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>

        <td width='17%' style='width:17.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><b><u><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>Posting Date </span></u></b><b><span
        style='font-size:9.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></b></p>
        </td>
        <td width='20%' style='width:20.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal><b><u><span style='font-size:10.0pt;font-family:
        'Verdana','sans-serif';mso-fareast-font-family:'Times New Roman';
        mso-bidi-font-family:Arial'>Category</span></u></b><b><span
        style='font-size:9.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></b></p>
        </td>
        <td width='35%' style='width:35.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal><b><u><span style='font-size:10.0pt;font-family:
        'Verdana','sans-serif';mso-fareast-font-family:'Times New Roman';
        mso-bidi-font-family:Arial'>Description</span></u></b><b><span
        style='font-size:9.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></b></p>

        </td>
        <td width='14%' style='width:14.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><b><u><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>Charges</span></u></b><b><span
        style='font-size:9.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></b></p>
        </td>
        <td width='14%' style='width:14.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><b><u><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>Credits</span></u></b><b><span
        style='font-size:9.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></b></p>
        </td>
       </tr>

       <tr style='mso-yfti-irow:1'>
        <td width='17%' style='width:17.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>$today</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='20%' style='width:20.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal><span style='font-size:10.0pt;font-family:'Verdana','sans-serif';
        mso-fareast-font-family:'Times New Roman';mso-bidi-font-family:Arial'>Total
        AFP Obligation</span><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='35%' style='width:35.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>

        <p class=MsoNormal><span style='font-size:10.0pt;font-family:'Verdana','sans-serif';
        mso-fareast-font-family:'Times New Roman';mso-bidi-font-family:Arial'>Total
        AFP Obligation (returning - $numSwimmers swimmers)</span><span style='font-size:
        7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='14%' style='width:14.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>$overallAFD</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='14%' style='width:14.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>0.00</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>

        </td>
       </tr>
       <tr style='mso-yfti-irow:2'>
        <td width='17%' style='width:17.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>$today</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='20%' style='width:20.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal><span style='font-size:10.0pt;font-family:'Verdana','sans-serif';
        mso-fareast-font-family:'Times New Roman';mso-bidi-font-family:Arial'>
        Manna Statement</span><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''><o:p></o:p></span></p>

        </td>
        <td width='35%' style='width:35.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal><span style='font-size:10.0pt;font-family:'Verdana','sans-serif';
        mso-fareast-font-family:'Times New Roman';mso-bidi-font-family:Arial'>MANNA/Scrip
        earnings as of today</span><span style='font-size:7.5pt;
        font-family:'Arial','sans-serif';mso-fareast-font-family:'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='14%' style='width:14.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>0.00</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='14%' style='width:14.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>

        <p class=MsoNormal align=right style='text-align:right'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>$savings</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
       </tr>
	   
      </table>
      <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
      mso-fareast-font-family:'Times New Roman';display:none;mso-hide:all'><o:p>&nbsp;</o:p></span></p>
      <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
       width='100%' style='width:100.0%;mso-cellspacing:0in;mso-yfti-tbllook:
       1184;mso-padding-alt:2.25pt 2.25pt 2.25pt 2.25pt'>

       <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
        <td style='padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=center style='text-align:center'><b><u><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>Summary</span></u></b><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
       </tr>
      </table>
      <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
      mso-fareast-font-family:'Times New Roman';display:none;mso-hide:all'><o:p>&nbsp;</o:p></span></p>
      <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
       width='100%' style='width:100.0%;mso-cellspacing:0in;mso-yfti-tbllook:
       1184;mso-padding-alt:2.25pt 2.25pt 2.25pt 2.25pt' rules=cols>

       <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
        <td width='30%' style='width:30.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><b><u><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>Previous Balance </span></u></b><b><span
        style='font-size:9.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></b></p>
        </td>
        <td width='15%' style='width:15.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><b><u><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>Charges</span></u></b><b><span
        style='font-size:9.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></b></p>
        </td>
        <td width='15%' style='width:15.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>

        <p class=MsoNormal align=right style='text-align:right'><b><u><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>Credits</span></u></b><b><span
        style='font-size:9.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></b></p>
        </td>
        <td width='20%' style='width:20.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><b><u><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>Balance</span></u></b><b><span
        style='font-size:9.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></b></p>
        </td>
        <td width='20%' style='width:20.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><b><u><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>Due</span></u></b><b><span
        style='font-size:9.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></b></p>

        </td>
       </tr>
       <tr style='mso-yfti-irow:1'>
        <td width='30%' style='width:30.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>Total AFP Obligation
        ...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.00</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='15%' style='width:15.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>$overallAFD</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>

        </td>
        <td width='15%' style='width:15.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>0.00</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='20%' style='width:20.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>$overallAFD</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='20%' style='width:20.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>

        <p class=MsoNormal align=right style='text-align:right'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>$overallAFD</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
       </tr>
       <tr style='mso-yfti-irow:2;mso-yfti-lastrow:yes'>
        <td width='30%' style='width:30.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>Monthly Manna Statement
        ...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;0.00</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>

        <td width='15%' style='width:15.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>0.00</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='15%' style='width:15.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>$savings</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='20%' style='width:20.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>($savings)</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>

        </td>
        <td width='20%' style='width:20.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>($savings)</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
       </tr>
      </table>
      <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
      mso-fareast-font-family:'Times New Roman';display:none;mso-hide:all'><o:p>&nbsp;</o:p></span></p>
      <table class=MsoNormalTable border=1 cellspacing=0 cellpadding=0
       width='100%' style='width:100.0%;mso-cellspacing:0in;mso-yfti-tbllook:
       1184;mso-padding-alt:2.25pt 2.25pt 2.25pt 2.25pt' rules=cols>

       <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes;mso-yfti-lastrow:yes'>
        <td width='30%' style='width:30.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><b><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>Totals:&nbsp;&nbsp;0.00</span></b><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='15%' style='width:15.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><b><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>$overallAFD</span></b><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>

        <td width='15%' style='width:15.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><b><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>$savings</span></b><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='20%' style='width:20.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><b><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>$currentAFD</span></b><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
        <td width='20%' style='width:20.0%;padding:2.25pt 2.25pt 2.25pt 2.25pt'>
        <p class=MsoNormal align=right style='text-align:right'><b><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>$currentAFD</span></b><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>

        </td>
       </tr>
      </table>
      <p class=MsoNormal><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
      mso-fareast-font-family:'Times New Roman''><o:p>&nbsp;</o:p></span></p>
      <table class=MsoNormalTable border=0 cellspacing=0 cellpadding=0
       width='100%' style='width:100.0%;mso-cellspacing:0in;mso-yfti-tbllook:
       1184;mso-padding-alt:3.0pt 3.0pt 3.0pt 3.0pt'>
       <tr style='mso-yfti-irow:0;mso-yfti-firstrow:yes'>
        <td style='padding:3.0pt 3.0pt 3.0pt 3.0pt'>
        <p class=MsoNormal align=center style='text-align:center'><b><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>Remaining AFP Balance:
        ... ... $currentAFD</span></b><span style='font-size:7.5pt;font-family:'Arial','sans-serif';
        mso-fareast-font-family:'Times New Roman''><o:p></o:p></span></p>

        </td>
       </tr>
       <tr style='mso-yfti-irow:1'>
        <td style='padding:3.0pt 3.0pt 3.0pt 3.0pt'>
        <p class=MsoNormal align=center style='text-align:center'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>******************************<wbr>******************************<wbr>*******************</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
       </tr>

       <tr style='mso-yfti-irow:2'>
        <td style='padding:3.0pt 3.0pt 3.0pt 3.0pt'>
        <p class=MsoNormal align=center style='text-align:center'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>THIS IS A STATEMENT OF
        YOUR AFP BALANCE &amp; MANNA EARNINGS</span><span style='font-size:
        7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:'Times New Roman''><o:p></o:p></span></p>
        </td>
       </tr>
       <tr style='mso-yfti-irow:3'>
        <td style='padding:3.0pt 3.0pt 3.0pt 3.0pt'>

        <p class=MsoNormal align=center style='text-align:center'><span
        style='font-size:10.0pt;font-family:'Verdana','sans-serif';mso-fareast-font-family:
        'Times New Roman';mso-bidi-font-family:Arial'>****** THIS IS NOT A BILL
        ****** PLEASE DO NOT SEND ANY PAYMENT ******</span><span
        style='font-size:7.5pt;font-family:'Arial','sans-serif';mso-fareast-font-family:
        'Times New Roman''><o:p></o:p></span></p>
        </td>
       </tr>
       
    </table>
    <p><span style='font-size:10.0pt;font-family:'Arial','sans-serif''>&nbsp;<o:p></o:p></span></p>
    </div>
    </td>

   </tr>
  </table>
  </td>
 </tr>
</table>";


?>

<!--</div> <!-- Page info goes above-->

<?php
//include('footer.php');
?>
<!--</body>
</html> -->