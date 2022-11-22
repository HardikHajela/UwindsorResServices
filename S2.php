<html>
  
   <head>
    <meta charset="UTF-8">
      <meta name="description" content="Student Home Page">
      <meta name="author" content="Rebecca Wallace">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    
    <!-- BS CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  
  <body>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;color: FFFFFF;
}
body {
background-color: #343a40;
}
td, th {
border: 1px solid #000000;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #212529;
}     tr:nth-child(odd) {
  background-color: #6c757d;
}
</style>
<?php
$servername = "localhost";
$username = "hajela_COMP4150";
$password = "root";
$dbname = "hajela_COMP4150";



// Create connection
$mysqli = new mysqli($servername, $username, $password, $dbname);



// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



if (isset($_POST['submit'])){
      $ID = $_POST["id"];
     



$sql = "SELECT * FROM student WHERE G12NUM = $ID";

  echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr><center> <h3 style="color:white;">Student Info</h3></center>
          <td> <font face="Arial">Student Number</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Home Address</font> </td> 
          <td> <font face="Arial">DOB</font> </td> 
          <td> <font face="Arial">Placed</font> </td> 
      </tr>';


//$result = $conn->query($sql);



if ($result = $mysqli->query($sql)) {
    // output data of each row
    //$row = $result->fetch_assoc();
  
  
        $row = $result->fetch_assoc();
        $G12NUM = $row["G12NUM"];
        $STUDENT_NAME = $row["STUDENT_NAME"];
        $STUDENT_HOMEADDRESS = $row["STUDENT_HOMEADDRESS"];
        $STUDENT_DOB = $row["STUDENT_DOB"];
        $PLACED = $row["PLACED"]; 

        echo '<tr> 
                  <td>'.$G12NUM.'</td> 
                  <td>'.$STUDENT_NAME.'</td> 
                  <td>'.$STUDENT_HOMEADDRESS.'</td> 
                  <td>'.$STUDENT_DOB.'</td> 
                  <td>'.$PLACED.'</td> 
              </tr>';
          
} 
  $result->free();
}
$conn->close();
?>
</body>
</html>
