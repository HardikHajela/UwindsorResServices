<html>
  <head>
    <meta charset="UTF-8">
      <meta name="description" content=" Advisor Update Page">
      <meta name="author" content="Rasleen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Advisor update page</title>
    <!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
  </head>
  <body>
    
    <!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <div class= "container-fluid col-md-4 ">
      <br>
      <?php require_once 'process.php'; ?>
      <form action="process.php" method=POST>
        
        <h2 class="text-center"> Update advisor</h2> <br>
        <h6 class="text-center" style = "font-weight:300;" > If you enter an existing ID, the database will get updated. <br> If you enter new values, they will get inserted in the database. </h6> <br>
        
        <!-- advisor id -->
        <label for="advid">Advisor ID:</label>
        <input type="number" class="form-control" id="advid" name="advid" required>
        <div id="advidhelp" class="form-text">&ensp;Please enter the advisor ID for student's advisor.</div>
        <br>
        
        <!-- Advisor name -->
        <label for="advname">Advisor name:</label>
        <input type="text" class="form-control" id="advname" name="advname" required>
        <div id="advnamehelp" class="form-text">&ensp;Please enter the advisor name.</div>
        <br>
        
        <!-- Advisor position -->
        <label for="advpos">Advisor position:</label>
        <input type="text" class="form-control" id="advpos" name="advpos" required>
        <div id="advposhelp" class="form-text">&ensp;Please enter the advisor position.</div>
        <br>
        
        <!-- Advisor department -->
        <label for="advdept">Advisor department:</label>
        <input type="text" class="form-control" id="advdept" name="advdept" required>
        <div id="advdepthelp" class="form-text">&ensp;Please enter the advisor department.</div>
        <br>
        
        <!-- Advisor phone -->
        <label for="advphone">Advisor phone:</label>
        <input type="number" class="form-control" id="advphone" name="advphone" required>
        <div id="advphonehelp" class="form-text">&ensp;Please enter the advisor phone number.</div>
        <br>
        
        <!-- Advisor room number -->
        <label for="advroom">Advisor room number:</label>
        <input type="text" class="form-control" id="advroom" name="advroom" required>
        <div id="advroomhelp" class="form-text">&ensp;Please enter the advisor room number.</div>
        <br>
        
      
        <br>
        <button class="custom-btn btn-3" type="submit" name="advisorsubmit" id="advisorsubmit"><span>Update</span></button>
        <button onclick="window.location.href='https://dhaliw91.myweb.cs.uwindsor.ca/4150/emp/delete.php';">Delete</button>

      </form> 
    </div>
    
  </body>
</html>