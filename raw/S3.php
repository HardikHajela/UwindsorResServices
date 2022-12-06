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
  width: 100%;
  color: FFFFFF;
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
ON lease.G12NUM = invoice.G12NUM AND lease.G12NUM = $ID AND invoice.PAYMENT_DUE = 'Y'";
  
$sql2 = "SELECT room.FLAT_ID, room.ROOM_NUMBER_IN_FLAT, assign.MONTHLY_RENT FROM room JOIN assign ON room.PLACENUM=assign.PLACENUM WHERE assign.G12NUM = $ID";



$result = $conn->query($sql);

$result2 = $conn->query($sql2);



if ($result->num_rows > 0 && $result2->num_rows > 0) {
    // output data of each row

   
  
    echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> <center><h3 style="color:white;">Student Info</h3></center>
          <td> <font face="Arial">Name</font> </td> 
          <td> <font face="Arial">Home Address</font> </td> 
          <td> <font face="Arial">DOB</font> </td> 
          <td> <font face="Arial">Placed</font> </td> 
      </tr>';
  	$row = $result->fetch_assoc();
        $STUDENT_NAME = $row["STUDENT_NAME"];
        $STUDENT_HOMEADDRESS = $row["STUDENT_HOMEADDRESS"];
        $STUDENT_DOB = $row["STUDENT_DOB"];
        $PLACED = $row["PLACED"]; 

        echo '<tr> 
                 
                  <td>'.$STUDENT_NAME.'</td> 
                  <td>'.$STUDENT_HOMEADDRESS.'</td> 
                  <td>'.$STUDENT_DOB.'</td> 
                  <td>'.$PLACED.'</td> 
              </tr>';
  
   echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> <center><h3 style="color:white;">Lease Info</h3></center>
          <td> <font face="Arial">Move in date</font> </td> 
          <td> <font face="Arial">Move out date</font> </td> 
          <td> <font face="Arial">Flat Address</font> </td> 
         
      </tr>';
  	//$row = $result->fetch_assoc();
        $MOVEINDATE = $row["MOVEINDATE"];
        $MOVEOUTDATE = $row["MOVEOUTDATE"];
        $FLAT_ADDRESS = $row["FLAT_ADDRESS"];
        

        echo '<tr> 
                 
                  <td>'.$MOVEINDATE.'</td> 
                  <td>'.$MOVEOUTDATE.'</td> 
                  <td>'.$FLAT_ADDRESS.'</td> 
                   
              </tr>';
  
  
   echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> <center><h3 style="color:white;">Invoice Info</h3></center>
          <td> <font face="Arial">Payment Due</font> </td> 
          <td> <font face="Arial">First Payment Reminder</font> </td> 
          <td> <font face="Arial">Second Payment Reminder</font> </td> 
           
      </tr>';
  	//$row = $result->fetch_assoc();
        $PAYMENT_DUE = $row["PAYMENT_DUE"];
        $FIRST_REMINDER_DATE = $row["FIRST_REMINDER_DATE"];
        $SECOND_REMINDER_DATE = $row["SECOND_REMINDER_DATE"];
        

        echo '<tr> 
                 
                  <td>'.$PAYMENT_DUE.'</td> 
                  <td>'.$FIRST_REMINDER_DATE.'</td> 
                  <td>'.$SECOND_REMINDER_DATE.'</td> 
                   
              </tr>';
  
   echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> <center><h3 style="color:white;">Room Info</h3></center>
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
    
} else {
    echo "Invalid G12NUM";
    }
}
$conn->close();
?>
   </body>
</html>
