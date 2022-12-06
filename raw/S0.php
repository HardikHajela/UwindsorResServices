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
     


$sql = "SELECT student.G12NUM FROM student JOIN lease ON student.G12NUM=lease.G12NUM WHERE student.PLACED = 'Y' AND lease.MOVEINDATE <= CURDATE() AND student.G12NUM = $ID";
$sql2 = "SELECT student.G12NUM FROM student JOIN lease ON student.G12NUM=lease.G12NUM WHERE lease.MOVEINDATE >= CURDATE() AND student.G12NUM = $ID";
$sql3= "SELECT student.G12NUM FROM student JOIN invoice ON student.G12NUM=invoice.G12NUM WHERE invoice.PAYMENT_DUE = 'Y' AND student.G12NUM = $ID";
  



$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$result3= $conn->query($sql3);




if ($result->num_rows > 0) {
    // output data of each row

   
 
   include 'S1.php';
  
   

    
} else if ($result2->num_rows > 0) {
    // output data of each row

   
 
   include 'S2.php';
     

   

    
} else if ($result3->num_rows > 0) {
    // output data of each row

   
 
   include 'S3.php';
  
      


    
} else {
    echo "Invalid G12NUM";
    }
 
}
//$conn->close();
?>
   </body>
</html>
