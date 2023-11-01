<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$conn = mysqli_connect('localhost','root','','netflix') or die('connection failed');
session_start();
if (isset($_POST['Submit'])) {
    $email =$_POST['email'];
    //$email = mysqli_real_escape_string($conn, $filter_email);
    //$filter_pass = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
    $password = md5($_POST['password']);
    $select_users = mysqli_query($conn, "SELECT password FROM register WHERE email = '$email'") or die('query failed');

    if (mysqli_num_rows($select_users) > 0) {
        if ($pas = mysqli_fetch_array($select_users)) {
            if ($password == $pas["password"]) {

                $row = mysqli_fetch_assoc($select_users);
                $_SESSION['user_id'] = $row['id'];
                $_SESSION['email'] = $row['email'];
                $_SESSION['password'] = $row['password'];
                header('location:index.php');
            } else {
                $message[] = 'wrong password';
            }
        }
     } else {
            $message[] = 'incorrect password or emails';
        }
    }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
    <link rel="icon" href="C:\FWD\intern\netflix\images\favicon (3).ico">
    <style>
        body{
            background-image: url('https://i.ibb.co/vXqDmnh/background.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            width: 100%;
	height: 100vh;
	position: relative;
    font-family: 'Arial', sans-serif;
	-webkit-font-smoothing: antialiased;

	color: #999;
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
            height: 450px;
            width: 500px;
            left: 380px;
            top: 50px;
            text-align: center;
        }
        .ra{
            color: white;
            text-align: center;
            padding-bottom: 20px;
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
	height: 100vh;
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
	height: 450px;
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
            <h1 class="ra">LOGIN</h1>
                <div class="info">
                <input class="email" type="email" name="email" placeholder="email" required><br><br>
                <input  class="email" type="password" name="password" placeholder="password" required><br><br>
                <div class="btn">
                <input  class="btn-primary" type="Submit" class="btn" name="Submit">
                <div class="signup">
                    <p>New to Netflix ?</p>
                    <a href="http://localhost/netflix/newregister.php">Sign up now</a>
                </div>
            </form>
            </div>
            </div>
         </div>
    </div>
    </header>
</body>
</html>