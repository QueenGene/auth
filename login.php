<?php session_start(); 
require 'db/database.php';
$errors = '';

if (isset ($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = getUserDetails($email, $password);

    if ($email === $user['email'] && $password === $user['password']) {
        $_SESSION['email'] = $email;
        $_SESSION['role'] = $user['role'];
        header('Location: index.php');
    } else {
        $errors = 'These credentials are not recognized.';
    }
}else if (isset($_GET['logout'])) {
    session_unset(); //session_unset($_SESSION['email']); - this worked for Kieran - see how it goes.
    session_destroy();
    header('location: index.php');
}

?>

<!--Fix this - change mock db values to match actual db-->

<?php
//
//if (isset($_GET['logout'])) {
//        session_unset();
//        session_destroy();
//        header('location: index.php');
//    }
//
//$user_name = $_POST['user_name'];
//$password = $_POST['password'];
//$errors = '';
//$mk_db_user_name = 'franks';
//$mk_db_password = 'franks';
//
//if ($user_name === $mk_db_user_name && $password === $mk_db_password) {
//    $_SESSION['user_name'] = $mk_db_user_name;
//    header('location: index.php');
//    //add username to session
//    //redirect to dashboard
//} else {
//    //errors variable
//    $errors = 'These credentials are not recognized.';
//}

    
?>

<?php if ($errors) { ?>
    <div class="errors">
        <p><?php echo $errors; ?></p>
    </div>
<?php } ?>


<h3>Login</h3>
<form action="" method="post">
    Username: <input type="text" name="email">
    <br>
    Password: <input type="text" name="password">
    <br>
    <input type="submit" name="submit" value="Login">
</form>

<?php
//var_dump($_SESSION['user_name']);
?>
</body>
</html>



