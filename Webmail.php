<!DOCTYPE html>
<html>
    <title> Welcome To Navy Children School Mail </title>
    <link rel="icon" href="C:/Users/Sony/Desktop/NCS/IMAGES/favicon.png" type="image">
    <link href='https://fonts.googleapis.com/css?family=Muli' rel='stylesheet'>
    <link rel="icon" href="/IMAGES/favicon.png" type="image">
    <style>
        fa
        {
            font-family: 'Muli';
            font-weight: 300;
            font-size: 30px;
        }
        #loading
        {
            background: url('spin.gif') no-repeat top center;
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: 9999999;
        }
    </style>
    <script type="text/javascript">
        function WebmailValidator()
        {
            window.open("https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin");
        }
        //alert("You Will Be Redirected To A New Page Within 5 Seconds.");
        setTimeout('WebmailValidator()', 5000);
        function hideLoader()
        {
            $('#loading').hide();
        }
        $(window).ready(hideLoader);
        setTimeout(hideLoader, 5000);
    </script>
    <body>
        <div id="loading">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <p style="text-align: center;"><fa>Please Wait While We Redirect You To A Different Web Page</fa></p>
            <p style="text-align: center;"><fa>Or</fa></p>
            <p style="text-align: center;"><a href="https://accounts.google.com/signin/v2/identifier?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1&flowName=GlifWebSignIn&flowEntry=ServiceLogin"><f>Click Here To Go To The Page</fa></a></p>
        </div>
    </body>
</html>