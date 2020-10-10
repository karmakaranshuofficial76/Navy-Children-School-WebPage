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
            color: crimson;
        }
        f3
        {
            font-family: 'Muli';
            font-weight: 500;
            font-size: 17px;
            color: black;
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
        .inner
        {
            padding: 20px;
            min-height: 140px;
            height: 100%;
            margin-bottom: 30px;
            background: #fff;
        }
        .main
        {
            padding: 16px;
            margin-top: 30px;
            height: auto; /* Used in this example to enable scrolling */
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
        .slideshow-container
        {
            max-width: 1000px;
            position: relative;
            margin: auto;
            transition: none;
        }
        .text
        {
            color: crimson;
            font-size: 15px;
            font-family: 'Muli';
            font-weight: 500;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }
        .numbertext
        {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }
        .dot 
        {
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }
        .active
        {
            background-color: #717171;
        }
        .fade
        {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }
        @-webkit-keyframes fade
        {
            from {opacity: .4} 
            to {opacity: 1}
        }
        @keyframes fade
        {
            from {opacity: .4} 
            to {opacity: 1}
        }
        .mySlides {display: none;}
    </style>
    <title>NCS | Media</title>
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
        <div class="main">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <img src="/IMAGES/NCS1.jpg" class="center-block">
                </div>
                <div class="mySlides fade">
                    <img src="/IMAGES/NCS2.jpg" class="center-block">
                </div>
                <div class="mySlides fade">
                    <img src="/IMAGES/NCS3.jpg" class="center-block">
                </div>
                <div class="mySlides fade">
                    <img src="/IMAGES/NCS4.jpg" class="center-block">
                </div>
                <div class="mySlides fade">
                    <img src="/IMAGES/NCS5.jpg" class="center-block">
                </div>
                <div class="mySlides fade">
                    <img src="/IMAGES/NCS6.jpg" class="center-block">
                </div>
                <div class="mySlides fade">
                    <img src="/IMAGES/NCS7.jpg" class="center-block">
                </div>
                <div class="mySlides fade">
                    <img src="/IMAGES/NCS8.jpg" class="center-block">
                </div>
            </div>
            <br>
            <div style="text-align:center">
                <span class="dot"></span> 
                <span class="dot"></span> 
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        <script>
            var slideIndex = 0;
            showSlides();
            function showSlides() 
            {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                for (i = 0; i < slides.length; i++)
                {
                    slides[i].style.display = "none";  
                }
                slideIndex++;
                if (slideIndex > slides.length) {slideIndex = 1}    
                for (i = 0; i < dots.length; i++)
                {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex-1].style.display = "block";  
                dots[slideIndex-1].className += " active";
                setTimeout(showSlides, 4000); // Change image every 2 seconds
            }
        </script>
        </div>
    </body>
</html>