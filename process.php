<?php

include 'database.php';

//Check if form was submitted using the isset function and the global _POST variable

if(isset($_POST['submit'])){
    
    //sanitaze the data in the post varible comming from the form
    
    $user = mysqli_real_escape_string($con, $_POST['user']);
    $message = mysqli_real_escape_string($con, $_POST['message']);
    
    //set timezone
    
    date_default_timezone_set('America/New York');
    $time = date('hi:i:s a', time());
    
    //validate the input by checking if there is content in the fields
    
  
    
    if(!isset($user) || $user == '' || !isset($message) || $message == ''){
        echo 'BAD!!!!';
        $error_messsage = "Please fill in your name and a message";
        header("Location: index.php?error=".urlencode($error_messsage));
        exit();
    } else {
        
        //declare the query in a variable
        $insert = "INSERT INTO shouts (user, message, time)
                VALUES ('$user', '$message', '$time')";
    
        //check if there is a database connection and the values are inserted succesfully
        
        if(!mysqli_query($con, $insert)){
            die('Error: '.mysqli_error($con));
        } else {
            echo "values inserted";
            //if insertion is successful, use the header function to redirect the page
            header("Location: index.php");
            exit();
        }
        
    }
    
    
    
    
}




?>