<?php
include "../conn.php";
session_start(); // Start the session


if (isset($_POST["create"])) {
    // Insert user-defined data
    $_username = $_POST["_username"];
    $_email = $_POST["_email"];
    $_password = $_POST["_password"];
    $_full_name = $_POST["_full_name"];
    $_gender = $_POST["_gender"];
    $_country = $_POST["_country"];
    $_municipality = $_POST["_municipality"];
    $_phone_number = $_POST["_phone_number"];
    $_address = $_POST["_address"];
   //  $_profile_picture = $_POST["_profile_picture"];

    $sql = "INSERT INTO tblcustomer (_username, _email, _password, _full_name, _gender, _country, _municipality, _phone_number, _address) 
    VALUES ('$_username','$_email', '$_password','$_full_name','$_gender', '$_country', '$_municipality', '$_phone_number', '$_address')";
    if (mysqli_query($conn, $sql)) {
        echo "";
        header("Location: successfullyCreatedCustomer.php");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>register</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/loginstylin.css">

</head>
<body>
   
<div class="form-container">

   <form action="" method="post" enctype="multipart/form-data">
      <h3>register now</h3>
 
      <input type="text" name="_username" placeholder="Username" class="box" required>
      <input type="email" name="_email" placeholder="Email" class="box" required>
      <input type="password" name="_password" placeholder="Password" class="box" required>

      <p style="font-weight: bold; font-size: 17pt">Create Profile</p>
      <input type="text" name="_full_name" placeholder="Fullname" class="box" required>
      <input type="text" name="_gender" placeholder="Gender" class="box" required>
      <input type="text" name="_country" placeholder="Country" class="box" id="country" required>
      <input type="text" name="_municipality" placeholder="Municipality" class="box" id="municipality" required>
      <input type="text" name="_phone_number" placeholder="Phone#" class="box" required>
      <input type="text" name="_address" placeholder="Address" class="box" required>
      <!-- <input type="file" name="_profile_picture" class="box" accept="image/jpg, image/jpeg, image/png"> -->
      <input type="submit" name="create" value="register now" class="btn">
      <p>already have an account? <a href="loginCustomer.php">login now</a></p>
   </form>

</div>

</body>
</html>