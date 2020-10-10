<?php
$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['pass'];

if(!empty($username) || !empty($email) || !empty($pass))
{
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mydb";
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if(mysqli_connect_error())
    {
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());
    }
    else
    {
        $SELECT = "SELECT email FROM register WHERE email = ? Limit 1";
        $INSERT = "INSERT INTO register(username, email, pass) values(?, ?, ?)";
        $stmt = $conn->prepare($SELECT);
        $stmt->bind_param("s",$email);
        $stmt->execute();
        $stmt->bind_result($email);
        $stmt->store_result();
        
        $rnum = $stmt->num_rows;
        if($rnum == 0)
        {
            $stmt->close();
            $stmt = $conn->prepare($INSERT);
            $stmt->bind_param("sss",$username, $email, $pass);
            $stmt->execute();
            echo "Congrats !!! Succesfully Registered";
        }
        else
        {
            echo "Someone Already Registered Using This Email-Id";
        }
        $stmt->close();
        $conn->close();
    }
}
else
{
    echo "All Fields Are Required";
    die();
}
?>