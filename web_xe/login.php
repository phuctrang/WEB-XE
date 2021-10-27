<?php 

    header("Content-type: text/html; charset=utf-8");
    // $host="localhost";
    // $user="root";
    // $password="";
    // $db="xe";
    include "cauhinh.php";

    // mysql_connect($host,$user,$password);
    // mysql_select_db($db);

    if(isset($_POST['submit'])){
        
        $uname=$_POST['username'];
        $passwordd=$_POST['password'];
        
        $sql="select * from loginform where user='".$uname."'AND Pass ='".$passwordd."' limit 1";
        
        $result = mysqli_query($con,$sql);
        
        if(mysqli_num_rows($result)==1){
            
            //include('danhsach.php');
            
            //echo " You Have Successfully Logged in";
            header('Location: danhsach.php');
            exit();
        }
        else{
            echo "Sai mật khẩu!";
            exit();
        }
            
    }
  ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="stylelogin.css">
  </head>

  <body>
<div class="login-box">

  <h1>Login</h1>


  <form method="POST" action="#">

          
          <div class="textbox">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Enter your Username" name="username">
          </div>

          <div class="textbox">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Enter your Password" name="password">
          </div>

          <input type="submit" name="submit" class="btn" value="Sign in">
          
  </form>
  <br>
  <div ><i><a href="index.php" style="color: white;"> &larr;Quay lại</a></i></div>     
</div>
  </body>


</html>
