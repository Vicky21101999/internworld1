<?php
{
    $host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "internworld";
}

 
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$name = $_POST['name'];
$email = $_POST['email'];
$phonenumber = $_POST['phonenumber'];
$resume = $_FILES['resume'];

//DATABASE CONNECTION

move_uploaded_file($resume["tmp_name"], "uploads/" . $resume["name"]);

header("Location: opn.php");

if($conn->connect_error)
{
echo "$conn->connect_error";
die("connection Failed : ".$conn->connect_error);
} 
else{
    $stmt = $conn->prepare("INSERT INTO app(name,email,phonenumber,resume) values(?,?,?,?)");
    $stmt->bind_param("ssss",$name,$email,$phonenumber,$resume);
    $execval = $stmt->execute();
    echo $execval;
    echo "your Registration is Succcessful...";
    $stmt->close();
    $conn->close();
}

?>