<!-- 
Author: Zohra HANAFI
Date: 2/20/2023
file: SignUp.php

-->
<?php
// session:
session_start();
$_SESSION['message'] = '';
$_SESSION["Login"] = '';
//connection to the db variables
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "TravelClub";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create database if it does not exists
$sql = "CREATE DATABASE IF NOT EXISTS $dbname";
if (!mysqli_query($conn, $sql)) {
  echo "Error creating database: " . mysqli_error($conn);
}

// Reconnect with the name of the database:
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// sql query to create table
$sql = "CREATE TABLE if not exists Users (
    userID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstName VARCHAR(30) NOT NULL,
    lastName VARCHAR(30) NOT NULL,
    email VARCHAR(50) NOT NULL,
    userName VARCHAR (50) NOT NULL,
    userPassword VARCHAR (50) NOT NULL,
    phone VARCHAR (15),
    gender CHAR (1))
    ";

if (!$conn->query($sql) === TRUE) {
  echo "Error creating table: " . $conn->error;

}
//verify that the method is post:
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  //the two passwords are matching (equals)
  if ($_POST['password'] == $_POST['confirmPass']) {
    //set up all the fields
    $userName_user = $_POST['username'];
    $email = $_POST['email'];
    //md5 hash password security
    $passwordUser = $_POST['password'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];
    if ($_POST['gender'] == 'male') {
      $gender = 'M';
    } else {
      $gender = 'F';
    }
    //set the variables to the session to send data to another pages.
    $_SESSION['username'] = $userName_user;
    $_SESSION['firstName'] = $firstName;
    $_SESSION['lastName'] = $lastName;
    $_SESSION['email'] = $email;

    //the insert query:
    $insertQuery = " INSERT INTO users (firstName, lastName, email, userName, userPassword, phone, gender) 
    VALUES ('$firstName','$lastName','$email','$userName_user','$passwordUser','$phone','$gender')";

    if ($conn->query($insertQuery) === TRUE) {
      $_SESSION["Login"] = "YES";
      header("location: home.php");
    } else {
      $_SESSION["Login"] = "NO";
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
  //passwords are not equals
  else {
    $_SESSION['message'] = 'Please retype your password !';
  }
}
mysqli_close($conn);

?>


<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign up - Travel Club -</title>
  <!-- fonts: -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&family=Lato&display=swap" rel="stylesheet">
  <!-- CSS -->
  <link rel="stylesheet" href="css/style_register.css">
  <!-- fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Itim&family=Montserrat+Alternates:wght@300&display=swap"
        rel="stylesheet">
</head>

<body>
  <main>
    <div class="container">
      <h1>Welcome to <span class="title"><span class="title_cap">D</span>is<span class="title_cap">V</span>oy</span></h1>
      <h2>Sign up</h2>
      <form method="post" action="signUp.php" class="form_container">
        <div class="alert alert-error">
          <?= $_SESSION['message'] ?>
        </div>
        <div class="row">
          <div class="col-6">
            <input type="text" placeholder="First name" name="firstName" required>
          </div>
          <div class="col-6">
            <input type="text" placeholder="Last name" name="lastName" required>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <input type="email" placeholder="email" name="email" required>
          </div>
          <div class="col-6">
            <input type="text" placeholder="Username" name="username" required>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <input type="password" placeholder="Your password" name="password" required>
          </div>
          <div class="col-6">
            <input type="password" placeholder="Confirm your password" name="confirmPass" required>
          </div>
        </div>
        <div class="row">
          <div class="col-6">
            <input type="tel" name="phone" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="Phone number" required>
          </div>
          <div class="col-6">
            <label> Gender:</label>
            <input type="radio" name="gender" value="male">
            <label for="male"> Male</label>
            <input type="radio" name="gender" value="female">
            <label for="female"> Female</label>
          </div>
        </div>
        <div class="row button">
          <input type="submit" value="Register" class="btn_submit">
        </div>

      </form>

      <div class="new_to_travel">
        <h3>Already a member? <a href="index.php"> Login here</a></h3>
      </div>
    </div>


  </main>
</body>

</html>