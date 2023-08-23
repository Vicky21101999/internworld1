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

$query = "SELECT * FROM intern";
if (isset($_POST["search"])) {
    $search = mysqli_real_escape_string($conn, $_POST["search"]);
    $query .= " WHERE cname LIKE '%" . $search . "%'
                OR Titel LIKE '%" . $search . "%'
                OR Jobdescription LIKE '%" . $search . "%'
                OR Requirements LIKE '%" . $search . "%'
                OR Duration LIKE '%" . $search . "%'
                OR sdate LIKE '%" . $search . "%'
                OR Deadline LIKE '%" . $search . "%'
                OR Stipend LIKE '%" . $search . "%'
                OR Requiredskills LIKE '%" . $search . "%'
                OR Application LIKE '%" . $search . "%'
                OR email LIKE '%" . $search . "%'
                OR number LIKE '%" . $search . "%'
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
      echo '<th>Company name</th>';
      echo '<th>Titel</th>';
      echo '<th>Jobdescription</th>';
      echo '<th>Requirements</th>';
      echo '<th>Duration</th>';
      echo '<th>sdate</th>';
      echo '<th>Deadline</th>';
      echo '<th>Stipend</th>';
      echo '<th>Requiredskills</th>';
      echo '<th>Application</th>';
      echo '<th>email</th>';
      echo '<th>number</th>';
      echo '<th>adders</th>';
      echo '<th>Delete</th>';
      echo '</tr>';


  
   while( $row= mysqli_fetch_assoc($result) ){
    echo '<tr>';
   echo '<td>' . $row['cname'] . '</td>';
   echo '<td>' . $row['Titel'] . '</td>';
   echo '<td>' . $row['Jobdescription'] . '</td>';
   echo '<td>' . $row['Requirements'] . '</td>';
   echo '<td>' . $row['Duration'] . '</td>';
   echo '<td>' . $row['sdate'] . '</td>';
   echo '<td>' . $row['Deadline'] . '</td>';
   echo '<td>' . $row['Stipend'] . '</td>';
   echo '<td>' . $row['Requiredskills'] . '</td>';
   echo '<td>' . $row['Application'] . '</td>';
   echo '<td>' . $row['email'] . '</td>';
   echo '<td>' . $row['number'] . '</td>';
   echo '<td>' . $row['adders'] . '</td>';
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
</html>y