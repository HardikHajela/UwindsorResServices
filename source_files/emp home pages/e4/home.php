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
  		font-size: 27px;
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
    <main>
      <div class="container-fluid">
        <br><br>
        <p id="phead">
          <img src="../0.png" width="18%">
          Welcome to the Inspection section!
        </p><br><br>
        
        <div class="row justify-content-around">
                      
          <div class="col-md-3 pcursor">
            <div id="containerimg1">
              <a onclick="showroom()">
  			    <img src="../icons/room.png" alt="room" id="imageimg1" style="opacity: 0.9">
  			    <div id="overlayimg1">
    		      <div id="textimg1">View Database of Rooms</div>
  			    </div>
              </a>
		    </div>
		  </div>
          
          <div class="col-md-3 pcursor">
            <div id="containerimg1">
              <a onclick="showins()"> 
  			    <img src="../icons/ins.png" alt="inspection" id="imageimg1">
  			    <div id="overlayimg1">
    		      <div id="textimg1">View Database of Inspection</div>
  			    </div>
              </a>
		    </div>
		  </div>
          
          <div class="col-md-3">
            <div id="containerimg1">
              <a href="https://dhaliw91.myweb.cs.uwindsor.ca/4150/emp/inspectionwrite.php">
  			    <img src="../icons/insU.png" alt="inspection" id="imageimg1">
  			    <div id="overlayimg1">
    		      <div id="textimg1">Update Database of Inspection</div>
  			    </div>
              </a>
		    </div>
		  </div>
          
         
        </div> <!--Row End-->
        <br><br>
        
        <div id="demo"></div>
        
        <div class="container">
          <table class="table table-dark table-striped table-hover" id="tableshow"></table>
        </div>
		<!--<a onclick="clickMe()"> Click </a>-----------------------Tester------------------->
		<script>
      	  function clickMe(){	//test function
  	  	  document.getElementById("demo").innerHTML = "<?php php_func(); ?>";
      	  }
          function showroom(){
  	  	  document.getElementById("tableshow").innerHTML = "<?php showroom(); ?>";
      	  }
          function showins(){
  	  	  document.getElementById("tableshow").innerHTML = "<?php showins(); ?>";
      	  }
		</script>
    </div>
    
    </main>
    <footer></footer>
    <?php 
    	
      function php_func(){echo "Stay Safe";}
    
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
        echo "<tr><th>InspectionID</th><th>Inspector's Name</th><th>Place number</th><th>Date of Inspection</th><th>Inspection Outcome</th><th>Comments</th></tr>";
        while($row2 = $ins->fetch_assoc()):
    	  echo "<tr><td>".$row2['INSPECTION_ID']."</td><td>".$row2['INSPECTOR_NAME']."</td><td>".$row2['PLACENUM']."</td><td>".$row2['DATE_OF_INSPECTION']."</td><td>".$row2['INSPECTION_OUTCOME']."</td><td>".$row2['COMMENTS']."</td></tr>";
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