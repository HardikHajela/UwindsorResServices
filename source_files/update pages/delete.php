<html>
  <head>
    <meta charset="UTF-8">
      <meta name="description" content=" Delete Page">
      <meta name="author" content="Rasleen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Delete page</title>
    <!-- CSS only -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    
  </head>
  <body>
    
    <!-- JavaScript Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <div class= "container-fluid col-md-5">
      <br>
      <?php require_once 'process.php'; ?>
      <form action="process.php" method=POST>
        
        <h2 class="text-center"> Delete Page</h2> <br>

       
        <!-- ID -->
        <label for="id">ID:</label>
        <input type="number" class="form-control" id="id" name="id"required>
        <div id="idhelp" class="form-text">&ensp;Please enter the required ID.</div>
        <br>
        
        <!-- Dropdown -->
        <label for="table">CHOOSE THE TABLE YOU WANT TO DELETE AN ENTRY FROM:</label><br><br>
  			<select id="table" name="table">
  			  <option value="advisor" id="advisor">Advisor</option>
   			  <option value="assign" id="assign">Assign</option>
   			  <option value="flat" id="flat">Flat</option>
 		      <option value="inspection" id="inspection">Inspection</option>
              <option value="invoice" id="invoice">Invoice</option>
              <option value="lease" id="lease">Lease</option>
              <option value="residence" id="residence">Residence</option>
              <option value="room" id="room">Room</option>
              <option value="staff" id="staff">Staff</option>
              <option value="student" id="student">Student</option>
            </select>        
        <br>
        <br>
        <button class="custom-btn btn-3" type="submit" name="delete" id="delete"><span>Delete</span></button>
      </form>
      
    </div>
    
  </body>
</html>