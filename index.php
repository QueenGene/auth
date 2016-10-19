<?php session_start(); ?>

        <?php require ('includes/header.php'); ?>

        <?php

if (isset($_SESSION['email'])) {
    require ('includes/dashboard.php');
} else {
    require ('includes/intro.php');
}

        //if user-name is in session go to dashboard (require)
        //else go to intro page
//<!--        if (isset $SESSION ){
//        REQUIRE db} ELSE {req intro};-->
        //if admin logged in - show this dashboard, else show different dashboard
        require ('includes/footer.php');
        ?>

