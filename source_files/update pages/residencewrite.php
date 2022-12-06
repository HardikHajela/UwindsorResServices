<html>
  <head>
    <meta charset="UTF-8">
      <meta name="description" content=" Residence Update Page">
      <meta name="author" content="Rasleen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Residence update page</title>
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
        
        <h2 class="text-center"> Update residence</h2> <br>
         <h6 class="text-center" style = "font-weight:300;" > If you enter an existing ID, the database will get updated. <br> If you enter new values, they will get inserted in the database. </h6> <br>

        
         <!-- res num -->
        <label for="resnum">Residence number:</label>
        <input type="text" class="form-control" id="resnum" name="resnum" required>
        <div id="resnumhelp" class="form-text">&ensp;Please enter the residence number.</div>
        <br>
        
        <!-- res name -->
        <label for="resname">Residence name:</label>
        <input type="text" class="form-control" id="resname" name="resname" required>
        <div id="resnamehelp" class="form-text">&ensp;Please enter the residence name.</div>
        <br>
             
         <!-- res address -->
        <label for="resadd">Residence address:</label>
        <textarea class="form-control" id="resadd" name="resadd" rows="4" cols="50" required></textarea>
        <div id="resaddhelp" class="form-text">&ensp;Please enter the residence address. </div>
        <br>  
        
        <!-- res phone-->
        <label for="resphone">Residence phone-number:</label>
        <input type="number" class="form-control" id="resphone" name="resphone" required>
        <div id="resphonehelp" class="form-text">&ensp;Please enter the residence phone-number.</div>
        <br>
        
        <!-- res manager name -->
        <label for="resmanager">Residence manager name:</label>
        <input type="text" class="form-control" id="resmanager" name="resmanager" required>
        <div id="resmanagerhelp" class="form-text">&ensp;Please enter the residence manager name.</div>
        <br>
        
        <!-- Flat type -->
        <label for="flattype">Flat type:</label>
        <input type="text" class="form-control" id="flattype" name="flattype" required>
        <div id="flattypehelp" class="form-text">&ensp;Please enter the flat type.</div>
        <br>
     
        <br>
        <button class="custom-btn btn-3" type="submit" name="residencesubmit" id="residencesubmit"><span>Update</span></button>
        <button onclick="window.location.href='https://dhaliw91.myweb.cs.uwindsor.ca/4150/emp/delete.php';">Delete</button>

      </form>
      
    </div>
    
  </body>
</html>