<?php 
include_once 'header.php';
?>
<style>
<?php include 'styles/pages/login.css';?>
</style>

    <section class="signup-form">
    <div class="wrapper signup">
            <h2>Sign Up</h2>
            <form action="includes/signup.inc.php" method="post">
                <div class="input-box">
                    <span class="icon"><i class="fas fa-envelope"></i></span>
                    <input type="text" name="name" placeholder="Full Name">
                    <label>Full Name</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fas fa-envelope"></i></span>
                    <input type="text" name="email" placeholder="Email">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fas fa-envelope"></i></span>
                    <input type="text" name="uid" placeholder="Username">
                    <label>Username</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fas fa-lock"></i></span>
                    <input type="password" name="pwd" placeholder="Password">
                    <label>Password</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fas fa-lock"></i></span>
                    <input type="password" name="pwdrepeat" placeholder="Repeat Password">
                    <label>Repeat Password</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox">Remember Me</label>
                </div>
                <button type="submit" name="submit" class="btn">Sign Up</button>
            </form>


    <?php 
    if (isset($_GET["error"])){
        if($_GET["error"] == "emptyinput") {
        echo "<p class='error'>Fill in all fields</p>";
     } 
    else if ($_GET["error"] == "invaliduid") {
        echo "<p class='error'>Choose a proper username</p>";
    } 
    else if ($_GET["error"] == "invalidemail") {
        echo "<p class='error'>Choose a proper email</p>";
    } 
    else if ($_GET["error"] == "passwordsdontmatch") {
        echo "<p class='error'>Passwords dont match</p>";
    } 
    else if ($_GET["error"] == "stmtfailed") {
        echo "<p class='error'>Something went wrong, try  again</p>";
    } 
    else if ($_GET["error"] == "usernametaken") {
        echo "<p class='error'>Username already taken</p>";
    } 
    else if ($_GET["error"] == "none") {
        echo "<p class='error'>You have succesfully signed up!</p>";
    }
    }
    ?>
</section>




<?php 
include_once 'footer.php';
?>
