


<html lang="en">

<head>
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jacques+Francois&family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style_login.css">
    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Itim&family=Montserrat+Alternates:wght@300&display=swap"
        rel="stylesheet">
    <title>Login - DecVoy</title>
    <style>
 
 
        </style>
</head>

<body>
    <div class="container">
        <div class="welcome">
            <h2>Welcome To</h2>
            <h1 class="title_header"><span class="title"><span class="title_cap">D</span>is<span class="title_cap">V</span>oy</span> </h1>
            <p>Your Travel Club website</p>
        </div>
        <form method="post" action="login.php" class="form_container">
            <h2>Sign in</h2>
            <p class="welcome_pa"></p>
            <input type="text" name="username" placeholder="Username" /><br />
            <input type="password" name="password" placeholder="Password" /><br />

            <input type="submit" value="Sign in!" class="btn_submit"/>

            <div class="new_to_travel">
                <h3>New to <span class="title"><span class="title_cap">D</span>is<span class="title_cap">V</span>oy</span> <a href="signUp.php"> Create an account.</a></h3>
            </div>

        </form>
    </div>
</body>

</html>