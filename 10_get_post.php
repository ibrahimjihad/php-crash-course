<?php
/* --- $_GET & $_POST Superglobals -- */

/*
  We can pass data through urls and forms using the $_GET and $_POST superglobals.
*/

if (isset($_POST['submit'])) {
  echo  $_POST['name'];
  echo  $_POST['age'] ;
} ?>

<!-- Pass data through a link. php echo $_SERVER['PHP_SELF']; means same page  -->

<a href="<?php echo $_SERVER['PHP_SELF']; ?>?name=Brad&
age=3">Link</a>


<br><br>

<!-- Pass data through a form -->
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" 
method="POST">
<div>
  <label>Name: </label>
  <input type="text" name="name">
</div>
<br>
<div>
<label>Password: </label>
  <input type="password" name="password">
</div>
<br>
<div>
  <label>age: </label>
  <input type="text" name="age">
</div>
<br>
  <input type="submit" name="submit" value="Submit">
</form>