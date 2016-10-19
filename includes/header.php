<?php
if (!isset($_SESSION)) {
    session_start();
}
?>

<link rel="stylesheet" type="text/css" href="css/main.css">
<link rel="stylesheet" href="https://getbootstrap.com/dist/css/bootstrap.min.css">

<div class="header">

    <!--have a login & a logout button
        session unset / clears session for usage, but session is still active
        session destroy / kill all session info - more secure-->

    <div class="login-button">
        <a href="login.php"><p>Login</p></a>
    </div>

    <div class="logout-button">
        <a href="login.php?logout=true"><p>Logout</p></a>
    </div>

</div>
