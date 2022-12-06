<html>
  <body>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<?php
$servername = "localhost";
$username = "hajela_COMP4150";
$password = "root";
$dbname = "hajela_COMP4150";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])){
      $ID = $_POST["id"];
     
  
$sql = "SELECT * FROM staff WHERE EMP_NUM = $ID AND EMP_DESIGNATION = 'RES MANAGER'";
$sql2 = "SELECT * FROM staff WHERE EMP_NUM = $ID AND EMP_DESIGNATION = 'CASHIER'";
$sql3 = "SELECT * FROM staff WHERE EMP_NUM = $ID AND (EMP_DESIGNATION = 'ADMIN STAFF' OR EMP_DESIGNATION = 'RES MANAGER ASSISTANT')";
$sql4 = "SELECT * FROM staff WHERE EMP_NUM = $ID AND (EMP_DESIGNATION = 'INSPECTOR' OR EMP_DESIGNATION = 'RA')";


$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$result3= $conn->query($sql3);
$result4= $conn->query($sql4);

if ($result->num_rows > 0) {
 
  header("Location: https://hajela.myweb.cs.uwindsor.ca/COMP4150/emp/e1/home.php");
  
} else if ($result2->num_rows > 0) {

   header("Location: https://hajela.myweb.cs.uwindsor.ca/COMP4150/emp/e2/home.php");
  
} else if ($result3->num_rows > 0) {

   header("Location: https://hajela.myweb.cs.uwindsor.ca/COMP4150/emp/e3/home.php");
   
} else if ($result4->num_rows > 0) {

header("Location: https://hajela.myweb.cs.uwindsor.ca/COMP4150/emp/e4/home.php");  
   
} else {
    echo "Invalid EMP_NUM";
    }
 
}
$conn->close();
?>
   </body>
</html>