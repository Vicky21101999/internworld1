<html>
    <head>
<style>
    h1{
      text-align: center;
      color: white;
      background-color: rgba(63, 136, 130, 0.955);
      height: 90px;
      padding-top: 45px;
      }
    h3{
        text-align: center;
        color: rgba(63, 136, 130, 0.955);
        font-size: 26px;
    }
    .dbresult,.dbresult td,.dbresult th{
        border: 1px solid rgba(63, 136, 130, 0.955);
        border-collapse: collapse;
        padding: 8px;
    }
    .dbresult{
        width: 700px;
        margin: auto;
    }
    .dbresult th{
        background-color:rgba(63, 136, 130, 0.955);
        color: white;
    }
    .btn{
        background: rgba(63, 136, 130, 0.955);
        color: white;
        font-size: 1.2em;
        padding: 5px 30px;
        text-decoration: none;
    }
    .btn:hover{
        background: darkred;
        color:white;
    }
</style>
    </head>
    <body>
<!DOCTYPE html>
<html>
<head>
    <!-- Your head content here -->
</head>
<body>
    <form action="" method="POST">
        <h1>Welcome to internworld</h1><br>
        <h3>Registered Details</h3><br>
    </form>

    <?php
    $link = mysqli_connect('localhost','root','','internworld');

    if (!$link) {
        die('Connection error' . mysqli_connect_error());
    }
    
    $query = "SELECT * FROM app";
    
    $result = mysqli_query($link, $query);
    $numrow = mysqli_num_rows($result);

    if ($numrow > 0) {
        echo '<table class="dbresult">';
        // Rest of your table header and data display code
    } else {
        echo 'Record not found';
    }

    $files = scandir("uploads");
for ($a = 2; $a < count($files); $a++){
}
    
    
if($numrow>0) {
      echo '<table class="dbresult">';
      echo '<tr>';
      echo '<th>name</th>';
      echo '<th>email</th>';
      echo '<th>phonenumber</th>';
      echo '<th>resume</th>';
      echo '<th>Download</th>';
      echo '<th>status</th>';
      echo '<th>submit</th>';
      echo '</tr>';


  
   while( $row= mysqli_fetch_assoc($result) ){
    echo '<tr>';
   echo '<td>' . $row['name'] . '</td>';
   echo '<td>' . $row['email'] . '</td>';
   echo '<td>' . $row['phonenumber'] . '</td>';
   echo '<td>' . $row['resume'] . '</td>';
   echo '<td> <a  href="opn.php">Download</a>' ;
   echo '<td> 
   <select name="status">
        <option value="">--select--</option>
        <option value="selected">selected</option>
        <option value="On Hold">On Hold</option>
        <option value="Rejected">Rejected</option>
   </td>';
   echo '<td> <input type="submit" id="submitbtn" value="submit" required></td>' ;
   echo '</tr>';
   }
   echo '</table>';
}
   else {
    echo 'record not found';
   }

?>
    </body>
</html>