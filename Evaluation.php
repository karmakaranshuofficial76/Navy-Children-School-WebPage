<!DOCTYPE html>
<html>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Top_Navigation.css">
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="_image.scss">
    <link rel="icon" href="/IMAGES/favicon.png" type="image">
    <style>
        f
        {
            font-family: 'Muli';
            font-weight: 100;
            font-size: 12px;
        }
        f1
        {
            font-family: 'Muli';
            font-weight: 500;
            font-size: 22px;
        }
        f2
        {
            font-family: 'Muli';
            font-weight: 500;
            font-size: 17px;
        }
        a
        {
            color: crimson;
            text-decoration: none;
        }
        a:active
        {
            color: crimson;
            text-decoration: none;
        }
        a:default
        {
            color: crimson;
            text-decoration: none;
        }
        a:hover
        {
            color: crimson;
            text-decoration: none;
        }
        .navbar
        {
            overflow: hidden;
            background-color: skyblue;
            position: fixed;
            top: 0;
            width: 100%;
        }
        .main
        {
            padding: 16px;
            margin-top: 30px;
            height: 1500px; /* Used in this example to enable scrolling */
        }
        .inner
        {
            padding: 20px;
            min-height: 140px;
            height: 100%;
            margin-bottom: 30px;
            background: #fff;
        }
        .imga
        {
            vertical-align: middle;
            border-style: none;
            width: 55px;
        }
        .img-fluid 
        {
            max-width: 100%;
            height: auto;
        }
        * 
        {
            box-sizing: border-box;
        }
        .column
        {
            float: left;
            width: 25%;
            padding: 5px;
            padding-left: 50px;
        }
        .row::after
        {
            content: "";
            clear: both;
            display: table;
        }
        text
        {
            padding-left: 50px;
        }
   </style>
    <title>NCS | Evaluation</title>
    <body>
        <div class="navbar">
            <div class="btn-group btn-group-justified">
                <a href="Webmail.php" class="btn btn-primary"><span><c><f>Webmail</f></c></span></a>
                <a href="login.php" class="btn btn-primary"><span><c><f>My-School</f></c></span></a>
                <a href="Media.php" class="btn btn-primary"><span><c><f>Media</f></c></span></a>
                <a href="Contact.php" class="btn btn-primary"><span><c><f>Contact</f></c></span></a>
                <a href="Guide.php" class="btn btn-primary"><span><c><f>Guide</f></c></span></a>
            </div>
            <img src="/IMAGES/category-1.png" align="left">
            <img src="/IMAGES/naac-logo.png" align="left">
            <img src="/IMAGES/aicte.png" align="right">
            <img src="/IMAGES/excellence.png" align="right">
            <img src="/IMAGES/logomain.png" class="center-block">
            <div class="btn-group btn-group-justified">
                <a href="main.php" class="btn btn-primary"><span><c1><f1>Home</f1></c1></span></a>
                <a href="About.php" class="btn btn-primary"><span><c1><f1>About</f1></c1></span></a>
                <a href="Academics.php" class="btn btn-primary"><span><c1><f1>Academics</f1></c1></span></a>
                <a href="Admissions.php" class="btn btn-primary"><span><c1><f1>Admissions</f1></c1></span></a>
                <a href="Evaluation.php" class="btn btn-primary"><span><c1><f1>Evaluation</f1></c1></span></a>
            </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="main">
            <f1><text>Students can approach the respective sections as mentioned below for all their queries and requirements.</text></f1>
            <div class="row">
                <div class="column">
                    <a href="Evaluation_Norms.php">
                        <div class="inner">
                            <img class="imga img-fluid" src="/IMAGES/norms.svg" hspace="40">
                            <h4><f2>Evaluation Norms</f2></h4>
                        </div> 
                    </a>
                </div>
                <div class="column">
                    <a href="Examination_Notifications.php">
                        <div class="inner">
                            <img class="imga img-fluid" src="/IMAGES/notifications-bell-button.svg" hspace="45">
                            <h4><f2>Exam. Notifications</f2></h4>
                        </div>
                    </a>
                </div>
                <div class="column">
                    <a href="Examination_Timetable.php">
                        <div class="inner">
                            <img class="imga img-fluid" src="/IMAGES/timetable.svg" hspace="40">
                            <h4><f2>Exam. Time Table</f2></h4>
                        </div>
                    </a>
                </div>
                <div class="column">
                    <a href="Hall_Tickets.php">
                        <div class="inner">
                            <img class="imga img-fluid" src="/IMAGES/hall-ticket.svg" hspace="15">
                            <h4><f2>Hall Tickets</f2></h4>
                        </div>
                    </a>
                </div>
            </div>
                <div class="row">
                <div class="column">
                    <a href="Results.php">
                        <div class="inner">
                            <img class="imga img-fluid" src="/IMAGES/checked-files.svg" hspace="5">
                            <h4><f2>Results</f2></h4>
                        </div>
                    </a>
                </div>
                    <div class="column">
                    <a href="Conversion.php">
                        <div class="inner">
                            <img class="imga img-fluid" src="/IMAGES/certificate.svg" hspace="60">
                            <h4><f2>Conversion Certificate</f2></h4>
                        </div>
                    </a>
                    </div>
                </div>
        </div>
    </body>
</html>