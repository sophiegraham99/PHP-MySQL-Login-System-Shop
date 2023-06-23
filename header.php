<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Big Bite Doughnuts</title>
    <link rel="stylesheet" href="./styles/style.css"/>
    <link rel="stylesheet" href="./styles/components/navigation.css"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link rel="icon" type="image/x-icon" href="/img/pink-donut.png">
</head>

<body>

<nav id="nav">
        <a href="index.php"><img src="./img/logo.png" class="logo" alt=""></a>

            <ul id="navbar">
                <li><a href="index.php" class="active">Home</a></li>
                <div class="dropdown">
                    <button class="dropbtn">Doughnuts</button>
                    <div class="dropdown-content">
                      <a href="#">Classic</a>
                      <a href="#">Special</a>
                      <a href="#">Iced</a>
                      <a href="#">Glazed</a>
                      <a href="shop.php">Shop All</a>
                    </div>
                  </div> 
                <li><a href="#">Find A Store</a></li>
                <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<li><a href='profile.php'>Profile Page</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Log Out</a></li>";
                }
                else{
                    echo "<li><a href='signup.php'>Sign Up</a></li>";
                    echo "<li><a href='login.php'>Log In</a></li>";
                }
                ?>
                </ul>
            </nav>

    <!-- <nav>
        <div class="navigation">
            <a href="index.php"><img src="" alt=""></a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php">About</a></li>
                <li><a href="index.php">Contact</a></li>
                <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<li><a href='profile.php'>Profile page</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
                }
                else{
                    echo "<li><a href='signup.php'>Sign up</a></li>";
                    echo "<li><a href='login.php'>Log in</a></li>";
                }
                ?>
            </ul>
        </div>
</nav> -->


<script src="js/script.js"></script>