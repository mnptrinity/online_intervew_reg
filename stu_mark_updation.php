<?php
include 'connect.php';
$hai=$_SESSION['mark1'];
$name=$_SESSION['name'];

//echo $hai;
$mark=explode(',',$hai);

if($_SESSION['nam']!=0)
{
    $itemCount = count($_POST["mark"]);
    if($itemCount>0)
    {
    

		$itemValues=0;
		
		$queryValue = "";
$a="";
		for($i=0;$i<$itemCount;$i++) {
			if(!empty($_POST["mark"][$i])) {
				$itemValues++;
				if($queryValue!="") {
					$queryValue .= ",";
				}
                $a=$_POST["mark"][$i];
                    $b=$mark[$i];
                   $query=mysqli_query($con,"update reg set $name='$a' where id='$b';");
			}
		}
        
         echo '<script>';
             echo'alert("Marks have been Updated....! ");';
             echo'window.location.href="pannel.php";';
              echo'</script>';
}
    else
                {
                    echo '<script>';
                              echo'alert("No Candidates Have been present....!");';
                          echo'window.location.href="pannel.php";';
                          echo'</script>';
                }
}
else
{
   echo '<script>';
           echo'alert("No Candidates Have been updated....!");';
        echo'window.location.href="pannel.php";';
         echo'</script>';
}

?>