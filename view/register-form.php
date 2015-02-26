

<?php
// This is my register form page to register to join my awesome blog page.
    require_once(__DIR__ . "/../model/config.php");
?>


<h1>Register</h1> <!--- My title also known as header is "Register" --->

<form method="post" action="<?php echo $path . "controller/create-user.php";  ?>"> 
    <div> <!-- This div is a section where my user can input their email -->
        <label for="email">Email: </label>
        <input type="text" name="email"/>
    </div>
    
    <div> <!-- This div is where my user can create their username and input it -->
        <label for="username">Username: </label>
        <input type="text" name="username"/>
    </div>
    
    <div> <!-- This div is where my user can make up their password and also input it -->
        <label for="password">Password: </label>
        <input type="password" name="password"/>
    </div>
    
    <div> <!-- And finally, once my user is done inputting their email, username and password, they can click "submit" to submit. -->
        <button type="submit">Submit</button>
    </div>
</form>