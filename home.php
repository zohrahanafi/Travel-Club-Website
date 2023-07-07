<?php

session_start();

// If the user is not logged in correctly, we send him/her to the login page
if ($_SESSION["Login"] != "YES") {
    header("Location: index.php");
}

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--  CSS FILE -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style_home.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Itim&family=Montserrat+Alternates:wght@300&display=swap"
        rel="stylesheet">
    <title>Travel Website</title>
</head>

<body>
    <?php
    include('header.php');
    ?>
    <div id="content">
        <?php
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
            $display = $page . '.php';
            include($display);
        } else {
            include('main.php');
        }
        ?>


    </div>
    <?php
    include('footer.php');
    ?>
</body>

</html>