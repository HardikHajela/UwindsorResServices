<html>
  <head>
    <meta charset="UTF-8">
      <meta name="description" content=" Inspection(E4) Update Page">
      <meta name="author" content="Rasleen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Inspection write page</title>
    <!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
  </head>
  <body>
    
    <!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <br>
    <h2 class="text-center"> Inspection Update Page</h2> <br>
    <h6 class="text-center" style = "font-weight:300;" > If you enter an existing ID, the database will get updated. <br> If you enter new values, they will get inserted in the database. </h6>
    <div class= "container-fluid col-md-4">
      <br>
      <?php require_once 'process.php'; ?>
      <form action="process.php" method=POST>
        
        <!-- Inspection ID -->
        <label for="inpsectionid">Inspection ID:</label>
        <input type="number" class="form-control" id="inpsectionid" name="inpsectionid" required>
        <div id="idhelp" class="form-text">&ensp;Please enter the inspection id</div>
        <br>
        
        <!-- Inspector name -->
        <label for="inspectorname">Inspector name:</label>
        <input type="text" class="form-control" id="inspectorname" name="inspectorname" required>
        <div id="namehelp" class="form-text">&ensp;Please enter name</div>
        <br>
        
        <!-- Placenum -->
        <label for="placenum">Placenum:</label>
        <input type="text" class="form-control" id="placenum" name="placenum" required>
        <div id="placenumhelp" class="form-text">&ensp;Please enter the placenum</div>
        <br>
        
        <!--Date of Inspection -->
        <label for="dateofi">Date of Inspection:</label>
        <input type="date" class="form-control" id="dateofi" name="dateofi" required>
        <div id="datehelp" class="form-text">&ensp;Please enter the date of inspection</div>
        <br>
        
        <!-- Inspection_outcome-->
        <label for="io">Inspection Outcome:</label>
        <select class="form-control" name="io" id="io" required>
 		 	<option value="unsatisfied">UNSATISFIED</option>
  		 	<option value="satisfied">SATISFIED</option>
		</select>
        <div id="iohelp" class="form-text">&ensp;Please select the outcome</div>
        <br>
        
        <!-- Comments -->
        <label for="comments">Comments:</label>
        <textarea class="form-control" id="comments" name="comments" rows="4" cols="50" required> </textarea>
 
     
        <br>
        <button class="custom-btn btn-3" type="submit" name="submit" id="submit"><span>Update</span></button>
        <button onclick="window.location.href='https://dhaliw91.myweb.cs.uwindsor.ca/4150/emp/delete.php';">Delete</button>

      </form>
      
    </div>
    
  </body>
</html>