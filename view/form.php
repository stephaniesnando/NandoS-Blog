<?php
    require_once(__DIR__ . "/../model/config.php");
    require_once(__DIR__ . "/../controller/login-verify.php");
    
    if(!authenticateUser()){
        header("Location: " . $path . "index.php");
        die();
    }
?>

<h1> Create Blog Post</h1> <!-- This page is where the user can create a text post. -->

<form method="post" action="<?php echo $path . "controller/create-post.php";  ?>">
    <div><!-- In this div the user can enter a title to their text post. -->
        <label for="title">Title: </label>
        <input type="text" name="title" />
    </div>
    
    <div><!-- In this div the user can now enter the text they want to post. -->
        <label for="post">Post: </label>
        <textarea name="post"></textarea>
    </div>
    
    <div> <!-- Once the user is done inputting a title and a text post they can click "submit" -->
        <button type="submit">  Submit </button>
    </div>
</form>