<?php
{
    $host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "internworld";
}

 
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
    
ini_set('display_errors', 1);
error_reporting(E_ALL);

if ($conn->connect_error) {
    die("connection failed:" .$conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM admin WHERE username = '$username' AND password ='$password'";

    $result = $conn->query($sql);

    if ($result !== false && $result->num_rows === 1) {
        header("Location:admin1.html");
        exit();
    }
    else{
        echo "Incorrect user name or password.";
    }
}

$conn->close();
?>
