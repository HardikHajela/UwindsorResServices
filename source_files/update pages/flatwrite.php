<html>
  <head>
    <meta charset="UTF-8">
      <meta name="description" content=" Flat Update Page">
      <meta name="author" content="Rasleen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Flat update page</title>
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
        
        <h2 class="text-center"> Update flat</h2> <br>
        <h6 class="text-center" style = "font-weight:300;" > If you enter an existing ID, the database will get updated. <br> If you enter new values, they will get inserted in the database. </h6> <br>
        
        <!-- flat id -->
        <label for="flatid">Flat id:</label>
        <input type="number" class="form-control" id="flatid" name="flatid" required>
        <div id="flatidhelp" class="form-text">&ensp;Please enter the flat id.</div>
        <br>
        
        <!-- Flat type -->
        <label for="flattype">Flat type:</label>
        <input type="text" class="form-control" id="flattype" name="flattype" required>
        <div id="flattypehelp" class="form-text">&ensp;Please enter the flat type.</div>
        <br>
               
        <!-- Flat address -->
        <label for="flatadd">Flat address:</label>
        <input type="text" class="form-control" id="flatadd" name="flatadd" required>
        <div id="flataddhelp" class="form-text">&ensp;Please enter the flat address.</div>
        <br>
        
        <!-- res number -->
        <label for="resnum">Residence number:</label>
        <input type="number" class="form-control" id="resnum" name="resnum" required>
        <div id="resnumhelp" class="form-text">&ensp;Please enter the residence number.</div>
        <br>
        
        <!-- number of rooms -->
        <label for="rnum">Number of rooms:</label>
        <input type="number" class="form-control" id="rnum" name="rnum" required>
        <div id="rnumhelp" class="form-text">&ensp;Please enter the number of rooms.</div>
        <br>
        
        <!-- number of vacant rooms -->
        <label for="vroom">Number of vacant rooms:</label>
        <input type="number" class="form-control" id="vroom" name="vroom" required>
        <div id="vroomhelp" class="form-text">&ensp;Please enter the number of vacant rooms.</div>
        <br>    
     
        <br>
        <button class="custom-btn btn-3" type="submit" name="flatsubmit" id="flatsubmit"><span>Update</span></button>
        <button onclick="window.location.href='https://dhaliw91.myweb.cs.uwindsor.ca/4150/emp/delete.php';">Delete</button>
      </form>
      
    </div>
    
  </body>
</html>