<h1>This is the Dashboard</h1>

<?php

(isset ($_SESSION['role'])){
  if ($_SESSION['role'] == 'admin') {
    //display admin dash
  } else if ($_SESSION['role'] == 'user') {
    //display user dash
  }
}

?>

<?php
//$blogPost = array
//  (
//  array("How To...", "Tips", 11/10/2016, "apple"),
//  array("Life Hacks","Tips", 10/10/2016, "banana"),
//  array("Healthy Meals", "Tips", 09/10/2016, "cherry"),
//  array("Fitness", "Tips", 08/10/2016, "grape"),
//  array("Travel", "Tips", 07/10/2016, "melon")
//  );
//
//echo "$blogPost".$blogPost[0][0].": Content: ".$blogPost[0][1].", Date: ".$blogPost[0][2].", User: ".$blogPost[0][3].<br>";
//echo "Title ".$blogPost[1][0].": Content: ".$blogPost[1][1].", Date: ".$blogPost[1][2].", User: ".$blogPost[1][3].<br>";
//echo "Title ".$blogPost[2][0].": Content: ".$blogPost[2][1].", Date: ".$blogPost[2][2].", User: ".$blogPost[2][3].<br>";
//echo "Title ".$blogPost[3][0].": Content: ".$blogPost[3][1].", Date: ".$blogPost[3][2].", User: ".$blogPost[3][3].<br>";
?>