<?php
    function error_msg($errorMsg) {
        echo "<p class=\"error\">".$errorMsg."</p>";
    }

    if (($_SERVER['REQUEST_METHOD'] == 'POST') && !empty($_POST['send'])) {
        
        $name = $email = $subject = $message = $priority = $nameErr = $mailErr = $msgErr = $priErr ;
        $action = "thanks.php";
        
        function form_validation(){
            
            global $name, $email, $subject, $message, $priority, $nameErr, $mailErr, $msgErr, $priErr;
            
            if (isset($_POST['name'])) { $name = $_POST['name']; }
            if (isset($_POST['email'])) { $email = $_POST['email']; }
            if (isset($_POST['subject'])) { $subject = $_POST['subject']; }
            if (isset($_POST['message'])) { $message = $_POST['message']; }
            if (isset($_POST['priority'])) { $priority = $_POST['priority']; }
            
            $form_succ = true;
            
            if (preg_match('/[a-zA-Z -]+/g', $name)) {
                $nameErr = "Name can not contain any numbers or symbols.";
                $form_succ = false;
                $action = "";
            }
            if ($name == "") {
                $nameErr = "This is a required field.";
                $form_succ = false;
                $action = "";
            }

            if (!filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL)) {
                $mailErr = "Enter a valid e-mail.";
                $form_succ = false;
                $action = "";
            }
            if ($email == "") {
                $mailErr = "This is a required field.";
                $form_succ = false;
                $action = "";
            }
            
            if (preg_match('(fuck|shit|dick)', $message)) {
                $msgErr = "Your profanity is not appreciated.";
                $form_succ = false;
                $action = "";
            }
            if ($message == "") {
                $msgErr = "This is a required field.";
                $form_succ = false;
                $action = "";
            }
            
            if (empty($priority)) {
                $priErr = "Please select an option.";
                $form_succ = false;
                $action = "";
            }
            
            return $form_succ;
        }
        
        
        
        if(isset($_POST['send']) && form_validation()) {
            $action = "thanks.php";
        }
    }

    $page_title = "Contact";
    $alt_css = ""; //write path if there are any alternate css files

    require_once "includes/header.php";

    /*
        $page_content will display sections on the page
    */
    $page_header = "Say Hi"; // main header for the page
    
    ob_start();?>
    <form id="contact_form" action="<?php echo $action;?>" method="POST">
        <p><?php echo $err_msg;?></p>
        <label for="name">Name</label>
		<input id="name" name="name" type="text" value="<?php if(isset($name)){ echo $name; }?>"/>
        <?php if(isset($nameErr)){ echo error_msg($nameErr); }?>
        <br/>
        <label for="email">E-Mail</label>
	    <input id="email" name="email" type="text" value="<?php if(isset($email)){ echo $email; }?>"/>
	    <?php if(isset($mailErr)){ echo error_msg($mailErr); }?>
	    <br/>
	    <label for="subject">How can I help?</label>
        <br/>
        <select id="subject" name="subject">
            <?php
                $subject = ["Just wanted to say hi!", "I like your work!", "Are you available to work on a project?", "Wanted to ask you a question."];
                foreach ($subject as $s) {
                    echo "<option>".$s."</option>";
                }
            ?>
        </select><br/>
	    <label for="message">Message</label>
        <br/>
        <textarea id="message" name="message" type="text"><?php if(isset($message)){ echo $message; }?></textarea>
        <?php if(isset($msgErr)){ echo error_msg($msgErr); }?>
        <br/>
        <fieldset>
            <legend>When should I get back?</legend>
            <?php
                $urgent = ["High" => "Respond ASAP!", "Medium" => "Not very urgent.", "Low" => "Whenever you can!"];
                foreach ($urgent as $key => $u) {
                    echo "<label for=\"".$key."\">".$u." </label><input type=\"radio\" name=\"priority\" id=\"".$key."\" value=\"".$key."\"><br>";
                }
                
                if(isset($priErr)){ echo error_msg($priErr); }
            ?>
        </fieldset>
        <input id="send" name="send" type="submit" value="Send"/>
    </form>
<?php
    $contact_form = ob_get_contents();
    ob_end_clean();
    
    $page_content[""] = $contact_form;
    include "includes/body.php";
    
    
    require_once "includes/footer.php";
?>
