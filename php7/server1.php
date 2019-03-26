<?php

if(isset($_POST['register']) ) 
{
    $user=$_POST['name'];
    // echo "your name is ".$user." ";
    // echo "<br>";
    $email=$_POST['email'] ;
    // echo "email id is ".$em."!";
    // echo "<br>";
    // echo "and gender is ".$gen." ";
    $password=$_POST['password'];
    $confirmpassword=$_POST['confirmpassword'];
    
    //for the registration purpose
    if($password!=$confirmpassword)
    {
        echo "Passwords are not same.";
        
    }
    
    $db = mysqli_connect("localhost","root","","user");
    $query="INSERT INTO `info`( `username`, `password`, `email`) VALUES ('$user','$password','$email')";

    if(mysqli_query($db,$query)){
        echo "you have succesfully logged in";
    }else{
        echo "Error" .$query. "<br>".mysqli_error($db);
    }

     mysqli_close($db);
}