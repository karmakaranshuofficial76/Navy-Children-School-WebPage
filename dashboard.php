<?php
require('db.php');
include("auth.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>NCS | Dashboard</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">	
	<link rel="icon" type="image/png" href="/IMAGES/favicon.png">
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
    <link rel="stylesheet" href="Top_Navigation.css">
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <style>
        f
        {
            font-family: 'Muli';
            font-weight: 100;
            font-size: 12px;
            color: royalblue;
        }
        f1
        {
            font-family: 'Muli';
            font-weight: 500;
            font-size: 22px;
            color: royalblue;
        }
        f2
        {
            font-family: 'Muli';
            font-weight: 500;
            font-size: 17px;
            color: crimson;
        }
        f3
        {
            font-family: 'Muli';
            font-weight: 500;
            font-size: 17px;
            color: crimson;
        }
        f4
        {
            font-family: 'Muli';
            font-weight: 1500;
            font-size: 24px;
            color: crimson;
            font-style: normal;
        }
        f5
        {
            font-family: 'Muli';
            font-weight: 1500;
            font-size: 24px;
            color: navy;
            font-style: normal;
        }
        a
        {
            color: floralwhite;
            text-decoration: none;
        }
    </style>
    </head>
    <body>
        <div class="limiter">
		<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
				<form name="registration" class="login100-form validate-form" action="" method="post">
					<span class="login100-form-title p-b-49">
						Welcome <?php echo $_SESSION['username']; ?>!
					</span>
                    <br>
					<div class="container-login100-form-btn">
							<f3>This is Your Dashboard.<br>Feel Safe With Us</f3>
					</div>
                    <div class="container-login100-form-btn">
							<a href="index.php"><f1>Home</f1></a>
					</div>
                    <div class="container-login100-form-btn">
							<a href="logout.php"><f1>Logout</f1></a>
					</div>
				</form>
			</div>
		</div>
	</div>
    </body>
</html>