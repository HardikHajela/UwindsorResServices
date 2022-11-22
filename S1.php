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
}
      tr:nth-child(odd) {
  background-color: #6c757d;
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

$sql = "SELECT
  student.STUDENT_NAME,
  student.STUDENT_HOMEADDRESS, student.G12NUM, student.STUDENT_DOB, student.LEVEL_OF_STUDY, student.PLACED,
  lease.MOVEINDATE, lease.MOVEOUTDATE, lease.FLAT_ADDRESS, invoice.PAYMENT_DUE, invoice.FIRST_REMINDER_DATE, invoice.SECOND_REMINDER_DATE
FROM student
JOIN invoice
  ON student.G12NUM = invoice.G12NUM
JOIN lease
ON lease.G12NUM = invoice.G12NUM AND lease.G12NUM = $ID;";
  
$sql2 = "SELECT room.FLAT_ID, room.ROOM_NUMBER_IN_FLAT, assign.MONTHLY_RENT FROM room JOIN assign ON room.PLACENUM=assign.PLACENUM WHERE assign.G12NUM = $ID";
  
$sql3 = "SELECT advisor.ADV_NAME, advisor.ADV_DEPT, advisor.ADV_PHONE, advisor.ADV_ROOM_NO FROM advisor JOIN student ON advisor.ADV_ID=student.ADV_ID WHERE student.G12NUM = $ID";
  
$result = $conn->query($sql);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);

if ($result->num_rows > 0 && $result2->num_rows > 0) {
    
  echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> <center><h3 style="color:white;">Student Info</h3></center>
          <td> <font face="Arial">Student Number</font> </td> 
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Home Address</font> </td> 
          <td> <font face="Arial">DOB</font> </td> 
          <td> <font face="Arial">Placed</font> </td> 
      </tr>';
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
  		
  
  echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> <br>
     <center> <h3 style="color:white;">Room Info</h3></center>
          <td> <font face="Arial">Flat ID</font> </td> 
          <td> <font face="Arial">Room Number</font> </td> 
          <td> <font face="Arial">Monthly Rent</font> </td> 
          
      </tr>';
  $row = $result2->fetch_assoc();
        $FLAT_ID = $row["FLAT_ID"];
        $ROOM_NUMBER_IN_FLAT = $row["ROOM_NUMBER_IN_FLAT"];
        $MONTHLY_RENT = $row["MONTHLY_RENT"];
        

        echo '<tr> 
                  <td>'.$FLAT_ID.'</td> 
                  <td>'.$ROOM_NUMBER_IN_FLAT.'</td> 
                  <td>'.$MONTHLY_RENT.'</td> 
                   
              </tr>';
  
  
  echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> <br>
     <center> <h3 style="color:white;" >Advisor Info</h3></center>
          <td> <font face="Arial">Advisor Name</font> </td> 
          <td> <font face="Arial">Advisor Department</font> </td> 
          <td> <font face="Arial">Advisor Phone Number</font> </td> 
          <td> <font face="Arial">Advisor Room Number</font> </td> 
          
      </tr>';
  	$row = $result3->fetch_assoc();
        $ADV_NAME = $row["ADV_NAME"];
        $ADV_DEPT = $row["ADV_DEPT"];
        $ADV_PHONE = $row["ADV_PHONE"];
        $ADV_ROOM_NO = $row["ADV_ROOM_NO"];
        

        echo '<tr> 
                  <td>'.$ADV_NAME.'</td> 
                  <td>'.$ADV_DEPT.'</td> 
                  <td>'.$ADV_PHONE.'</td> 
                  <td>'.$ADV_ROOM_NO.'</td> 
                  
              </tr>';
  
	} 
}
$conn->close();
?>
    </body>
</html>

