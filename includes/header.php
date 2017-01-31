<!doctype html>
<?php
    function display_navigation($site_nav){
        foreach ($site_nav as $key => $link) {
            echo "<li><a href=\"".$link."\" title=\"".$key." Link\">".$key."</a></li>";
        }
    }

    $site_title = "Lab 4 - Using Arrays and Functions";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title><?php echo $page_title;?> - Lab 4</title>
        <link href="css/main.css" rel="stylesheet" type="text/css"/>
        <?php if (isset($alt_css)) {
            echo "<link href=\"".$alt_css."\" rel=\"stylesheet\" type=\"text/css\"/>";
        }?>
    </head>
    <body>
            <?php
            if (stripos($_SERVER['REQUEST_URI'], 'index.php')){
                 echo '<header id="home-header"><h1>'.$site_title.'</h1>';
            }
            else{
                 echo '<header id="alt-header"><h2>'.$site_title.'</h2>';
            } ?>
            <nav>
               <ul>
                <?php
                   $main_nav = ["Home" => "index.php", "Portfolio" => "portfolio.php", "Blog" => "blog.php", "About" => "about.php", "Contact" => "contact.php"];
                   display_navigation($main_nav);
                ?>
                </ul>
            </nav>
        </header>