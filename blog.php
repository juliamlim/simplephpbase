<?php 
    $page_title = "Blog";
    $alt_css = ""; //write path if there are any alternate css files

    require_once "includes/header.php";

    /*
        $page_content will display sections on the page
    */
    $page_header = "Web Blog"; // main header for the page
    
    // ideally, the key would be a link to the blog post. And the content could be an array containing the posted date, author, and text of the post.
    $page_content["My day today..."] = "I did more things, lots more things.. Feeling pretty good."; 
    $page_content["My day yesterday..."] = "I did somethings, not too many things.. But definitely some.";
    include "includes/body.php";

    require_once "includes/footer.php";
?>
