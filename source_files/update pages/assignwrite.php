<html>
  <head>
    <meta charset="UTF-8">
      <meta name="description" content=" Assign Update Page">
      <meta name="author" content="Rasleen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Assign update page</title>
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
        
        <h2 class="text-center"> Update assign</h2> <br>
        <h6 class="text-center" style = "font-weight:300;" > If you enter an existing ID, the database will get updated. <br> If you enter new values, they will get inserted in the database. </h6> <br>

        
        <!-- G12 num -->
        <label for="g12num">G12 number:</label>
        <input type="number" class="form-control" id="g12num" name="g12num" size="9" required>
        <div id="g12numhelp" class="form-text">&ensp;Please enter the Grade12 number.</div>
        <br>
        
        <!-- Placenum -->
        <label for="placenum">Placenum:</label>
        <input type="text" class="form-control" id="placenum" name="placenum" required>
        <div id="placenumhelp" class="form-text">&ensp;Please enter the placenum.</div>
        <br>
               
        <!-- monthly rent -->
        <label for="mrent">Monthly rent:</label>
        <input type="text" class="form-control" id="mrent" name="mrent" required>
        <div id="mrenthelp" class="form-text">&ensp;Please enter the monthly rent.</div>
        <br>
        
     
        <br>
        <button class="custom-btn btn-3" type="submit" name="assignsubmit" id="assignsubmit"><span>Update</span></button>
        <button onclick="window.location.href='https://dhaliw91.myweb.cs.uwindsor.ca/4150/emp/delete.php';">Delete</button>
      </form>
      
    </div>
    
  </body>
</html>