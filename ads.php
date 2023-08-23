<html>
    <head>
<style>
    h1{
      text-align: center;
      color: white;
      background-color: rgb(9, 9, 88);
      height: 90px;
      padding-top: 45px;
      }
    h3{
        text-align: center;
        color: rgb(9, 9, 88);
        font-size: 26px;
    }
    .dbresult,.dbresult td,.dbresult th{
        border: 1px solid blue;
        border-collapse: collapse;
        padding: 8px;
    }
    .dbresult{
        width: 700px;
        margin: auto;
    }
    .dbresult th{
        background-color: rgb(9, 9, 88);
        color: white;
    }
    .btn{
        background: gray;
        color: darkred;
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
    <?php
$conn = mysqli_connect('localhost', 'root', '', 'internworld');

if (!$conn) {
    die('Connection error' . mysqli_connect_error());
}

$query = "SELECT * FROM register";
if (isset($_POST["search"])) {
    $search = mysqli_real_escape_string($conn, $_POST["search"]);
    $query .= " WHERE fname LIKE '%" . $search . "%'
                OR lname LIKE '%" . $search . "%'
                OR brithday LIKE '%" . $search . "%'
                OR phonenumber LIKE '%" . $search . "%'
                OR gender LIKE '%" . $search . "%'
                OR email LIKE '%" . $search . "%'
                OR course LIKE '%" . $search . "%'
                OR subject1 LIKE '%" . $search . "%'
                OR adderss LIKE '%" . $search . "%'
                OR uname LIKE '%" . $search . "%'
                OR upswd1 LIKE '%" . $search . "%'
                OR upswd2 LIKE '%" . $search . "%'
                OR adders LIKE '%" . $search . "%'";
}

$result = mysqli_query($conn, $query);
$numrow = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Your head content here -->
</head>
<body>
    <form action="" method="POST">
        <h1>Welcome to Admin</h1><br>
        <h3>Registered Details</h3><br>
        <input type="text" name="search" placeholder="Search">
        <button type="submit" name="save" class="btn1">Search</button>
    </form>

    <?php
    if ($numrow > 0) {
        echo '<table class="dbresult">';
        // Rest of your table header and data display code
    } else {
        echo 'Record not found';
    }
    
if($numrow>0) {
      echo '<table class="dbresult">';
      echo '<tr>';
      echo '<th>fname</th>';
      echo '<th>lname</th>';
      echo '<th>brithday</th>';
      echo '<th>phonenumber</th>';
      echo '<th>gender</th>';
      echo '<th>email</th>';
      echo '<th>course</th>';
      echo '<th>subject1</th>';
      echo '<th>adderss</th>';
      echo '<th>uname</th>';
      echo '<th>upswd1</th>';
      echo '<th>upswd2</th>';
      echo '<th>Delete</th>';
      echo '</tr>';


  
   while( $row= mysqli_fetch_assoc($result) ){
    echo '<tr>';
   echo '<td>' . $row['fname'] . '</td>';
   echo '<td>' . $row['lname'] . '</td>';
   echo '<td>' . $row['brithday'] . '</td>';
   echo '<td>' . $row['phonenumber'] . '</td>';
   echo '<td>' . $row['gender'] . '</td>';
   echo '<td>' . $row['email'] . '</td>';
   echo '<td>' . $row['course'] . '</td>';
   echo '<td>' . $row['subject1'] . '</td>';
   echo '<td>' . $row['adderss'] . '</td>';
   echo '<td>' . $row['uname'] . '</td>';
   echo '<td>' . $row['upswd1'] . '</td>';
   echo '<td>' . $row['upswd2'] . '</td>';
   echo '<td> <a href="" class="btn">Delete</a></td>';
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