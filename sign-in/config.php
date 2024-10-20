<?php

$servername = 'localhost';

$username = 'root'; 

$password = ''; 

$database = 'vcan'; 

$conn = mysqli_connect($servername,$username,$password,$database);
 if($conn){ echo'Successfull';
    }else{
die("Connection failed:".mysqli_connect_error());
 }
?> 