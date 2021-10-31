<?php
if(isset($_POST['submit']))
{
 $Houseno =  $_POST['House_no'];
 $Street =  $_POST['Street'];          
 $Locality =  $_POST['Locality'];     
 $District =  $_POST['District'];
 $City =  $_POST['City'];
 $State =  $_POST['State'];
 $Pin_code =  $_POST['Pin_code'];
    
$connection = mysqli_connect('localhost','root','','address update');
if($connection)
 {
    echo"We are connected";
 }
else
{
    die("Database Connection failed");
}



$query = "INSERT INTO address(House_no,Street,Locality,District,City,State,Pin_code)";
$query .= "VALUES('$Houseno','$Street','$Locality','$District','$City','$State','$Pin_code')";

$result = mysqli_query($connection,$query);

if(!$result)
{
    die('Query failed');
}
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
 
    
</head>
<body>
<div class="container">
    <div class="col-sm-6">
        <form action="login.php" method="post">
            
            <div class="form-group">
            <center><h1>Address Entry</h1></center>
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
           <input class="btn btn-primary" type="submit" name="submit" value="Submit">
         </form>
</div>
              
            
</body>
</html>