<html>
  <head>
    <meta charset="UTF-8">
      <meta name="description" content=" Invoice Update Page">
      <meta name="author" content="Rasleen">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Invoice update page</title>
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
        
        <h2 class="text-center"> Update Invoice</h2> <br>
        <h6 class="text-center" style = "font-weight:300;" > If you enter an existing ID, the database will get updated. <br> If you enter new values, they will get inserted in the database. </h6> <br>

        
        <!-- invoice num -->
        <label for="invnum">Invoice number:</label>
        <input type="text" class="form-control" id="invnum" name="invnum" required>
        <div id="invnumhelp" class="form-text">&ensp;Please enter the invoice number</div>
        <br>
        
        <!-- lease_num -->
        <label for="leasenum">Lease number:</label>
        <input type="text" class="form-control" id="leasenum" name="leasenum" required>
        <div id="leasenumhelp" class="form-text">&ensp;Please enter the lease number</div>
        <br>
        
        <!-- invoice term num -->
        <label for="invterm">Invoice term number:</label>
        <input type="text" class="form-control" id="invterm" name="invterm"  required>
        <div id="invtermhelp" class="form-text">&ensp;Please enter the invoice term number</div>
        <br>
        
        <!-- date of invoice -->
        <label for="dateinv">Date of invoice:</label>
        <input type="date" class="form-control" id="dateinv" name="dateinv" required>
        <div id="dateinvhelp" class="form-text">&ensp;Please enter the date of invoice</div>
        <br>
        
        <!-- payment due date -->
        <label for="payduedate">Payment due date:</label>
        <input type="date" class="form-control" id="payduedate" name="payduedate" required>
        <div id="payduedatehelp" class="form-text">&ensp;Please enter the payment due date</div>
        <br>
        
        <!-- payment due -->
        <label for="ifpaydue">Payment due:</label>
        <select name="ifpaydue" id="ifpaydue" required>
  			<option value="Y">Y</option>
  			<option value="N">N</option>
 		</select>
        <div id="ifpayduehelp" class="form-text">&ensp;Please enter 'Y' is payment is due and 'N' otherwise</div>
        <br>
       
        <!--g12 number -->
        <label for="g12num">G12 number:</label>
        <input type="number" class="form-control" id="g12num" name="g12num" size="9" required>
        <div id="g12numhelp" class="form-text">&ensp;Please enter the grade12 number </div>
        <br>
        
        <!-- student name -->
        <label for="sname">Student name:</label>
        <input type="text" class="form-control" id="sname" name="sname" required>
        <div id="snamehelp" class="form-text">&ensp;Please enter the student name</div>
        <br>
        
        <!-- placenum -->
        <label for="placenum">Placenum:</label>
        <input type="text" class="form-control" id="placenum" name="placenum" required>
        <div id="placenumhelp" class="form-text">&ensp;Please enter the placenum </div>
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
        
        <!-- mode of payment -->
        <label for="paymode">Mode of payment:</label>
        <input type="text" class="form-control" id="paymode" name="paymode">
        <div id="paymodehelp" class="form-text">&ensp;Please enter the mode of payment</div>
        <br>
        
        <!-- first reminder date -->
        <label for="fremdate">First reminder date:</label>
        <input type="date" class="form-control" id="fremdate" name="fremdate" >
        <div id="fremdatehelp" class="form-text">&ensp;Please enter the first reminder date</div>
        <br>
        
        <!-- second reminder date -->
        <label for="sremdate">Second reminder date:</label>
        <input type="date" class="form-control" id="sremdate" name="sremdate" >
        <div id="sremdatehelp" class="form-text">&ensp;Please enter the second reminder date</div>
        <br>
     
        <br>
        <button class="custom-btn btn-3" type="submit" name="invoicesubmit" id="invoicesubmit"><span>Update</span></button>
        <button onclick="window.location.href='https://dhaliw91.myweb.cs.uwindsor.ca/4150/emp/delete.php';">Delete</button>

      </form>
      
    </div>
    
  </body>
</html>