<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
$cname = $_POST['cname'];
$sname = $_POST['sname'];
$City = $_POST['City'];
$state = $_POST['state'];
$Zip = $_POST['Zip'];
$Country = $_POST['Country'];
$Email = $_POST['Email'];
$Renumber = $_POST['Renumber'];
$Industry = $_POST['Industry'];
$name = $_POST['name'];
$password = $_POST['password'];
$password1 = $_POST['password1'];

if (empty($errors)){
    {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "internworld";
        }
        
         
        $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);

//DATABASE CONNECTION

if($conn->connect_error){
die("connection Failed : ".$conn->connect_error);
} 
$sql = "INSERT INTO recom (cname,sname,City,state,Zip,Country,Email,Renumber,Industry,name,password,password1) values(?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die('Prepare Error: ' . $conn->error);
}
    $stmt->bind_param("ssssssssssss",$cname,$sname,$City,$state,$Zip,$Country,$Email,$Renumber,$Industry,$name,$password,$password1);
    if ($stmt->execute()) {
        echo "your Registration is Succcessful...";
    }else {
        echo "Error: " .$stmt->error;
    }
    $stmt->close();
    $conn->close();
}
}
?>

