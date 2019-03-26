<?php
//for login purpose

if(isset($_POST['adminlogin']))
{

   $user="admin@gmail.com";
   $pas="admin";
   $username =$_POST['emailid'];
   $password =$_POST['password'];
   
    if($username=="admin@gmail.com" && $password=="admin"){
    $db = mysqli_connect("localhost","root","","user");

    $query="SELECT id , username, email FROM info ";
    $variable= mysqli_query($db,$query);

    
    if(mysqli_num_rows($variable)>0)
    {
       while ( $row = mysqli_fetch_assoc($variable)) {
            
             echo "Id: " . $row["id"].  " -Name:" .$row["username"]. " -Email: ". $row["email"]. "<br> ";     
        }
    }

}
    else
    {
        echo "please enter correct username and password!";
    }

    mysqli_close($db);

}

?>