<?php

// does cookie exist?
    // yes, show welcome page.
        // use "username" from cookie.
    // no, show form.


?>


<html>
<body>

<form method="GET" action="./processlogin.php">
  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" value="John"><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname" value="Doe"><br><br>
  <input type="submit" value="Submit">
  <!-- processlogin will take the user data and make a cookie. -->
</form> 


</body>
</html>

