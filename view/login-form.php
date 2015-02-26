<?php
// This is my login form wgere my user can log into their account and start blooging/posting their life away.
    require_once(__DIR__ . "/../model/config.php");
?>

<h1>Login</h1> <!-- This header is basically a title, "Login" which lets the user know they're on the login page. -->

<form method="post" action="<?php echo $path . "controller/login-user.php" ?>">
    <div><!-- Into this div the user can input their username which they created on the register page -->
        <label for="username">Username: </label>
        <input type="text" name="username"/>
    </div>
    
    <div><!-- Into this div my user can input their username which they also should have previously created on the register page -->
        <label for="password">Password: </label>
        <input type="password" name="password"/>
    </div>
    
    <div <!--When my user is done entering their username and password they can click "submit" -->
        <button type="submit">Submit</button>
    </div>
</form>