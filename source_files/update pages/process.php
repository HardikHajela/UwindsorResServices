<?php
$mysqli = new mysqli("localhost", "hajela_COMP4150", "root", "hajela_COMP4150") or die(mysqli_error($mysqli));

if (isset($_POST['submit'])){
      $ID = $_POST["inpsectionid"];
      $NAME = $_POST["inspectorname"];   
  	  $PNUM = $_POST["placenum"];
 	  $DATE = $_POST["dateofi"];
 	  $IO = $_POST["io"];
 	  $COMM = $_POST["comments"];
      $CHECK = $mysqli -> query ("SELECT * FROM inspection WHERE INSPECTION_ID =".$ID) or die($mysqli->error);
      if ($CHECKROW = $CHECK -> fetch_assoc()){
      $mysqli -> query ("UPDATE inspection SET INSPECTOR_NAME = '$NAME' , PLACENUM ='$PNUM' , DATE_OF_INSPECTION = '$DATE' ,INSPECTION_OUTCOME ='$IO',  COMMENTS= '$COMM' WHERE INSPECTION_ID = $ID ") or die($mysqli->error);
      }
      else {
      $mysqli -> query ("INSERT INTO inspection (INSPECTION_ID, INSPECTOR_NAME, PLACENUM, DATE_OF_INSPECTION, INSPECTION_OUTCOME, COMMENTS) VALUES ($ID, '$NAME', '$PNUM', '$DATE', '$IO', '$COMM')") or die($mysqli->error);
      }
     echo '<html>';
     echo  '<head></head> <body>';
     echo'	<br><center><h2 style="font-weight:300;">The entries have been updated! <br> You will be redirected to the home page. </h2></center> ';
 	 echo '<meta http-equiv="refresh" content="3; URL=https://hajela.myweb.cs.uwindsor.ca/COMP4150/" />';
     echo '</body> </html>';
  
}

if (isset($_POST['assignsubmit'])){
      $G12 = $_POST["g12num"];  
  	  $PNUM = $_POST["placenum"];
 	  $MRENT = $_POST["mrent"]; 
   	  $CHECK = $mysqli -> query ("SELECT * FROM assign WHERE G12NUM = $G12") or die($mysqli->error);
      if ($CHECKROW = $CHECK -> fetch_assoc()){
      $mysqli -> query ("UPDATE assign SET PLACENUM = '$PNUM', MONTHLY_RENT = $MRENT WHERE G12NUM = $G12 ") or die($mysqli->error);
      }
     else {
     $mysqli -> query ("INSERT INTO assign (PLACENUM, G12NUM, MONTHLY_RENT) VALUES ('$PNUM', $G12, $MRENT)") or die($mysqli->error);
     }
     echo '<html>';
     echo  '<head></head> <body>';
     echo'	<br><center><h2 style="font-weight:300;">The entries have been updated! <br> You will be redirected to the home page. </h2></center> ';
 	 echo '<meta http-equiv="refresh" content="3; URL=https://hajela.myweb.cs.uwindsor.ca/COMP4150/" />';
     echo '</body> </html>';
  
}

if (isset($_POST['advisorsubmit'])){
      $AID = $_POST["advid"];  
  	  $ANAME = $_POST["advname"];
 	  $APOS = $_POST["advpos"]; 
   	  $ADEPT = $_POST["advdept"]; 
      $APH = $_POST["advphone"]; 
      $AROOM = $_POST["advroom"]; 
  
      $CHECK = $mysqli -> query ("SELECT * FROM advisor WHERE ADV_ID  =".$AID) or die($mysqli->error);
      if ($CHECKROW = $CHECK -> fetch_assoc()){
      $mysqli -> query ("UPDATE advisor SET ADV_NAME = '$ANAME' , ADV_POSITION ='$APOS' , ADV_DEPT = '$ADEPT', ADV_PHONE = $APH, ADV_ROOM_NO = $AROOM  WHERE ADV_ID  = $AID") or die($mysqli->error);
      }
      else {
      $mysqli -> query ("INSERT INTO advisor ( ADV_ID,ADV_NAME, ADV_POSITION, ADV_DEPT, ADV_PHONE, ADV_ROOM_NO ) VALUES ($AID, '$ANAME', '$APOS', '$ADEPT', $APH, $AROOM)") or die($mysqli->error);
      }
     echo '<html>';
     echo  '<head></head> <body>';
     echo'	<br><center><h2 style="font-weight:300;">The entries have been updated! <br> You will be redirected to the home page. </h2></center> ';
 	 echo '<meta http-equiv="refresh" content="3; URL=https://hajela.myweb.cs.uwindsor.ca/COMP4150/" />';
     echo '</body> </html>';
}

