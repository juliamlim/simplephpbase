<?php 
    $page_title = "Thanks";
    $alt_css = ""; //write path if there are any alternate css files

    require_once "includes/header.php";

    /*
        $page_content will display sections on the page
    */
    $page_header = "Thank You!"; // main header for the page
    
    ob_start();?>
    
    <p>Thanks<?php 
            if(isset($name)){ echo " ".$_POST['name'].", y";} else { echo "! Y";}?>our e-mail was sent and I'll get back to you soon<?php if(isset($email)){ echo " at ".$_POST['email'];}?>!</p>
    
<?php
    $thanks_msg = ob_get_contents();
    ob_end_clean();

    $page_content[""] = $thanks_msg;
    include "includes/body.php";
    
    
    require_once "includes/footer.php";
?>