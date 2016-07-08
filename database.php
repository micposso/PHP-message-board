<?php
//Connect to MySQL

//this is the easiest solution to connect to a DB

//Declare db connection variable 

$con = mysqli_connect("localhost","root","root","shoutit");

//check database connection

//mysqli_connect_errno();  function to check if connection is successfull

//mysqli_conect_error(); function retunrs error

if(mysqli_connect_errno()){
    echo "Failed connection".mysqli_connect_error();
}else{
   // echo "OK!";
}

?>
    