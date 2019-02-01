<?php
include 'connect.php';
error_reporting(0);
ini_set('display_errors', 0);
$hai=$_POST['date'];
$r=$_SESSION['verify'];
if($r==1)
{
$itemCount=count($_POST["check"]);
		$itemValues=0;
		if($itemCount>0)
        {
		$queryValue = "";
$a="";
		for($i=0;$i<$itemCount;$i++) {
			if(!empty($_POST["check"][$i])) {
				$itemValues++;
				if($queryValue!="") {
					$queryValue .= ",";
				}
                $a=$_POST["check"][$i];
                   $query=mysqli_query($con,"update staff set permission='$hai' where id='$a';");
               // $a=$_POST["mark"][$i].",".$a;
			}
		}
            echo '<script>';
            echo'alert("Pannel Members have been Selected....!");';
            echo'window.location.href="hr_pannel_select.php";';
            echo'</script>';
            
               // header("Location: hr_pannel_select.php");
        
        }
        else
            {
                          echo '<script>';
                          echo'alert("No Pannel Members are been Selected....!");';
                          echo'window.location.href="hr_pannel_select.php";';
                          echo'</script>';
            }
      }
else
{
              echo '<script>';
              echo'alert("No Pannel Members are been Selected....!");';
              echo'window.location.href="hr_pannel_select.php";';
              echo'</script>';
}
  

?>