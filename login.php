<?php
  // password error message
  // code checks for ?pass in url
  if (isset($_GET['pass']))
  {
    echo "<h4>password is incorrect</h4>";
  }
  // if the cookie exists,
  if (isset($_COOKIE["michaelr_"]))// if the cookie exists,
  {
    // set the first item of cookie as username
    $username = $_COOKIE["michaelr_"][0];
    // welcome user
    echo "You already logged in. Weclome back $username";
  }
  // if cookie does not exist,
  else 
  {
    // show login page.
    // on submit, form will send person to processlogin.php where a cookie will be created.
    echo 
    "
    <h2>Login:</h2>
    <form method='GET' action='./processlogin.php'>
      <label for='username'>username:</label><br>
      <input type='text' id='username' name='user[]' value='J'><br>
      <label for='email'>email:</label><br>
      <input type='text' id='email' name='user[]' value='jane@doe.com'><br>
      <label for='password'>password:</label><br>
      <input type='text' id='password' name='user[]'>
      <br><br>
      <input type='submit' value='Submit'>
      <!-- processlogin will take the user data and make a cookie. -->
    </form> 
    ";
  }
?>

