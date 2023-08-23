<?php
// Establish the database connection
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "internworld";

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Retrieve the email and new password entered by the user
    $email = $_POST["email"];
    $upswd2 = $_POST["new_password"];

    $sql = "UPDATE stregister SET upswd2 = '$upswd2' WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result !== false && $conn->affected_rows === 1) {
            // Password updated successfully
            echo "Your password has been reset." . $upswd2;
            header("refresh:1,url=http://localhost/internworld/stlogin.html");
        } elseif ($result === false) {
            echo "Database Error: " . $conn->error;
        }
    } else {
        // Password does not meet the requirements
        echo "Password must contain at least one uppercase character, one lowercase character, one number, one special character, and be at least 8 characters long.";
    }
?>