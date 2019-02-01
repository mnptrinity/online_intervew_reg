<?php

$mes='';
if(isset($_GET['submit'])) {
    include 'connect.php';

    $name=$_GET['name'];
    $pass=$_GET['pass'];




    

    $sql="SELECT `active` FROM `staff` WHERE `admin`='$name' AND `pass`='$pass'";
    $res=mysqli_query($con,$sql);
    if($row=mysqli_fetch_array($res)) {
        $_SESSION['active'] = $row['active'];
        $_SESSION['name'] = $name;
        $_SESSION['id']=$row['id'];
        header('Location: home.php');
    }else{
        $mes="Loin Failed !";
    }
}
?>
<!--  -->
<script type="text/javascript">
  function myFunction()
  {
    var x=document.getElementById("myInput");
    if(x.type==="password")
    {
      x.type='text';
    }
    else
    {
      x.type="password";
    }
  }

</script>



<div class="login-page">
  <center>
      <img style="margin-bottom:15px" src="http://www.drmti.in/wp-content/uploads/2015/11/sakthi-group.jpg" alt="MCET Logo">
  </center>
  <div class="form">
    
    <form class="login-form" action="" >
      <input id="input" type="text"  name="name" placeholder="Adminid" required autocomplete="OFF"/>
      <input type="password" placeholder="Admin Password" required name="pass" id="myInput"/>
      
      <input id="input" type="submit" name="submit" value="submit"/>
      <input type="checkbox" onclick="myFunction();" ><span>Show Password</span>
      <div class="msg"><?php echo $mes?></div>
    </form>
  </div>
</div>

<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
  position: relative;
  z-index: 1;
  background: #FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
}
#input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
#myInput {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #fe5802;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
  margin: 15px 0 0;
  color: #b3b3b3;
  font-size: 12px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
 /* for error message */
.msg
{
  color:red;
}
</style>