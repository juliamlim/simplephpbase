<main>
    <?php
        global $page_content;
    
        if (!stripos($_SERVER['REQUEST_URI'], "index.php")){
             echo "<h1>".$page_header."</h1>";
        }
        else{
             echo "<h2>".$page_header."</h2>";
        }
        
        foreach ($page_content as $key => $content) {
            echo "<section><h3>".$key."</h3><p>".$content."</p></section>";
        }
    ?>
</main>