if (isset($_POST['flatsubmit'])){
      $FID = $_POST["flatid"];  
  	  $FTYPE = $_POST["flattype"];
 	  $FADD = $_POST["fadd"]; 
   	  $RESNUM = $_POST["resnum"]; 
      $RNUM = $_POST["rnum"]; 
      $VROOM = $_POST["vroom"]; 
  
  	  $CHECK = $mysqli -> query ("SELECT * FROM flat WHERE FLAT_ID ='$FID'") or die($mysqli->error);
      if ($CHECKROW = $CHECK -> fetch_assoc()){
      $mysqli -> query ("UPDATE flat SET FLAT_TYPE= '$FTYPE', FLAT_ADDRESS = '$FADD', RES_NUM = '$RESNUM', NUMBER_OF_ROOMS = $RNUM, NUMBER_OF_VACANT_ROOMS = $VROOM WHERE FLAT_ID =$FID ") or die($mysqli->error);
      }
      else {
      $mysqli -> query ("INSERT INTO flat (	FLAT_ID ,FLAT_TYPE, FLAT_ADDRESS,RES_NUM,NUMBER_OF_ROOMS,NUMBER_OF_VACANT_ROOMS) VALUES ('$FID','$FTYPE','$FADD','$RESNUM',$RNUM,$VROOM)") or die($mysqli->error);
      }
     echo '<html>';
     echo  '<head></head> <body>';
     echo'	<br><center><h2 style="font-weight:300;">The entries have been updated! <br> You will be redirected to the home page. </h2></center> ';
 	 echo '<meta http-equiv="refresh" content="3; URL=https://hajela.myweb.cs.uwindsor.ca/COMP4150/" />';
     echo '</body> </html>';
}

if (isset($_POST['staffsubmit'])){
      $ENUM = $_POST["empnum"]; 
 	  $ENAME = $_POST["empname"];
  	  $EHPH = $_POST["ehph"];
      $EDOB = $_POST["empdob"];
      $EGEN = $_POST["empgender"];
      $EDSN = $_POST["empdsn"];
      $ELOC = $_POST["emploc"];
      $EOPH = $_POST["eoph"];
      $EAGE = $_POST["empage"];
  
      $CHECK = $mysqli -> query ("SELECT * FROM staff WHERE EMP_NUM =".$ENUM) or die($mysqli->error);
      if ($CHECKROW = $CHECK -> fetch_assoc()){
      $mysqli -> query ("UPDATE staff SET EMP_NAME = '$ENAME', EMP_HOME_PHONE = $EHPH , EMP_DOB = '$EDOB' , EMP_GENDER = '$EGEN', EMP_DESIGNATION = '$EDSN', EMP_OFFICE_LOCATION = '$ELOC', EMP_OFFICE_PHONE =  $EOPH, EMP_AGE= $EAGE  WHERE  EMP_NUM = $ENUM ") or die($mysqli->error);
      }
      else {
      $mysqli -> query ("INSERT INTO staff (EMP_NUM, EMP_NAME, EMP_HOME_PHONE, EMP_DOB, EMP_GENDER, EMP_DESIGNATION, EMP_OFFICE_LOCATION,EMP_OFFICE_PHONE, EMP_AGE  ) VALUES ($ENUM, '$ENAME',  $EHPH, '$EDOB', '$EGEN','$EDSN', '$ELOC', $EOPH, $EAGE )") or die($mysqli->error);
      }
     echo '<html>';
     echo  '<head></head> <body>';
     echo'	<br><center><h2 style="font-weight:300;">The entries have been updated! <br> You will be redirected to the home page. </h2></center> ';
 	 echo '<meta http-equiv="refresh" content="3; URL=https://hajela.myweb.cs.uwindsor.ca/COMP4150/" />';
     echo '</body> </html>';
}

