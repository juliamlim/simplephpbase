<?php 
    $page_title = "Welcome";
    $alt_css = ""; //write path if there are any alternate css files

    require_once "includes/header.php";

    /*
        $page_content will display sections on the page
    */
    $page_header = "Hello World"; // main header for the page
    $page_content["My name is Julia Lim"] = "<strong>Web development</strong> and <strong>user experience design</strong> encourages meaningful interactions between institutions, organizations and their audiences.";
    $page_content["<span class=\"important\">Important</span>"] = "<span class=\"important\">Drop down and radio buttons are populated by arrays on the <a href=\"contact.php\">Contact Page</a>.</span>";
    include "includes/body.php";

    require_once "includes/footer.php";
?>