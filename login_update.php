<?php  include "db.php"; ?>
<?php include "functions.php"; ?>

 <?php
 if(isset($_POST['submit']))
    updateTable();
?>

<!DOCTYPE html>
<html lang="en">    
<head>
    <meta charset="UTF-8">
    <title>Update Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="col-sm-6">
    <div class="text-center"><h1>Update</h1></div>
    <form action="login_update.php" method="post">
        

            
            <div class="form-group">
            <center><h1>Address Entry</h1></center>
                        <div class="form-group">
                 <select name="House_no" Houseno="" >
                  
                   <?php
                    showAllData();
                    ?>
                 </select>
                </div>
               <lable for="House_no"><b>House No</b></lable>
                <input type="number" name="House_no" class="form-control" required>
            </div>
            <div class="form-group">
                <lable for="street"><b>Street</b></lable>
                <input type="text" name="Street" class="form-control" required>
            </div>
            <div class="form-group">
                <lable for="Locality"><b>Locality</b></lable>
                <input type="text" name="Locality" class="form-control" required>
            </div>
            <div class="form-group">
                <lable for="District"><b>District</b></lable>
                <input type="text" name="District" class="form-control" required>
            </div>
            <div class="form-group">
                <lable for="City"><b>City</b></lable>
                <input type="text" name="City" class="form-control" required>
            </div>
            <div class="form-group">
                <lable for="State"><b>State</b></lable>
                <input type="text" name="State" class="form-control" required>
            </div>
            <div class="form-group">
                <lable for="Pin_code"><b>Pin Code</b></lable>
                <input type="number" name="Pin_code" class="form-control" required>
            </div>
                
             <input class="btn btn-primary" type="submit" name="submit" value="UPDATE">
            </form>
             
</div>
<?php include "includes/footer.php"; ?>
