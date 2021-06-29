<!DOCTYPE html>
<html>
<head>
  <title>Add Records in Database</title>
</head>
<body>

<?php

//create.connection


$connection = new mysqli("localhost" , "root" ,"" , "control" );
        
if(!$connection)
{
    die("Connection failed: " . mysqli_connect_error());
}
echo "Database connection successfully . ";

//close

$inser_data = $connection -> query("INSERT INTO report(OF_ON , motor1, motor2 ,motor3 , motor4 , motor5 , motor6) VALUES ('1','90', '90' ,'90' ,'90' , '90' , '90')");

    if($inser_data === TRUE)
    {
        echo "add to data";
    }
    else
    {
        echo "ERROR".$connection -> error;
     }

 
?>
<!--// Close  -->
</body>
</html>



 