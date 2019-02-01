<?php
include 'connect.php';
error_reporting(0);
ini_set('display_errors', 0);
$name=$_SESSION['name'];
$r=$_SESSION['infinit'];
if($r==1)
{
$itemCount = count($_POST["check12"]);
$itemValues=0;
		if($itemCount>0)
        {
            $hello==1;
		$queryValue = "";
$a="";
		for($i=0;$i<$itemCount;$i++) {
			if(!empty($_POST["check12"][$i])) {
				$itemValues++;
				if($queryValue!="") {
					$queryValue .= ",";
				}
                $a=$_POST["check12"][$i];
                    
                   $query=mysqli_query($con,"update clearence set $name='1' where id='$a';");
               // $a=$_POST["mark"][$i].",".$a;
			}
		}
            echo '<script>';
             echo'alert("Clearence Members have been Selected....!");';
              echo'window.location.href="home.php";';
              echo'</script>';
             }
        else
            {
                          echo '<script>';
                          echo'alert("No Pannel Members are been Selected....!");';
                          echo'window.location.href="home.php";';
                          echo'</script>';
            }
        //echo "the mark list is....".$a;
  
        //$queryValue .= "('$a','$b','$c')";
		//$sql = $query.$queryValue;
        }
else  
      {
            echo '<script>';
                      echo'alert("No Pannel Members are been Selected....!");';
                      echo'window.location.href="home.php";';
                      echo'</script>';
        }
  

?>