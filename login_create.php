
<?php  include "db.php"; ?>
<?php include "functions.php"; ?>

<?php
createRow();
?>

<?php include "includes/header.php"; ?>

<div class="container">
    <div class="col-sm-6">
       <div class="text-center"><h1>Welcome!</h1></div>
        <form action="login_create.php" method="post">
            
           <div class="form-group">
            <center><h1>Enter Your Address.</h1></center>
               <lable for="House_no"><b>House No</b></lable>
                <input type="number" name="House_no" class="form-control" required>
            </div>
            <div class="form-group">
                <lable for="street"><b>Street</b></lable>
                <input type="text" name="Street" class="form-control" required>
            </div>
            <div class="form-group">
                <lable for="Locality"><b>Locality/Area</b></lable>
                <input type="text" name="Locality" class="form-control" required>
            </div>
            <div class="form-group">
                <lable for="City"><b>City</b></lable>
                <input type="text" name="City" class="form-control" required>
            </div>
            <div class="form-group">
                <lable for="District"><b>District</b></lable>
                <input type="text" name="District" class="form-control" required>
            </div>
            <div class="form-group">
                <lable for="State"><b>State</b></lable>
                <input type="text" name="State" class="form-control" required>
            </div>
            <div class="form-group">
                <lable for="Pin_code"><b>Pin Code</b></lable>
                <input type="number" name="Pin_code" class="form-control" required>
            </div>
             <input class="btn btn-primary" type="submit" name="submit" value="CREATE">
         </form>
</div>
    
              
            
<?php include "includes/footer.php"; ?>