if (isset($_POST['invoicesubmit'])){
      $INUM = $_POST["invnum"]; 
  	  $LNUM = $_POST["leasenum"]; 
  	  $ITERM = $_POST["invterm"]; 
      $DINV = $_POST["dateinv"]; 
      $PDUE = $_POST["payduedate"]; 
      $IFDUE = $_POST["ifpaydue"]; 
      $G12 = $_POST["g12num"]; 
      $SNAME = $_POST["sname"]; 
      $PNUM = $_POST["placenum"]; 
      $ROOM = $_POST["roomnum"]; 
      $FADD = $_POST["flatadd"]; 
      $PAYMODE = $_POST["paymode"]; 
  	  $FREM = $_POST["fremdate"]; 
      $SREM = $_POST["sremdate"];
  
     $CHECK = $mysqli -> query ("SELECT * FROM invoice WHERE INV_NUM = $INUM") or die($mysqli->error);
      if ($CHECKROW = $CHECK -> fetch_assoc()){
      $mysqli -> query ("UPDATE invoice SET LEASE_NUM = '$LNUM', INV_TERM_NUM = '$ITERM', DATE_OF_INV = '$DINV', PAYMENT_DUE_DATE= '$PDUE', PAYMENT_DUE = '$IFDUE', G12NUM = $G12, STUDENT_NAME = '$SNAME', PLACENUM = '$PNUM', ROOM_NUMBER_IN_FLAT= $ROOM, FLAT_ADDRESS = '$FADD', MODE_OF_PAYMENT= '$PAYMODE', FIRST_REMINDER_DATE = '$FREM', 	SECOND_REMINDER_DATE = '$SREM' WHERE INV_NUM = $INUM   ") or die($mysqli->error);
      }
      else {
      $mysqli -> query ("INSERT INTO invoice (INV_NUM,LEASE_NUM,INV_TERM_NUM,DATE_OF_INV,PAYMENT_DUE_DATE,PAYMENT_DUE,G12NUM,STUDENT_NAME,PLACENUM,ROOM_NUMBER_IN_FLAT,FLAT_ADDRESS,MODE_OF_PAYMENT,FIRST_REMINDER_DATE,SECOND_REMINDER_DATE) VALUES ('$INUM','$LNUM', $ITERM,'$DINV','$PDUE','$IFDUE',$G12,'$SNAME','$PNUM',$ROOM,'$FADD', '$PAYMODE','$FREM','$SREM')") or die($mysqli->error);
      }
     echo '<html>';
     echo  '<head></head> <body>';
     echo'	<br><center><h2 style="font-weight:300;">The entries have been updated! <br> You will be redirected to the home page. </h2></center> ';
 	 echo '<meta http-equiv="refresh" content="3; URL=https://hajela.myweb.cs.uwindsor.ca/COMP4150/" />';
     echo '</body> </html>';
}

if (isset($_POST['leasesubmit'])){
      $LNUM = $_POST["leasenum"]; 
  	  $LTERM = $_POST["leaseterm"];
      $G12 = $_POST["g12num"]; 
      $SNAME = $_POST["sname"]; 
      $PNUM = $_POST["placenum"]; 
      $ROOM = $_POST["roomnum"]; 
      $FADD = $_POST["flatadd"]; 
      $MRENT = $_POST["mrent"]; 
      $MINDATE = $_POST["mindate"]; 
      $MOUTDATE = $_POST["moutdate"]; 
      $PMIN = $_POST["pmindate"]; 
      $PMOUT = $_POST["pmoutdate"]; 
  
      $CHECK = $mysqli -> query ("SELECT * FROM lease WHERE LEASE_NUM = '$LNUM'") or die($mysqli->error);
      if ($CHECKROW = $CHECK -> fetch_assoc()){
      $mysqli -> query ("UPDATE lease SET LEASE_TERM = $LTERM, G12NUM = $G12, STUDENT_NAME = '$SNAME', PLACENUM = '$PNUM', 	ROOM_NUMBER_IN_FLAT = $ROOM, FLAT_ADDRESS = '$FADD', MONTHLY_RENT = $MRENT, MOVEINDATE = '$MINDATE', MOVEOUTDATE = '$MOUTDATE', PROJECTED_MOVEINDATE = '$PMIN', PROJECTED_MOVEOUTDATE = '$PMOUT' WHERE LEASE_NUM = '$LNUM' ") or die($mysqli->error);
      }
      else {
      $mysqli -> query ("INSERT INTO lease (LEASE_NUM,LEASE_TERM,G12NUM,STUDENT_NAME,PLACENUM,ROOM_NUMBER_IN_FLAT,FLAT_ADDRESS,MONTHLY_RENT ,MOVEINDATE,MOVEOUTDATE,PROJECTED_MOVEINDATE,PROJECTED_MOVEOUTDATE) VALUES ('$LNUM',$LTERM,$G12,'$SNAME','$PNUM',$ROOM,'$FADD',$MRENT,'$MINDATE','$MOUTDATE','$PMIN','$PMOUT')") or die($mysqli->error);
      }
  	 echo '<html>';
     echo  '<head></head> <body>';
     echo'	<br><center><h2 style="font-weight:300;">The entries have been updated! <br> You will be redirected to the home page. </h2></center> ';
 	 echo '<meta http-equiv="refresh" content="3; URL=https://hajela.myweb.cs.uwindsor.ca/COMP4150/" />';
     echo '</body> </html>';
}

