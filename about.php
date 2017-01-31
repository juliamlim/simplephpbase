<?php 
    $page_title = "About";
    $alt_css = ""; //write path if there are any alternate css files

    require_once "includes/header.php";

    /*
        $page_content will display sections on the page
    */
    $page_header = "About Me"; // main header for the page
    $page_content["Julia Lim"] = "I am a student in Humber's Web Development Program.";
    include "includes/body.php";

    require_once "includes/footer.php";
?>