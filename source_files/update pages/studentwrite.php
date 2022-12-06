<html>
  <head>
    <meta charset="UTF-8">
      <meta name="description" content=" Student Update Page">
      <meta name="author" content="Rasleen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Student update page</title>
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
        
        <h2 class="text-center"> Update student</h2> <br>
        <h6 class="text-center" style = "font-weight:300;" > If you enter an existing ID, the database will get updated. <br> If you enter new values, they will get inserted in the database. </h6> <br>

        
        
        <!-- G12 num -->
        <label for="g12num">G12 number:</label>
        <input type="number" class="form-control" id="g12num" name="g12num" size="9" required>
        <div id="g12numhelp" class="form-text">&ensp;Please enter the Grade12 number</div>
        <br>
        
        <!-- Student name -->
        <label for="sname">Student name:</label>
        <input type="text" class="form-control" id="sname" name="sname" required>
        <div id="snamehelp" class="form-text">&ensp;Please enter the student name</div>
        <br>
        
        <!-- student home address -->
        <label for="shomeadd">Student home address:</label>
        <textarea class="form-control" id="shomeadd" name="shomeadd" rows="4" cols="50" required> </textarea>
        <div id="shomeaddhelp" class="form-text">&ensp;Please enter the student home address</div>
        <br>
        
        <!-- student dob -->
        <label for="sdob">Student DOB:</label>
        <input type="date" class="form-control" id="sdob" name="sdob" required>
        <div id="sdobhelp" class="form-text">&ensp;Please enter the student date of birth</div>
        <br>
        
        <!-- student gender -->
        <label for="sgender">Student gender:</label>
        <input type="text" class="form-control" id="sgender" name="sgender">
        <div id="sgenderhelp" class="form-text">&ensp;Please enter the student gender</div>
        <br>
        
        <!-- level of study -->
        <label for="level">Level of study:</label>
        <input type="text" class="form-control" id="level" name="level" required>
        <div id="levelhelp" class="form-text">&ensp;Please enter the level of study</div>
        <br>
        
        <!-- degree type -->
        <label for="dtype">Degree type:</label>
        <input type="text" class="form-control" id="dtype" name="dtype" required>
        <div id="dtypehelp" class="form-text">&ensp;Please enter the type of degree</div>
        <br>
        
        <!-- major -->
        <label for="major">Major:</label>
        <input type="text" class="form-control" id="major" name="major" required>
        <div id="majorhelp" class="form-text">&ensp;Please enter the major of the student</div>
        <br>
        
        <!-- student nationality -->
        <label for="snationality">Nationality:</label>
        <input type="text" class="form-control" id="snationality" name="snationality" required>
        <div id="snationalityhelp" class="form-text">&ensp;Please enter the nationality of the student</div>
        <br>
        
        <!-- domestic -->
        <label for="dom">Domestic:</label>
        <select class="form-control" name="dom" id="dom" required>
 			 <option value="Y">Y</option>
 		 	 <option value="N">N</option>
		</select>
        <div id="domhelp" class="form-text">&ensp;Please select 'Y' if the student is domestic and 'N' otherwise</div>
        <br>
        
        <!-- special needs -->
        <label for="sneeds">Special needs:</label>
        <textarea class="form-control" id="sneeds" name="sneeds" rows="4" cols="50"> </textarea>
        <div id="sneedshelp" class="form-text">&ensp;Please enter the special needs of the student (if any)</div>
        <br>
        
        <!-- placed -->
        <label for="placed">Placed:</label>
        <select class="form-control" name="placed" id="placed" required>
 			 <option value="Y">Y</option>
 		 	 <option value="N">N</option>
		</select>
        <div id="placedhelp" class="form-text">&ensp;Please select 'Y' if the student is placed and 'N' otherwise</div>
        <br>
        
        <!-- advisor id -->
        <label for="advid">Advisor ID:</label>
        <input type="number" class="form-control" id="advid" name="advid" required>
        <div id="advidhelp" class="form-text">&ensp;Please enter the advisor ID for student's advisor</div>
        <br>
       
        <br>
        <button class="custom-btn btn-3" type="submit" name="studentsubmit" id="studentsubmit"><span>Update</span></button>
        <button onclick="window.location.href='https://dhaliw91.myweb.cs.uwindsor.ca/4150/emp/delete.php';">Delete</button>

      </form>
      
    </div>
    
  </body>
</html>