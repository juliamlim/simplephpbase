<?php 
    $page_title = "Portfolio";
    $alt_css = ""; //write path if there are any alternate css files

    require_once "includes/header.php";

    /*
        $page_content will display sections on the page
    */
    $page_header = "My Work"; // main header for the page

    // ideally, the key would be a link to the project. And the content could be an array containing the created date, media used, pictures and a breif description of the project.
    $page_content["Project One"] = "Here is a bit about some project I did.";
    $page_content["Project Two"] = "Here is a bit about some other project I did.";
    include "includes/body.php";

    require_once "includes/footer.php";
?>