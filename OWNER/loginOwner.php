<?php

include "../conn.php";
session_start();

if(isset($_POST["login"])){
    $_username = $_POST["_username"];
    $_password = $_POST["_password"];

    //select query 
    $sql = "SELECT * FROM tblowner WHERE _username = '$_username' AND _password = '$_password'";
    $result = mysqli_query($conn, $sql);
    //check kung yung data ay nasa dababase
    if(mysqli_num_rows($result) > 0){

        //location
        header("Location: welcomeOwner.php");
        exit();
    } else {
        echo '<script>';
        echo 'alert("Failed to Login. Please check your Username and Password")';
        echo '</script>';
    }
    mysqli_close($conn);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/loginstylin.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>Owner Login</h3>
     
      <input type="text" name="_username" placeholder="Username" class="box" required>
      <input type="password" name="_password" placeholder="Password" class="box" required>
      <input type="submit" name="login" value="login now" class="btn">
      <p>don't have an account? <a href="../option.php">Create account</a></p>
   </form>
   <div id="divOption">
         <a href="loginOwner.php"><button onclick="owner()" style="background-color:rgb(0, 78, 195); color: white" id="owner" class="options">Owner</button></a>
         <a href="../CUSTOMER/loginCustomer.php"><button onclick="customer()" id="customer" class="options">Customer</button></a>
      </div>

</div>
      <!-- <script src="loginOwner.js"></script> -->
</body>
</html>