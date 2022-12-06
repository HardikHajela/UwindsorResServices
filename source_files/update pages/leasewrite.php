<html>
  <head>
    <meta charset="UTF-8">
      <meta name="description" content=" Lease Update Page">
      <meta name="author" content="Rasleen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Lease update page</title>
    <!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
  </head>
  <body>
    
    <!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <div class= "container-fluid col-md-4">
      <br>
      <?php require_once 'process.php'; ?>
      <form action="process.php" method=POST>
        
        <h2 class="text-center"> Update Lease</h2> <br>
        <h6 class="text-center" style = "font-weight:300;" > If you enter an existing ID, the database will get updated. <br> If you enter new values, they will get inserted in the database. </h6> <br>

        <!-- lease num -->
        <label for="leasenum">Lease number:</label>
        <input type="text" class="form-control" id="leasenum" name="leasenum" required>
        <div id="leasenumhelp" class="form-text">&ensp;Please enter the lease number</div>
        <br>
        
        <!-- lease_term -->
        <label for="leaseterm">Lease term:</label>
        <input type="number" class="form-control" id="leaseterm" name="leaseterm" required>
        <div id="leasetermhelp" class="form-text">&ensp;Please enter the lease term</div>
        <br>
        
        <!-- G12 num -->
        <label for="g12num">G12 number:</label>
        <input type="text" class="form-control" id="g12num" name="g12num" required>
        <div id="g12numhelp" class="form-text">&ensp;Please enter the Grade12 number</div>
        <br>
        
        <!-- Student name -->
        <label for="sname">Student name:</label>
        <input type="text" class="form-control" id="sname" name="sname" required>
        <div id="snamehelp" class="form-text">&ensp;Please enter the student name</div>
        <br>
        
        <!-- Placenum -->
        <label for="placenum">Placenum:</label>
        <input type="text" class="form-control" id="placenum" name="placenum" required>
        <div id="placenumhelp" class="form-text">&ensp;Please enter the placenum</div>
        <br>
        
        <!--Room num in flat -->
        <label for="roomnum">Room Number in flat:</label>
        <input type="number" class="form-control" id="roomnum" name="roomnum" required>
        <div id="roomnumhelp" class="form-text">&ensp;Please enter the room number in flat </div>
        <br>
        
        <!-- flat address -->
        <label for="flatadd">Flat Address:</label>
       <textarea  class="form-control" id="flatadd" name="flatadd" rows="4" cols="25"> </textarea>
        <div id="flataddhelp" class="form-text">&ensp;Please enter the flat address</div>
        <br>
        
        <!-- monthly rent -->
        <label for="mrent">Monthly rent:</label>
        <input type="text" class="form-control" id="mrent" name="mrent" required>
        <div id="mrenthelp" class="form-text">&ensp;Please enter the monthly rent</div>
        <br>
        
        <!-- move in date -->
        <label for="mindate">Move in date:</label>
        <input type="date" class="form-control" id="mindate" name="mindate" required>
        <div id="mindatehelp" class="form-text">&ensp;Please enter the move in date</div>
        <br>
        
        <!-- move out date -->
        <label for="moutdate">Move out date:</label>
        <input type="date" class="form-control" id="moutdate" name="moutdate" required>
        <div id="moutdatehelp" class="form-text">&ensp;Please enter the move out date</div>
        <br>
        
        <!-- projected move in date -->
        <label for="pmindate">Projected move in date:</label>
        <input type="date" class="form-control" id="pmindate" name="pmindate"  required>
        <div id="pmindatehelp" class="form-text">&ensp;Please enter the projected move in date</div>
        <br>
        
        <!-- projected move out date -->
        <label for="pmoutdate">Projected move out date:</label>
        <input type="date" class="form-control" id="pmoutdate" name="pmoutdate" required>
        <div id="pmooutdatehelp" class="form-text">&ensp;Please enter the projected move out date</div>
        <br>
        
     
        <br>
        <button class="custom-btn btn-3" type="submit" name="leasesubmit" id="leasesubmit"><span>Update</span></button>
        <button onclick="window.location.href='https://dhaliw91.myweb.cs.uwindsor.ca/4150/emp/delete.php';">Delete</button>

      </form>
      
    </div>
    
  </body>
</html>