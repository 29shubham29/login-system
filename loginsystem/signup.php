<?php
include_once 'header.php';
?>
<section class="main-container">
<div class="main-wrapper">
<h2>Signup</h2>
<form class="signup" action="includes/signup.inc.php" method="POST">
<input type="text" name="first" placeholder ="Firstname">
<input type="text" name="last" placeholder ="Lastname">
<input type="text" name="email" placeholder ="E-Mail">
<input type="text" name="uid" placeholder ="Username">
<input type="password" name="pwd" placeholder ="password">
<button type="submit" name="submit">Sign Up</button>
</div>
</section>
<?php
include_once 'footer.php';
?>