<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$conn = mysqli_connect('localhost','root','','netflix') or die('connection failed');

if(isset($_POST['Submit'])){

   $filter_email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
   $email = mysqli_real_escape_string($conn, $filter_email);
   $filter_pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
   $password = mysqli_real_escape_string($conn, md5($filter_pass));
   $filter_cpass = filter_var($_POST['cpassword'], FILTER_SANITIZE_STRING);
   $cpassword = mysqli_real_escape_string($conn, md5($filter_cpass));
   $select_users = mysqli_query($conn, "SELECT * FROM `register` WHERE email = '$email'") or die('query failed');

   if(mysqli_num_rows($select_users) > 0){
      $message[] = 'user already exist!';
   }else{
      if($password != $cpassword){
         $message[] = 'confirm password not matched!';
      }else{
         mysqli_query($conn, "INSERT INTO `register`(email, password) VALUES('$email', '$password')");
         $message[] = 'registered successfully!';
         header('location:newlogin.php');
      }
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="icon" href="C:\FWD\intern\netflix\images\favicon (3).ico">
    <style>
        body{
            background-image: url('nr.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
        /*.top{
            background-color: rgba(255, 255, 255, .5);
            position: absolute;
            left: 0px;
            top: 0px;
            height: 700px;
            width: 1400px;
        }*/
        .login{
            background-color: rgba(255, 255, 255, .5);
            position: absolute;
            height: 250px;
            width: 500px;
            left: 380px;
            top: 50px;
            text-align: center;
        }
        * {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
}
.formm {
	width: 100%;
	margin-bottom: 40px;
}
.formm .info {
	padding: 5px 0;
}
.formm .info .email {
	margin-bottom: 30px;
	width: 100%;
	height: 50px;
	border-radius: 5px;
	border: none;
	padding: 10px;
	font-size: inherit;
}
.btn-primary {
	width: 100%;
	height: 50px;
	border-radius: 5px;
	background: red;
	color: #fff;
	font-size: inherit;
	font-weight: bold;
	border: none;
	cursor: pointer;
	outline: none;
	box-shadow: 0 1px 0 rgba(0, 0, 0, 0.45);
}
.logo {
	position: relative;
	z-index: 2;
	height: 90px;
}

.logo img {
	width: 170px;
	position: absolute;
	top: 20px;
	left: 40px;
}
.showcase {
	width: 100%;
	height: 110vh;
	position: relative;
	background: url('https://i.ibb.co/vXqDmnh/background.jpg') no-repeat center center/cover;
}

.showcase::after {
	content: '';
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	z-index: 1;
	background: rgba(0, 0, 0, 0.65);
	box-shadow: inset 30px 10px 150px #000000;
}
.showcase-content {
	position: relative;
	z-index: 2;
	width: 450px;
	height: 500px;
	background: rgb(0, 0, 0, 0.45);
	margin: 0 auto;
	display: flex;
	flex-direction: column;
	justify-content: flex-start;
	align-items: flex-start;
	text-align: left;
	padding: 60px 65px;
}
.signup {
	width: 100%;
	display: flex;
	align-items: center;
	justify-content: flex-start;
}

.signup p {
	margin-right: 5px;
}
.ra{
            color: white;
            text-align: center;
            padding-bottom: 20px;
        }
        .rr{
            color: white;
        }
        
    </style>
</head>
<body>


<header class="showcase">
  <div class="logo">
                <img src="images/logo.png">
            </div>
    <div class="showcase-content">
        <div class="formm">
            <form action="" method="POST">
            <h1 class="ra">Register</h1>
                <div class="info">
                <input class="email" type="email" name="email" placeholder="email" required><br><br>
                <input  class="email" type="password" name="password" placeholder="password" required><br><br>
                <input class="email" type="password" name="cpassword" placeholder=" confirm password" required><br><br>
                <div class="btn">
             <input  class="btn-primary" type="submit" class="btn" name="Submit">
                <div class="signup">
                    <p class="rr">already have an account?</p>
                    <a href="http://localhost/netflix/newlogin.php">Sign in</a>
                </div>
            </form>
            </div>
            </div>
         </div>
    </div>
    </header>
</body>
</html>