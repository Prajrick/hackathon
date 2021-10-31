<?php

 $connection = mysqli_connect('localhost','root','','address update');

$query = "SELECT * FROM address";
$query = "SELECT CONCAT(House_no, ',',Street, ',',Locality, ',',City, ',',District, ',',State, ',',Pin_code) FROM address";

$result = mysqli_query($connection,$query);

if(!$result)
{
    die('Query failed');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="col-sm-6">
    <div class="text-center"><h1>Address Preview.<br>Address added sucessfuly. </h1></div>
    
    <pre>
     <?php        
    while($row = mysqli_fetch_assoc($result))
    {
        
        echo implode(" ",$row);
    }
?>
     </pre>
    
             
</div>
    <?php include "includes/footer.php"; ?>