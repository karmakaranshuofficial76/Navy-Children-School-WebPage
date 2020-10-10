<!DOCTYPE html>
<html lang="en">
<head>
	<title>NCS Web Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="/NCS/IMAGES/favicon.png">
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="/IMAGES/favicon.png" type="image">
</head>
<body>
    <?php
    require('db.php');
    session_start();
    if (isset($_POST['username']))
    {
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con,$username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
        $result = mysqli_query($con,$query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if($rows==1)
        {
            $_SESSION['username'] = $username;
            header("Location: index.php");
        }
        else
        {
            echo "<div class='form'>
            <h3>Username/password is incorrect.</h3>
            <br/>
            Click here to <a href='login.php'>Login</a>
            </div>";
        }
    }
    else
    {
    ?>
	<div class="limiter">
		<div class="container-login100" style="background-image: url('IMAGES/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form class="login100-form validate-form" action="" method="post" name="login">
					<span class="login100-form-title p-b-49">
						Login
					</span>
                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						<span class="label-input100">Username</span>
						<input class="input100" type="text" placeholder="Type your username" name="username"/>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100" type="password" placeholder="Type your password" name="password"/>
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
<br>
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="submit">
                                Login
                            </button>
						</div>
					</div>
                </form>
                <div class="txt1 text-center p-t-54 p-b-20">
						<span>Or<br>
							<a href="registration.php" class="txt2">
							CLick Here To Register!!!
                            </a>
						</span>
					</div>
			</div>
		</div>
	</div>
    <div id="dropDownSelect1"></div>
	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>
    <?php } ?>
</body>
</html>