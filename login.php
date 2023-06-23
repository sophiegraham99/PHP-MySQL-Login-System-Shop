<?php 
include_once 'header.php';
?>
<style>
<?php include 'styles/pages/login.css';?>
</style>

<section class="signup-form">
    <div class="wrapper">
            <h2>Login</h2>
            <form action="includes/login.inc.php" method="post">
                <div class="input-box">
                    <span class="icon"><i class="fas fa-envelope"></i></span>
                    <input type="text" name="uid" placeholder="Username/Email">
                    <label>Email</label>
                </div>
                <div class="input-box">
                    <span class="icon"><i class="fas fa-lock"></i></span>
                    <input type="password" name="pwd" placeholder="Password">
                    <label>Password</label>
                </div>
                <div class="remember">
                    <label><input type="checkbox">Remember Me</label>
                </div>
                <button type="submit" name="submit" class="btn">Log In</button>
                <div class="login-register">
                    <p>Don't have an account?
                        <a href="signup.php" class="register-link">Register</a>
                    </p>
                </div>
            </form>

    <?php 
        if (isset($_GET["error"])){
        if($_GET["error"] == "emptyinput") {
            echo "<p class='error'>Fill in all fields!</p>";
        } 
        else if ($_GET["error"] == "wronglogin") {
            echo "<p class='error'>Incorrect login info!</p>";
        } 
        }
    ?>
    </div>
</section>


<?php 
include_once 'footer.php';
?>
