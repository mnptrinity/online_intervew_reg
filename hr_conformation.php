<?php
include 'connect.php';
require 'Mail/master/PHPMailerAutoload.php';
error_reporting(0);
ini_set('display_errors', 0);
$g=0;
  $item=count($_POST['check']);
  if($item>0)
  {
    for($i=0; $i<$item; $i++)
     {
            $row=("select * from reg where id='".$_POST["check"][$i]."';");
            $result = $con->query($row);
            $em_ver=("update reg set working='1'  where id='".$_POST["check"][$i]."';");
            $em_result = $con->query($em_ver);
            if ($result->num_rows > 0) 
            {
                    // output data of each row
                    while($h = $result->fetch_assoc()) 
                    {

                        $a=$h['Email'];
                    }
                        //connection ends...
                        $mailto = $a;
                        $mailSub = "Shakthi Job Offers";
                        $mailMsg = "Congratulations! You have been selected for the Job that you have been applied...You have to join the Company - [ Sakthi Auto Components ] within few days.";
                        $mail = new PHPMailer();
                        $mail ->IsSmtp();
                        $mail ->SMTPDebug = 0;
                        $mail ->SMTPAuth = true;
                        $mail ->SMTPSecure = 'ssl';
                        $mail ->Host = "smtp.gmail.com";
                        $mail ->Port = 465; // or 587
                        $mail ->IsHTML(true);
                        $mail ->Username = "mohan2034677@gmail.com";
                        $mail ->Password = "9976764848";
                        $mail ->SetFrom("mohan2034677@gmail.com");
                        $mail ->Subject = $mailSub;
                        $mail ->Body = $mailMsg;
                        $mail ->AddAddress($mailto);
                    
            }
   if(!$mail->Send())
   {
       echo "Mail Not Sent";
   }
   else
   {
    $g=$g+1;
   }
                
            }
      
      
      if($g==$item)
      {
         echo '<script>';
         echo'alert("Mail have been Successfully sen to the Candidates ....!");';
         echo'window.location.href="hr_selection.php";';
        echo'</script>';
      }
        
    }

else
{
    echo '<script>';
              echo'alert("No Candidates has been Selected....!");';
          echo'window.location.href="hr_selection.php";';
          echo'</script>';
}
  
?>



   

