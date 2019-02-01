<?php

include 'connect.php';
$a="";
$query=('select admin from staff where active="2" and permission="2018-12-27";');
$request=mysqli_query($con,$query);
while($row=mysqli_fetch_assoc($request))
{
	if($a=="")
	{
	 $a=$row['admin'];
    }
else
	{
	 $a.=",".$row['admin'];
	}
}
echo $a;

$query2=('select id,"'.$a.'" from reg where fixed="2018-12-27" ;');
$request2=mysqli_query($con,$query2);
if($request2)
{

}
else
{
	echo "query execution error...";
}
while($row2=mysqli_fetch_assoc($request2))
{
	echo $row2['id'];
}

?>