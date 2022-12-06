<html>
  <head>
    <meta charset="UTF-8">
      <meta name="description" content=" Hostel staff Update Page">
      <meta name="author" content="Rasleen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Hostel staff update page</title>
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
        
        <h2 class="text-center"> Update hostel staff</h2> <br>
        <h6 class="text-center" style = "font-weight:300;" > If you enter an existing ID, the database will get updated. <br> If you enter new values, they will get inserted in the database. </h6> <br>

        
        <!-- emp num -->
        <label for="empnum">Employee number:</label>
        <input type="number" class="form-control" id="empnum" name="empnum" size="9" required>
        <div id="empnumhelp" class="form-text">&ensp;Please enter the employee number.</div>
        <br>
        
        <!-- emp name -->
        <label for="empname">Employee name:</label>
        <input type="text" class="form-control" id="empname" name="empname" required>
        <div id="empnamehelp" class="form-text">&ensp;Please enter the employee name.</div>
        <br>
            
        <!-- emp home phone -->
        <label for="ehph">Employee home phone:</label>
        <input type="number" class="form-control" id="ehph" name="ehph" required>
        <div id="ehphhelp" class="form-text">&ensp;Please enter the employee home phone number.</div>
        <br>
        
        <!-- emp dob -->
        <label for="empdob">Employee date of birth:</label>
        <input type="date" class="form-control" id="empdob" name="empdob" required>
        <div id="empdobhelp" class="form-text">&ensp;Please enter the employee date of birth.</div>
        <br>
        
         <!-- emp gender -->
        <label for="empgender">Employee gender:</label>
        <input type="text" class="form-control" id="empgender" name="empgender" required>
        <div id="empgenderhelp" class="form-text">&ensp;Please enter the employee gender.</div>
        <br>
        
         <!-- emp designation -->
        <label for="empdsn">Employee designation:</label>
        <input type="text" class="form-control" id="empdsn" name="empdsn" required>
        <div id="empdsnhelp" class="form-text">&ensp;Please enter the employee designation.</div>
        <br>
        
         <!-- emp office location -->
        <label for="emploc">Employee office location:</label>
        <input type="text" class="form-control" id="emploc" name="emploc" required>
        <div id="emplochelp" class="form-text">&ensp;Please enter the employee office location.</div>
        <br>
        
         <!-- emp office phone -->
        <label for="eoph">Employee office phone:</label>
        <input type="number" class="form-control" id="eoph" name="eoph" required>
        <div id="eophhelp" class="form-text">&ensp;Please enter the employee office phone number.</div>
        <br>
        
         <!-- emp age -->
        <label for="empage">Employee age:</label>
        <input type="text" class="form-control" id="empage" name="empage" required>
        <div id="empagehelp" class="form-text">&ensp;Please enter the employee age.</div>
        <br>
        
     
        <br>
        <button class="custom-btn btn-3" type="submit" name="staffsubmit" id="staffsubmit"><span>Update</span></button>
        <button onclick="window.location.href='https://dhaliw91.myweb.cs.uwindsor.ca/4150/emp/delete.php';">Delete</button>
      </form>
      
    </div>
    
  </body>
</html>