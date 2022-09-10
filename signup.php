<?php
$showalert = false;
$showError = false;
if($_SERVER['REQUEST_METHOD']=='POST'){
include 'partials/_dbconnect.php';
$username = $_POST['username'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
//$exists = false;

//check whether this username exists
$existsSql = "SELECT * FROM `users` WHERE username ='$username'";
$result = mysqli_query($conn, $existsSql);
$numExistRows = mysqli_num_rows($result);
if($numExistRows > 0){
    //$exists = true;
    $showError = "username already exists";
    
}
else{
    //$exists = false;
}
if(($password == $cpassword)){
    $sql = "INSERT INTO `users` ( `username`, `password`, `date`) VALUES ('$username', '$password', current_timestamp())";
    $result = mysqli_query($conn, $sql);
    if($result){
        $showalert = true;
    }
    else{
         $showError = "Passwords do not match with each other or it already exists";
    }
}

}
?>


<!doctype html>
<html lang="En">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.rtl.min.css" integrity="sha384-+4j30LffJ4tgIMrq9CwHvn0NjEvmuDCOfk6Rpg2xg7zgOxWWtLtozDEEVvBPgHqE" crossorigin="anonymous">

    <title>Sign up</title>
  </head>
  <body>
  

    <?php
require 'partials/_nav.php'
    ?>
    <?php
    if($showalert){
    echo'
            <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> Your Account is now created and you can login
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
         
        </button>
        </div>';
    }
    if($showError){
        echo' <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success</strong> '.$showError.'ss
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
             
            </button>
            </div>';
        }
    
    
?>
<div class="container my-4">

<h1 class="text-center">Sign Up to our website</h1>
<form action = "/loginsystem/signup.php" method = "POST"> 
            <div class="form-group ">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name ="username" aria-describedby="emailHelp">
                
            <div class="form-group ">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name ="password">
            </div>
            <div class="form-group mb-2">
                <label for="cpassword">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
            </div>
            
            <button type ="submit" class="btn btn-primary ">Sign Up</button>
</form>
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    -->
  </body>
</html>
