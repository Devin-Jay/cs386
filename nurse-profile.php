<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse Profile</title>
    <link rel="stylesheet" href="style/generalStyle.css">
    <script src="https://kit.fontawesome.com/c011338aa2.js" crossorigin="anonymous"></script>
    <script src="script.js" defer></script>
</head>
<body>
    <div class="header">           
        <nav id="navBar">
            <img src="images/logo.png" class="logo">
            <ul class="nav-links">
                <li><a href="404ErrorPage.html">Locations</a></li>
                <li><a href="404ErrorPage.html">Benefits</a></li>
                <li><a href="404ErrorPage.html">Accommodation</a></li>
            </ul>
            <a class="login-btn" onclick="popupFunction()">Sign In</a>
        </nav>
        <div class="myPopup" id="myPopup">
            <button class="exit-btn" onclick="closePopup()">X</button>
            <form class="myPopup-Form">
                <h2 class="tenants-login">Sign In</h2>
                <label>Email</label><br>
                <input type="text"><br>
                <label>Password</label><br>
                <input type="text"><br>
            </form>
            <a href="404ErrorPage.html" class="sign-in-btn">Login</a>
            <a href="nurse-register.html" class="sign-in-btn" id="nurse-register">Register</a>
        </div>
    </div>

    <div class="profile-container">
        <h1>User Profile</h1>

        <!-- Move the PHP code here -->
        <?php
        // Sample user data (replace this with data from your database)
        $username = "JohnDoe";
        $email = "john@example.com";
        $age = 30;

        // Display user information
        echo "<div class='profile-info'>";
        echo "<p><strong>Username:</strong> $username</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Age:</strong> $age</p>";
        echo "</div>";
        ?>

        <!-- Move the form and profile picture div here -->
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <input type="file" id="image_input" accept="image/png, image/jpg">
        </form>
        <div id="profile-picture"></div>
    </div>
</body>
</html>
