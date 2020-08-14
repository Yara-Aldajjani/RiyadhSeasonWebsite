<?php
session_start();

$servername ="localhost";
$username ="root";
$password ="";
$dbname ="Riyadh_Season";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['signin'])) // Check form submit or not
{
$username2=$_POST['u_username'];
$upassword=$_POST['u_password'];

$sql="SELECT username FROM Users WHERE u_password='$upassword'";
$result=mysqli_query($conn, $sql);
if (mysqli_num_rows($result)>0){
   if($row=mysqli_fetch_assoc($result)){

    $_SESSION['newSession']=$row['username'];
    
     header("Location: ../riyadh-season.php?signup=success");
     
    exit();
   }
  

} else {
    $message="incorrect username or password";
    echo "<script> alert('$message'); </script>";
}
}
mysqli_close($conn);
?>
<html>
<head> 
<style>
body{
    

    background-image: linear-gradient(rgba(0,0,0,0.6),rgba(0,0,0,0.6)),url("‏⁨riyadh.jpg");
    height: 100vh;
    background-size: cover;
    background-position: center;
}

.login-page{
    width: 360;
    padding: 10% 0 0;
    margin: auto;
}

.form{
   position: relative;
    z-index: 1;
    background: rgba(227,138,255,0.15);
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 45px;
    text-align: center;
}

.form input{
        font-family: "Roboto", sans-serif;
        outline: 1;
        background: rgba(255, 255, 255, 0.88);
        width: 100%;
        border: 0;
        margin: 0 0 15px;
        padding: 15px;
        box-sizing: border-box;
        font-size: 14px;

}


.form #s {
        font-family: "Roboto", sans-serif;
        text-transform: uppercase;
        outline: 0;
        background:#C219D1;
        width: 100%;
        border: 0;
        padding:  15px;
        color: #FFFFFF;
        font-size: 14px;
        cursor: pointer;

  
}
  .form #s {
  
  background-position: center;
  transition: background 0.8s;

}

.form #s:hover {
   background: #D499FF radial-gradient(circle, transparent 1%, #D499FF 1%) center/15000%;
}

.form #s:active {
   background-color: #C219D1;
  background-size:14px;
  transition: background 0s;
}






.form #s :hover,.form #s:active{
        background: #B809AF;
}

.form .message{
            margin: 15px 0 0;
            color: aliceblue; 
            font-size: 15px;  
}


.form .message a{
            color:#D499FF;
            text-decoration:none;
}


.form .register-form {
        display: none;
}

</style>
</head>
<body>
<div class="login-page">
<div class="form">
<form class="login-form" action="<?php $_SERVER['PHP_SELF']?>" method="post">
        <input type="text" name="u_username" placeholder="Username" class="box"/> 
        <input type="password" name="u_password"  class="box" placeholder="password"/> 
        <input type="submit" value="Submit" name="signin" id="s"/>

          
        <p class="message">Not Registered?<a href="signup-page.php"> Register</a></p>
     </form>
     </div>
     </div>
     </body>
</html>
