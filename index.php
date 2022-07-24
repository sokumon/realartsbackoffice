<?php 
include "include/db.php";

if(isset($_POST["submit"]) && !empty($_POST["username"]) && !empty($_POST["password"])){
    $uname=mysqli_real_escape_string($connect,$_POST["username"]);
    $pword=mysqli_real_escape_string($connect,$_POST["password"]);
    $query="SELECT * from user";
    $result=mysqli_query($connect,$query);
    if(mysqli_num_rows($result)>0){ 
        while($row=mysqli_fetch_assoc($result)){
            if($row['username']===$uname && $row['pword']==$pword){
                header("Location: dashboard.php");
            }else{
                echo "Username or password is incorrect";
            }
        }
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
    <title>Login Form </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="Loginbox">
        <img src="pic1.png" class="avatar">
        <h1>Login here</h1>
        <form action="index.php" method="POST"><p>username:</p>
            <input type="text" name="username" required placeholder="Enter Username">
            <p>Password:</p>
            <input type="password" name="password" required placeholder="Enter Password">
            <input type="submit" name="submit" value="Login"><br>
            <a href="a">Don't have an account?</a>
        </div>
        
    </body>


</html>