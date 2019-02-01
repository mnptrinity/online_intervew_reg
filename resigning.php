<?php
include "connect.php";
   //connection start//
require 'Mail/master/PHPMailerAutoload.php';
header('content-type: image/jpeg');
//

$g=0;
  $item=count($_POST['check']);
  if($item>0)
  {
    for($i=0; $i<$item; $i++)
     {
            $row=("select * from reg where id='".$_POST["check"][$i]."';");

            $result = $con->query($row);

              $rowclear=("update clearence set clear='1' where id='".$_POST["check"][$i]."';");

            $resultclear = $con->query($rowclear);


          //  echo'alert("Mail have been Successfully sen to the Candidates ....!");';
            $em_ver=("update reg set working='0' where id='".$_POST["check"][$i]."';");
            $em_result = $con->query($em_ver);
            if ($result->num_rows > 0) 
            {
                    while($h = $result->fetch_assoc()) 
                    {

                        $a=$h['Email'];
                        $id=$h['id'];
                        $g=1;
                    }
                        $mailto=$a;
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
                        //$mail ->Subject = $mailSub;
                        $mail->addAttachment('certis/'.$id.'.jpg', 'Certificate.jpg');
                        $mail->Body="collect your certificate";
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
            // unset($mail);

            }
            

   
    }
elseif($g==1)
{
  echo '<script>alert("Mail have been Successfully sent");</script>';
         $_SESSION['msg']=" Employee Is Present..!";
         header("location: clearence.php");
         exit();
}

else
{
             echo '<script>';
              echo'alert("No Employee is been Selected....!");';
              echo'window.location.href="home.php";';
              echo'</script>';
}
         echo '<script>alert("Mail have been Successfully sent");</script>';
         header("location: clearence.php");


?>


   

