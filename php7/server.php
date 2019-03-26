<?php
//for login purpose

if(isset($_POST['login']))
{

   
   $username =$_POST['email'];
   $password =$_POST['password'];
   

    $db = mysqli_connect("localhost","root","","user");

    $query="SELECT id , username, email FROM info WHERE password='$password'";
    $variable=mysqli_query($db,$query);
    $row=mysqli_fetch_assoc($variable);
    
    if(mysqli_num_rows(mysqli_query($db,$query))>0)
    {
            echo "Id: " . $row["id"].  " -Name:" .$row["username"]. " -Email: ". $row["email"]. " ";     
    }
    else{
        echo "seems like you haven't registered yet";
    }

    mysqli_close($db);

}
?>