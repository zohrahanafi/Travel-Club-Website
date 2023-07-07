<html>

<head>
  <title>Login</title>
</head>

<body>
  <?php
  // session:
  session_start();
  $_SESSION["Login"] = '';
  $_SESSION ['username'] = '';

  // step 01: get the entered username and password.
  
  $user_name = $_POST["username"];
  $user_password = $_POST["password"];

  // step 02: connection to the db
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "TravelClub";
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // check user connection using the prepare statement():
  $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE userName=? AND userPassword=?");

  mysqli_stmt_bind_param($stmt, "ss", $user_name, $user_password);

  mysqli_stmt_execute($stmt);


  if (mysqli_stmt_fetch($stmt)) {
    $_SESSION["Login"] = "YES";
    $_SESSION ['username'] = $user_name;
    header("Location: home.php");
    return true;
  } else {
    $_SESSION["Login"] = "NO";
    header("Location: home.php");
  }
  ?>

</body>

</html>