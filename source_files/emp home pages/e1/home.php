<html>
  <head>
	<meta charset="UTF-8">
  	<meta name="description" content="Inspection(E4) Home Page">
  	<meta name="author" content="Hardik Hajela">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Inspections Home</title>
    
    <style>      
      /*For Heading*/
      #phead{
        font-size: 250%;
        font-family: Times New Roman, Times, serif;
        text-align: center;
        color: white;
      }
      
      /*Body*/
      .container-fluid {
  		background-color: #383838;
	  }
      
      /*For the images*/
      #containerimg1 {
  		position: relative;
  		width: 95%;
	  }

	  #imageimg1 {
  		display: block;
  		width: 100%;
  		height: auto;
	  }

	  #overlayimg1 {
  		position: absolute;
        bottom: 0;
  		left: 0;
  		right: 0;
  		background-color: rgba(255, 255, 255, 0.3);
  		overflow: hidden;
  		width: 100%;
  		height: 0;
  		transition: .5s ease;
	  }

	  #containerimg1:hover #overlayimg1 {
  		height: 80%;
        width: 100%;
	  }

	  #textimg1 {
  		color: black;
  		font-size: 24px;
        font-family: Georgia, serif;
  		position: absolute;
  		top: 50%;
  		left: 50%;
  		-webkit-transform: translate(-50%, -50%);
  		-ms-transform: translate(-50%, -50%);
  		transform: translate(-50%, -50%);
  		text-align: center;
        padding: 10px 5x;
	  }
      
      .pcursor {cursor: pointer;}
           
    </style>
    
    <!--Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <?php 
      $mysqli = new mysqli("localhost", "hajela_COMP4150", "root", "hajela_COMP4150") or die(mysqli_error($mysqli));
      $room = $mysqli->query("SELECT * FROM room") or die(mysqli_error($mysqli));
      $ins = $mysqli->query("SELECT * FROM inspection") or die(mysqli_error($mysqli));
      //pre_r($room);
      //pre_r($room->fetch_assoc());
      
    ?>
    <header></header>
    <main>
      <div class="container-fluid">
        <br><br>
        <p id="phead">
          <img src="../0.png" width="18%">
          Welcome Residence Manager!
        </p><br>
        
        <div class="row justify-content-around">
                      
          <div class="col-md-2 pcursor">
            <div id="containerimg1">
              <a onclick="showstu()" href="#tableshow">
  			    <img src="../icons/stu.png" alt="student" id="imageimg1" style="opacity: 0.9">
  			    <div id="overlayimg1">
    		      <div id="textimg1">View Database of Students</div>
  			    </div>
              </a>
		    </div>
		  </div>
          
          <div class="col-md-2 pcursor">
            <div id="containerimg1">
              <a onclick="showadv()" href="#tableshow"> 
  			    <img src="../icons/adv.png" alt="adv" id="imageimg1">
  			    <div id="overlayimg1">
    		      <div id="textimg1">View Database of Advisors</div>
  			    </div>
              </a>
		    </div>
		  </div>
          
          <div class="col-md-2 pcursor">
            <div id="containerimg1">
              <a onclick="staff()" href="#tableshow">
  			    <img src="../icons/staff.png" alt="staff" id="imageimg1">
  			    <div id="overlayimg1">
    		      <div id="textimg1">View Database of Hostel Staff</div>
  			    </div>
              </a>
		    </div>
		  </div>
          
          <div class="col-md-2 pcursor">
            <div id="containerimg1">
              <a onclick="showroom()" href="#tableshow">
  			    <img src="../icons/room.png" alt="room" id="imageimg1" style="opacity: 0.9">
  			    <div id="overlayimg1">
    		      <div id="textimg1">View Database of Rooms</div>
  			    </div>
              </a>
		    </div>
		  </div>
          
          <div class="col-md-2 pcursor">
            <div id="containerimg1">
              <a onclick="showflat()" href="#tableshow">
  			    <img src="../icons/flat.png" alt="flat" id="imageimg1">
  			    <div id="overlayimg1">
    		      <div id="textimg1">View Database of Flats</div>
  			    </div>
              </a>
		    </div>
		  </div>
          
          <div class="col-md-2 pcursor">
            <div id="containerimg1">
              <a onclick="showres()" href="#tableshow">
  			    <img src="../icons/res.png" alt="res" id="imageimg1">
  			    <div id="overlayimg1">
    		      <div id="textimg1">View Data of Residence Halls</div>
  			    </div>
              </a>
		    </div>
		  </div>
          
        </div> <!--Row End-->
        <br>
        <div class="row justify-content-around">       
          
          <div class="col-md-2 pcursor">
            <div id="containerimg1">
              <a onclick="showinv()" href="#tableshow">
  			    <img src="../icons/inv.png" alt="inv" id="imageimg1">
  			    <div id="overlayimg1">
    		      <div id="textimg1">View Invoices entries</div>
  			    </div>
              </a>
		    </div>
		  </div>
          
          <div class="col-md-2 pcursor">
            <div id="containerimg1">
              <a onclick="showlease()" href="#tableshow"> 
  			    <img src="../icons/lease.png" alt="lease" id="imageimg1" style="opacity: 0.8">
  			    <div id="overlayimg1">
    		      <div id="textimg1">View Lease entries</div>
  			    </div>
              </a>
		    </div>
		  </div>
          
          <div class="col-md-2 pcursor">
            <div id="containerimg1">
              <a onclick="showins()" href="#tableshow">
  			    <img src="../icons/ins.png" alt="ins" id="imageimg1">
  			    <div id="overlayimg1">
    		      <div id="textimg1">View Database of Inspections</div>
  			    </div>
              </a>
		    </div>
		  </div>
          
          <div class="col-md-2">
            <div id="containerimg1">
              <a href="https://dhaliw91.myweb.cs.uwindsor.ca/4150/emp/studentwrite.php">
  			    <img src="../icons/stuU.png" alt="student" id="imageimg1" style="opacity: 0.9">
  			    <div id="overlayimg1">
    		      <div id="textimg1">Update Database of Students</div>
  			    </div>
              </a>
		    </div>
		  </div>
          
          <div class="col-md-2">
            <div id="containerimg1">
              <a href="https://dhaliw91.myweb.cs.uwindsor.ca/4150/emp/assignwrite.php">
  			    <img src="../icons/assignU.png" alt="assign" id="imageimg1">
  			    <div id="overlayimg1">
    		      <div id="textimg1">Update Assigned rooms list</div>
  			    </div>
              </a>
		    </div>
		  </div>
          
          <div class="col-md-2">
            <div id="containerimg1">
              <a href="https://dhaliw91.myweb.cs.uwindsor.ca/4150/emp/advisorwrite.php">
  			    <img src="../icons/advU.png" alt="adv" id="imageimg1">
  			    <div id="overlayimg1">
    		      <div id="textimg1">Update Advisor's Database</div>
  			    </div>
              </a>
		    </div>
		  </div>
        </div> <!--Row End-->
        <br>
        <div class="row justify-content-around">              
          <div class="col-md-2 pcursor">
            <div id="containerimg1">
              <a href="https://dhaliw91.myweb.cs.uwindsor.ca/4150/emp/hostelstaffwrite.php">
  			    <img src="../icons/staff.png" alt="staff" id="imageimg1">
  			    <div id="overlayimg1">
    		      <div id="textimg1">Update Staff Information</div>
  			    </div>
              </a>
		    </div>
		  </div>
          
          <div class="col-md-2 pcursor">
            <div id="containerimg1">
              <a href="https://dhaliw91.myweb.cs.uwindsor.ca/4150/emp/roomwrite.php"> 
  			    <img src="../icons/roomU.png" alt="room" id="imageimg1" style="opacity: 0.8">
  			    <div id="overlayimg1">
    		      <div id="textimg1">Update Room Details</div>
  			    </div>
              </a>
		    </div>
		  </div>
          
          <div class="col-md-2">
            <div id="containerimg1">
              <a href="https://dhaliw91.myweb.cs.uwindsor.ca/4150/emp/flatwrite.php">
  			    <img src="../icons/flatU.png" alt="flat" id="imageimg1">
  			    <div id="overlayimg1">
    		      <div id="textimg1">Update Flat Details</div>
  			    </div>
              </a>
		    </div>
		  </div>
          
          <div class="col-md-2">
            <div id="containerimg1">
              <a href="https://dhaliw91.myweb.cs.uwindsor.ca/4150/emp/residencewrite.php">
  			    <img src="../icons/resU.png" alt="res" id="imageimg1">
  			    <div id="overlayimg1">
    		      <div id="textimg1">Update Residence Hall Details</div>
  			    </div>
              </a>
		    </div>
		  </div>
          
          <div class="col-md-2">
            <div id="containerimg1">
              <a href="https://dhaliw91.myweb.cs.uwindsor.ca/4150/emp/leasewrite.php">
  			    <img src="../icons/leaseU.png" alt="lease" id="imageimg1">
  			    <div id="overlayimg1">
    		      <div id="textimg1">Update Lease entries</div>
  			    </div>
              </a>
		    </div>
		  </div>
          
          <div class="col-md-2">
            <div id="containerimg1">
              <a href="https://dhaliw91.myweb.cs.uwindsor.ca/4150/emp/inspectionwrite.php">
  			    <img src="../icons/inspectionUpdate.png" alt="ins" id="imageimg1">
  			    <div id="overlayimg1">
    		      <div id="textimg1">Update Inspections Database</div>
  			    </div>
              </a>
		    </div>
		  </div>
          
        </div> <!--Row End-->
        <br><br>
        
        <div id="demo"></div>
        
        <div class="container">
          <table class="table table-dark table-striped table-hover" id="tableshow"></table>
          <br><br>
        </div>
		<!--<a onclick="clickMe()"> Click </a>-----------------------Tester------------------->
		<script>
      	  function clickMe(){document.getElementById("demo").innerHTML = "<?php php_func(); ?>";}//test function
          
          function showroom(){document.getElementById("tableshow").innerHTML = "<?php showroom(); ?>";}
          
          function showins(){document.getElementById("tableshow").innerHTML = "<?php showins(); ?>";}
          
          function showlease(){document.getElementById("tableshow").innerHTML = "<?php showlease(); ?>";}
          
          function showstu(){document.getElementById("tableshow").innerHTML = "<?php showstu(); ?>";}
          
          function showadv(){document.getElementById("tableshow").innerHTML = "<?php showadv(); ?>";}
          
          function staff(){document.getElementById("tableshow").innerHTML = "<?php staff(); ?>";}
          
          function showinv(){document.getElementById("tableshow").innerHTML = "<?php showinv(); ?>";}
          
          function showflat(){document.getElementById("tableshow").innerHTML = "<?php showflat(); ?>";}
          
          function showres(){document.getElementById("tableshow").innerHTML = "<?php showres(); ?>";}
		</script>
    </div>
    
    </main>
    <footer></footer>
    <?php 
    	
      function php_func(){echo "Test";}
    
      function showroom(){
        $mysqli = new mysqli("localhost", "hajela_COMP4150", "root", "hajela_COMP4150") or die(mysqli_error($mysqli));
      	$room = $mysqli->query("SELECT * FROM room") or die(mysqli_error($mysqli));
        //$row = $room->fetch_assoc();
        echo "List of Rooms:";
        echo "<tr><th>Place Number</th><th>Flat ID</th><th>Room number in given flat</th></tr>";
        while($row = $room->fetch_assoc()):
    	  echo "<tr><td>".$row['PLACENUM']."</td><td>".$row['FLAT_ID']."</td><td>".$row['ROOM_NUMBER_IN_FLAT']."</td></tr>";  
        endwhile;
      }
      function showins(){
        $mysqli = new mysqli("localhost", "hajela_COMP4150", "root", "hajela_COMP4150") or die(mysqli_error($mysqli));
      	$ins = $mysqli->query("SELECT * FROM inspection") or die(mysqli_error($mysqli));
        //$row2 = $ins->fetch_assoc();
        echo "List of Inspections:";
        echo "<tr><th>Inspection ID</th><th>Inspector's Name</th><th>Place number</th><th>Date of Inspection</th><th>Inspection Outcome</th><th>Comments</th></tr>";
        while($row2 = $ins->fetch_assoc()):
    	  echo "<tr><td>".$row2['INSPECTION_ID']."</td><td>".$row2['INSPECTOR_NAME']."</td><td>".$row2['PLACENUM']."</td><td>".$row2['DATE_OF_INSPECTION']."</td><td>".$row2['INSPECTION_OUTCOME']."</td><td>".$row2['COMMENTS']."</td></tr>";
        endwhile;
      }
      function showlease(){
        $mysqli = new mysqli("localhost", "hajela_COMP4150", "root", "hajela_COMP4150") or die(mysqli_error($mysqli));
      	$lease = $mysqli->query("SELECT * FROM lease") or die(mysqli_error($mysqli));
        //$row2 = $ins->fetch_assoc();
        echo "Lease Entries:";
        echo "<tr><th>Lease No</th><th>Term</th><th>Student ID</th><th>Student Name</th><th>Place Number</th><th>Room No</th><th>Address</th><th>Rent</th><th>Date: Movein</th><th>Date: Moveout</th><th>Est Date: Movein</th><th>Est Date: Moveout</th></tr>";
        while($row3 = $lease->fetch_assoc()):
    	  echo "<tr><td>".$row3['LEASE_NUM']."</td><td>".$row3['LEASE_TERM']."</td><td>".$row3['G12NUM']."</td><td>".$row3['STUDENT_NAME']."</td><td>".$row3['PLACENUM']."</td><td>".$row3['ROOM_NUMBER_IN_FLAT']."</td><td>".$row3['FLAT_ADDRESS']."</td><td>".$row3['MONTHLY_RENT']."</td><td>".$row3['MOVEINDATE']."</td><td>".$row3['MOVEOUTDATE']."</td><td>".$row3['PROJECTED_MOVEINDATE']."</td><td>".$row3['PROJECTED_MOVEOUTDATE']."</td></tr>";
        endwhile;
      }
      function showstu(){
        $mysqli = new mysqli("localhost", "hajela_COMP4150", "root", "hajela_COMP4150") or die(mysqli_error($mysqli));
      	$stu = $mysqli->query("SELECT G12NUM,	STUDENT_NAME, STUDENT_HOMEADDRESS, STUDENT_DOB, STUDENT_GENDER, LEVEL_OF_STUDY, DEGREE_TYPE, MAJOR, STUDENT_NATIONALITY, DOMESTIC, SPECIAL_NEEDS, PLACED, ADV_NAME FROM student, advisor WHERE advisor.ADV_ID = student.ADV_ID") or die(mysqli_error($mysqli));
        //$row2 = $ins->fetch_assoc();
        echo "Students:";
        echo "<tr><th>Student ID</th><th>NAME</th><th>Home Address</th><th>DOB</th><th>Gender</th><th>Level of Study</th><th>Degree</th><th>Major</th><th>Nationality</th><th>Domestic</th><th>Special Need</th><th>Placed</th><th>Advisor Name</th></tr>";
        while($row4 = $stu->fetch_assoc()):
    	  echo "<tr><td>".$row4['G12NUM']."</td><td>".$row4['STUDENT_NAME']."</td><td>".$row4['STUDENT_HOMEADDRESS']."</td><td>".$row4['STUDENT_DOB']."</td><td>".$row4['STUDENT_GENDER']."</td><td>".$row4['LEVEL_OF_STUDY']."</td><td>".$row4['DEGREE_TYPE']."</td><td>".$row4['MAJOR']."</td><td>".$row4['STUDENT_NATIONALITY']."</td><td>".$row4['DOMESTIC']."</td><td>".$row4['SPECIAL_NEEDS']."</td><td>".$row4['PLACED']."</td><td>".$row4['ADV_NAME']."</td></tr>";
        endwhile;
      }
      function showadv(){
        $mysqli = new mysqli("localhost", "hajela_COMP4150", "root", "hajela_COMP4150") or die(mysqli_error($mysqli));
      	$adv = $mysqli->query("SELECT * FROM advisor") or die(mysqli_error($mysqli));
        //$row2 = $ins->fetch_assoc();
        echo "Advisors:";
        echo "<tr><th>Advisor ID</th><th>NAME</th><th>Position</th><th>Department</th><th>Official Phone Number</th><th>Office Locaation</th></tr>";
        while($row5 = $adv->fetch_assoc()):
    	  echo "<tr><td>".$row5['ADV_ID']."</td><td>".$row5['ADV_NAME']."</td><td>".$row5['ADV_POSITION']."</td><td>".$row5['ADV_DEPT']."</td><td>".$row5['ADV_PHONE']."</td><td>".$row5['ADV_ROOM_NO']."</td></tr>";
        endwhile;
      }
      function staff(){
        $mysqli = new mysqli("localhost", "hajela_COMP4150", "root", "hajela_COMP4150") or die(mysqli_error($mysqli));
      	$stf = $mysqli->query("SELECT * FROM staff;") or die(mysqli_error($mysqli));
        //$row2 = $ins->fetch_assoc();
        echo "Hostal Staff:";
        echo "<tr><th>Employee ID</th><th>NAME</th><th>Home Phone</th><th>DOB</th><th>Gender</th><th>Designation</th><th>Office Location</th><th>Official Phone Number</th><th>Age</th></tr>";
        while($row6 = $stf->fetch_assoc()):
    	  echo "<tr><td>".$row6['EMP_NUM']."</td><td>".$row6['EMP_NAME']."</td><td>".$row6['EMP_HOME_PHONE']."</td><td>".$row6['EMP_DOB']."</td><td>".$row6['EMP_GENDER']."</td><td>".$row6['EMP_DESIGNATION']."</td><td>".$row6['EMP_OFFICE_LOCATION']."</td><td>".$row6['EMP_OFFICE_PHONE']."</td><td>".$row6['EMP_AGE']."</td></tr>";
        endwhile;
      }
      function showinv(){
        $mysqli = new mysqli("localhost", "hajela_COMP4150", "root", "hajela_COMP4150") or die(mysqli_error($mysqli));
      	$inv = $mysqli->query("SELECT * FROM invoice;") or die(mysqli_error($mysqli));
        //$row2 = $ins->fetch_assoc();
        echo "Invoice entries:";
        echo "<tr><th>Invoice No</th><th>Lease No</th><th>Term</th><th>Date of Invoice</th><th>Payment Due</th><th>Due Date</th><th>Student ID</th><th>Name</th><th>Place No</th><th>Room No</th><th>Address</th><th>Mode of Payment</th><th>First Reminder</th><th>Second Reminder</th></tr>";
        while($row7 = $inv->fetch_assoc()):
    	  echo "<tr><td>".$row7['INV_NUM']."</td><td>".$row7['LEASE_NUM']."</td><td>".$row7['INV_TERM_NUM']."</td><td>".$row7['DATE_OF_INV']."</td><td>".$row7['PAYMENT_DUE']."</td><td>".$row7['PAYMENT_DUE_DATE']."</td><td>".$row7['G12NUM']."</td><td>".$row7['STUDENT_NAME']."</td><td>".$row7['PLACENUM']."</td><td>".$row7['ROOM_NUMBER_IN_FLAT']."</td><td>".$row7['FLAT_ADDRESS']."</td><td>".$row7['MODE_OF_PAYMENT']."</td><td>".$row7['FIRST_REMINDER_DATE']."</td><td>".$row7['SECOND_REMINDER_DATE']."</td></tr>";
        endwhile;
      }
      function showflat(){
        $mysqli = new mysqli("localhost", "hajela_COMP4150", "root", "hajela_COMP4150") or die(mysqli_error($mysqli));
      	$flat = $mysqli->query("SELECT * FROM flat") or die(mysqli_error($mysqli));
        //$row2 = $ins->fetch_assoc();
        echo "Flats:";
        echo "<tr><th>Flat ID</th><th>Flat type</th><th>Address</th><th>Residence Number</th><th>No of Rooms</th><th>No of Vacant rooms</th></tr>";
        while($row8 = $flat->fetch_assoc()):
    	  echo "<tr><td>".$row8['FLAT_ID']."</td><td>".$row8['FLAT_TYPE']."</td><td>".$row8['FLAT_ADDRESS']."</td><td>".$row8['RES_NUM']."</td><td>".$row8['NUMBER_OF_ROOMS']."</td><td>".$row8['NUMBER_OF_VACANT_ROOMS']."</td></tr>";
        endwhile;
      }
      function showres(){
        $mysqli = new mysqli("localhost", "hajela_COMP4150", "root", "hajela_COMP4150") or die(mysqli_error($mysqli));
      	$res = $mysqli->query("SELECT * FROM residence") or die(mysqli_error($mysqli));
        //$row2 = $ins->fetch_assoc();
        echo "Residences:";
        echo "<tr><th>Residence Number</th><th>Residence Name</th><th>Residence Address</th><th>Residence Phone Number</th><th>Manager</th><th>Flat Types</th></tr>";
        while($row9 = $res->fetch_assoc()):
    	  echo "<tr><td>".$row9['RES_NUM']."</td><td>".$row9['RES_NAME']."</td><td>".$row9['RES_ADDRESS']."</td><td>".$row9['RES_PHONE']."</td><td>".$row9['RES_MANAGER_NAME']."</td><td>".$row9['FLAT_TYPE']."</td></tr>";
        endwhile;
      }
      function pre_r( $array ){
        echo'<pre>';
        print_r($array);
        echo'</pre>';
      }
     ?>
    <!--BootStrap JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>