<?php
{
    $host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "internworld";
}

 
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$brithday = $_POST['brithday'];
$phonenumber = $_POST['phonenumber'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$Collegename = $_POST['Collegename'];
$course = $_POST['course'];
$subject1 = $_POST['subject1'];
$sname = $_POST['sname'];
$City = $_POST['City'];
$state = $_POST['state'];
$Pin = $_POST['Pin'];
$Country = $_POST['Country'];
$uname = $_POST['uname'];
$upswd1 = $_POST['upswd1'];
$upswd2 = $_POST['upswd2'];

//DATABASE CONNECTION

if($conn->connect_error)
{
echo "$conn->connect_error";
die("connection Failed : ".$conn->connect_error);
} 
else{
    $stmt = $conn->prepare("INSERT INTO register(fname,lname,brithday,phonenumber,gender,email,Collegename,course,subject1,sname,City,state,Pin,Country,uname,upswd1,upswd2) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssssssssssssss",$fname,$lname,$brithday,$phonenumber,$gender,$email,$Collegename,$course,$subject1,$sname,$City,$state,$Pin,$Country,$uname,$upswd1,$upswd2);
    $execval = $stmt->execute();
    echo $execval;
    header("Location: succ1.html");
    $stmt->close();
    $conn->close();
}

?>

