<html>
<head>
<title>
Employees | Clearence Certificate
</title>
</head>
<body>

<?php
include 'connect.php';
//for display_errorsplaying hte error_reporting in the log ....
$id=$_SESSION['cert'];
error_reporting(E_ALL);
ini_set('display_errors',TRUE);
$sname="";
$father="";
$sdept="";
$myfile="";
$designation="";
$join="";
$myspaces="";
$de="";
$emp="";
$leaving="";
$depart="";
$behav="Good";
$train="Training Period Has Been Completed...";
//Database Connection
$result = mysqli_query($con,"SELECT * FROM reg where id= '$id';");
while($row = mysqli_fetch_array($result))
	{
	    $sname= $row['CandName'];
	    $join=$row['joined'];
        $father= $row['Fathername'];
        $worklength = strlen($swork);
        $designation=$row['designation'];
	    $sdept= $row['Email'];
	    $de=$row['de'];
	    $leaving=$row['leaving'];
	    $depart=$row['department'];
	    $emp=$row['empid'];
	   $myfile='certis/'.$row['id'].'.jpg';
	generate($sname,$father,$sdept,$designation,$de,$emp,$leaving,$depart,$behav,$train,$join,$myfile,$worklength);

//updating hte table ...
 $update=mysqli_query($con,"update clearence set offset='1' where id='".$row['id']."'");
	}
	
	 

function generate($sname,$father,$sdept,$designation,$de,$emp,$leaving,$depart,$behav,$train,$join,$myfile,$worklength){
	$im = imagecreatefrompng("certificate.png");
// if there's an error, stop processing the page:
if(!$im)
{
 die("");
}

if ($worklength != 0)
{
$mysymbol = " - ";
}

if ($worklength == 0)
{
$myspaces = "    ";
}
else {
	$myspaces="";
}

//Name
// define some colours to use with the image
$black = imagecolorallocate($im, 0, 43, 59);
$red = imagecolorallocate($im, 255, 0, 0);

// get the width and the height of the image
$width = imagesx($im);
$height = imagesy($im);
$color = ImageColorAllocate($im,108,207,246);
// draw a black rectangle across the bottom, say, 20 pixels of the image:
//imagefilledrectangle($im, 170, 251, 464, 272, $color);
// Replace path by your own font path
// now we want to write in the centre of the rectangle:
$font = 'fonts|certi/mohan.ttf'; // store the int ID of the system font we're using in $font
$text = $father; // store the text we're going to write in $text
// calculate the left position of the text:
//$leftTextPos = ( $width - imagefontwidth($font)*strlen($text) )/2;
// finally, write the string:
imagettftext($im, 70, 0, 1206, 980, $black, $font, $sname);


//Sr. N.s
$black = imagecolorallocate($im, 0, 0, 0);
$red = imagecolorallocate($im, 255, 0, 0);
imagettftext($im, 60, 0,1206, 1158, $black, $font, $text);

// get the width and the height of the image

// draw a black rectangle across the bottom, say, 20 pixels of the image:
//imagefilledrectangle($im, 170, 251, 464, 272, $color);
// Replace path by your own font path
// now we want to write in the centre of the rectangle:
$font = 'fonts|certi/mohan.ttf'; // store the int ID of the system font we're using in $font
// calculate the left position of the text:
//$leftTextPos = ( $width - imagefontwidth($font) * strlen($text) )/2;
// finally, write the string:
$text=$designation;
imagettftext($im, 60, 0, 1206, 1328, $black, $font, $de);
imagettftext($im, 60, 0, 1206, 1503, $black, $font, $emp,);
imagettftext($im, 60, 0, 1206, 1672, $black, $font, $designation);
imagettftext($im, 60, 0, 1206, 1846, $black, $font, $join);
imagettftext($im, 60, 0, 1206, 2011, $black, $font, $leaving);
imagettftext($im, 60, 0, 1206, 2178, $black, $font, $depart);
imagettftext($im, 60, 0, 1206, 2431, $black, $font, $sname);
imagettftext($im, 50, 0, 1206, 2609, $black, $font, $train);
imagettftext($im, 60, 0, 1206, 2771, $black, $font, $behav);






// output the image as a png

imagepng($im, $myfile);
// tidy up
//imagepng($im);
/*echo "<table border=0 align=center>";
echo "<tr><td>";
echo "<img src=$myfile>";
echo "<td>";

echo "</table>";*/

imagedestroy($im);
}
//header("Locaton : ../certification/display.html",true,301);
echo '<script>window.location.href="contact.php";</script>';
//	exit();
?>

</body>