if (isset($_POST['residencesubmit'])){
      $RESNUM = $_POST["resnum"]; 
      $RNAME = $_POST["resname"]; 
      $RADD = $_POST["resadd"]; 
      $RPH = $_POST["resphone"]; 
      $RMANAGER = $_POST["resmanager"]; 
      $FTYPE = $_POST["flattype"]; 
  
      $CHECK = $mysqli -> query ("SELECT * FROM residence WHERE RES_NUM = '$RESNUM'") or die($mysqli->error);
      if ($CHECKROW = $CHECK -> fetch_assoc()){
      $mysqli -> query ("UPDATE residence SET RES_NAME = '$RNAME' , RES_ADDRESS = '$RADD', RES_PHONE = $RPH, RES_MANAGER_NAME = '$RMANAGER', FLAT_TYPE = '$FTYPE' WHERE RES_NUM = '$RESNUM' ") or die($mysqli->error);
      }
      else {
      $mysqli -> query ("INSERT INTO residence (RES_NUM,RES_NAME,RES_ADDRESS,RES_PHONE,RES_MANAGER_NAME, FLAT_TYPE) VALUES ('$RESNUM','$RNAME','$RADD',$RPH, '$RMANAGER', '$FTYPE')") or die($mysqli->error);
      }
     echo '<html>';
     echo  '<head></head> <body>';
     echo'	<br><center><h2 style="font-weight:300;">The entries have been updated! <br> You will be redirected to the home page. </h2></center> ';
 	 echo '<meta http-equiv="refresh" content="3; URL=https://hajela.myweb.cs.uwindsor.ca/COMP4150/" />';
     echo '</body> </html>';
}

if (isset($_POST['roomsubmit'])){
      $PNUM = $_POST["placenum"]; 
      $FID = $_POST["flatid"]; 
      $ROOM = $_POST["roomnum"]; 
  
      $CHECK = $mysqli -> query ("SELECT * FROM room WHERE PLACENUM = '$PNUM'") or die($mysqli->error);
      if ($CHECKROW = $CHECK -> fetch_assoc()){
      $mysqli -> query ("UPDATE room SET ROOM_NUMBER_IN_FLAT = $ROOM,  FLAT_ID = '$FID' WHERE PLACENUM = '$PNUM'") or die($mysqli->error);
      }
      else {
      $mysqli -> query ("INSERT INTO room (PLACENUM,FLAT_ID,ROOM_NUMBER_IN_FLAT) VALUES ('$PNUM', '$FID', $ROOM)") or die($mysqli->error);
      }
     echo '<html>';
     echo  '<head></head> <body>';
     echo'	<br><center><h2 style="font-weight:300;">The entries have been updated! <br> You will be redirected to the home page. </h2></center> ';
 	 echo '<meta http-equiv="refresh" content="3; URL=https://hajela.myweb.cs.uwindsor.ca/COMP4150/" />';
     echo '</body> </html>';
}

