<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
$cname = $_POST['cname'];
$Titel = $_POST['Titel'];
$Jobdescription = $_POST['Jobdescription'];
$Requirements = $_POST['Requirements'];
$Duration = $_POST['Duration'];
$sdate = $_POST['sdate'];
$Deadline = $_POST['Deadline'];
$Stipend = $_POST['Stipend'];
$Requiredskills = $_POST['Requiredskills'];
$Application = $_POST['Application'];
$email = $_POST['email'];
$number = $_POST['number'];
$adders = $_POST['adders'];

if (empty($errors)){
    {
        $host = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "internworld";
        }
        
         
        $conn = mysqli_connect ($host, $dbusername, $dbpassword, $dbname);

//DATABASE CONNECTION

if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
} 
$sql = "INSERT INTO intern (cname,Titel,Jobdescription,Requirements,Duration,sdate,Deadline,Stipend,Requiredskills,Application,email,number,adders) values(?,?,?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);
if (!$stmt) {
    die('Prepare Error: ' . $conn->error);
}
    $stmt->bind_param("sssssssssssss",$cname,$Titel,$Jobdescription,$Requirements,$Duration,$sdate,$Deadline,$Stipend,$Requiredskills,$Application,$email,$number,$adders);
    if ($stmt->execute()) {
        header("Location:succ.html");
        exit();
    }else {
        echo "Error: " .$stmt->error;
    }
    $stmt->close();
    $conn->close();
}
}
?>

