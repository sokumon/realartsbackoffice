<?php 
include "include/db.php";
if(isset($_POST["submit"]) && !empty($_POST["username"]) && !empty($_POST["password"]) && !empty($_POST["dept"])){
    $uname=mysqli_real_escape_string($connect,$_POST["username"]);
    $pword=mysqli_real_escape_string($connect,$_POST["password"]);
    $dept=mysqli_real_escape_string($connect,$_POST["dept"]);
    $sql = "INSERT INTO `user`(username,pword,department)VALUES ('$uname','$pword','$dept')";
    if(mysqli_query($connect,$sql)){;
        echo "Data Sucessfully Entered";
    }
    else{
        echo "try again";
    }
}else{
    echo "";
}

?>
<!DOCTYPE html>
<html>
    <head>
    <title>Make New User</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="Loginbox">
        <img src="pic1.png" class="avatar">
        <h1>Add New User</h1>
        <h2></h2>
        <form action="makeuser.php" method="POST"><p>Username:</p>
            <input type="text" name="username" required placeholder="Enter Username">
            <p>Password:</p>
            <input type="password" id="password" name="password" required placeholder="Enter Password">
            <label for="cars">Choose a department</label>
            <select id="cars" name="department">
                <option value="enquiry">Enquiry</option>
                <option value="sitevisit">Site Visit</option>
                <option value="materials">Materials</option>
                <option value="installer">Installer</option>
            </select>
            <input type="hidden" name="dept" id="dept">
            <input type="submit" id="submit" name="submit" value="Create User"><br>
        </form>
        <button onclick="writeP();">Generate Password</button>
        </div>
        
    </body>
    <script src="makeuser.js"></script>

</html>