if (isset($_POST['studentsubmit'])){
      $G12 = $_POST["g12num"]; 
      $SNAME = $_POST["sname"];
      $SADD = $_POST["shomeadd"];
      $SDOB = $_POST["sdob"];
      $SGENDER = $_POST["sgender"];
      $LEVEL = $_POST["level"];
      $DTYPE = $_POST["dtype"];
      $MAJOR = $_POST["major"];
      $SNATION = $_POST["snationality"];
      $DOM = $_POST["dom"];
      $PLACED = $_POST["placed"];
      $SNEEDS = $_POST["sneeds"];
      $AID = $_POST["advid"];
  
      $CHECK = $mysqli -> query ("SELECT * FROM student WHERE G12NUM =".$G12) or die($mysqli->error);
      if ($CHECKROW = $CHECK -> fetch_assoc()){
      $mysqli -> query ("UPDATE student SET STUDENT_NAME = '$SNAME', STUDENT_HOMEADDRESS = '$SADD', STUDENT_DOB = '$SDOB', STUDENT_GENDER = '$SGENDER', LEVEL_OF_STUDY = '$LEVEL', DEGREE_TYPE = '$DTYPE', MAJOR = '$MAJOR', STUDENT_NATIONALITY = '$SNATION', DOMESTIC = '$DOM', SPECIAL_NEEDS = '$SNEEDS', 	PLACED = '$PLACED', ADV_ID =$AID WHERE G12NUM = $G12 ") or die($mysqli->error);
      }
      else {
      $mysqli -> query ("INSERT INTO student (G12NUM, STUDENT_NAME, STUDENT_HOMEADDRESS, STUDENT_DOB, STUDENT_GENDER, LEVEL_OF_STUDY, DEGREE_TYPE, MAJOR, STUDENT_NATIONALITY, DOMESTIC, SPECIAL_NEEDS, PLACED, ADV_ID  ) VALUES ($G12,'$SNAME', '$SADD', '$SDOB','$SGENDER','$LEVEL','$DTYPE', '$MAJOR', '$SNATION', '$DOM','$SNEEDS', '$PLACED', $AID )") or die($mysqli->error);
      }
     echo '<html>';
     echo  '<head></head> <body>';
     echo'	<br><center><h2 style="font-weight:300;">The entries have been updated! <br> You will be redirected to the home page. </h2></center> ';
 	 echo '<meta http-equiv="refresh" content="3; URL=https://hajela.myweb.cs.uwindsor.ca/COMP4150/" />';
     echo '</body> </html>';
}

if (isset($_POST['delete'])){
      $ID = $_POST["id"];
      $TABLE = $_POST["table"];
  
      if ($TABLE = 'advisor'){
      $mysqli -> query ("DELETE from advisor WHERE ADV_ID = $ID") or die($mysqli->error);
      }
  
  	  if ($TABLE = 'assign' ){
      $mysqli -> query ("DELETE from assign WHERE G12NUM = $ID") or die($mysqli->error);
      }
  
      if ($TABLE = 'flat'){
      $mysqli -> query ("DELETE from flat WHERE FLAT_ID = $ID") or die($mysqli->error);
      }
  
      if ($TABLE = 'inspection' ){
      $mysqli -> query ("DELETE from inspection WHERE INSPECTION_ID  = $ID") or die($mysqli->error);
      }
  
      if ($TABLE = 'invoice'){
      $mysqli -> query ("DELETE from invoice WHERE INV_NUM  = $ID") or die($mysqli->error);
      }
  
      if ($TABLE = 'lease' ){
      $mysqli -> query ("DELETE from lease WHERE  LEASE_NUM = $ID") or die($mysqli->error);
      }
  
      if ($TABLE = 'residence' ){
      $mysqli -> query ("DELETE from residence WHERE RES_NUM = $ID") or die($mysqli->error);
      }
  
  	  if ($TABLE = 'room' ){
      $mysqli -> query ("DELETE from room WHERE PLACENUM = $ID") or die($mysqli->error);
      }
  
      if ($TABLE = 'staff' ){
      $mysqli -> query ("DELETE from staff WHERE EMP_NUM = $ID") or die($mysqli->error);
      }
  
 	  if ($TABLE = 'student'){
      $mysqli -> query ("DELETE from student WHERE G12NUM = $ID") or die($mysqli->error);
      }
     echo '<html>';
     echo  '<head></head> <body>';
     echo'	<br><center><h2 style="font-weight:300;">The entries have been updated! <br> You will be redirected to the home page. </h2></center> ';
 	 echo '<meta http-equiv="refresh" content="3; URL=https://hajela.myweb.cs.uwindsor.ca/COMP4150/" />';
     echo '</body> </html>';
}

$mysqli->close();

?>



    
      

