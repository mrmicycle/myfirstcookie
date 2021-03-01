<?php
    // on user submit, their information is passed to this file.
    $username = $_GET['user'][0];
    $email = $_GET['user'][1];
    $password = $_GET['user'][2];

    // checking if the password is correct.
    if ($password != "123")
    {
        // if password is incorrect, send the user back to login
        // along with ?pass. This is checked for at the beginning
        // of the login page.
        header("Location:login.php?pass");
    }
    else 
    {
        // create cookies if the password is correct.
        // cookie only valid for 60 seconds.

        // create cookie "array"
        // time() uses system time to set the expiration to 
        // 60 seconds after the current time
        setcookie("michaelr_[0]", $username, time() + 60);
        setcookie("michaelr_[1]", $email, time() + 60);

    echo "logged in. <br><br><br>"; 
    }
?>
<!-- link back to login for cookie checking -->
<a href="login.php">Back to login</a>