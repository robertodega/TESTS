<?php $checkValue = isset($_POST["checkValue"]) ? $_POST["checkValue"] : ""; ?>
<section id="contact" class="site-section section-form text-center">
    <div class="container">
        <h3>Contattami</h3>
        <img src="assets/img/lines.svg" class="img-lines" alt="lines">
        <form id="contactForm" name="contactForm" method="POST" action="#contact">
            <input type="hidden" id="checkValue" name="checkValue" value="" />
            <div class="row">

<?php 
    if($checkValue){ 

        if(empty($_POST['name'])   ||
        empty($_POST['email'])     ||
        empty($_POST['message'])   ||
        !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
        {
            echo CONTACT_ALERT_FIELD;
            return false;
        }

        $name = strip_tags(htmlspecialchars($_POST['name']));
        $email_address = strip_tags(htmlspecialchars($_POST['email']));
        $message = strip_tags(htmlspecialchars($_POST['message']));

        $to = CONTACT_DEST_EMAIL;
        $email_subject = CONTACT_SUBJECT.":  ".$name;
        $email_body = CONTACT_EMAIL_BODY."Nome: $name\n\nEmail: $email_address\n\nMessaggio:\n$message";
        $headers = "From: ".NO_REPLY_ADDRESS."\n";
        $headers .= "Reply-To: $email_address";   

        try{
            mail($to,$email_subject,$email_body,$headers);
        }
        catch(Exception $e){
?>
            <div class="row">
                <button class="btn btn-alert" type="button" id="sentMagConf" name="sentMagConf" title="Click per ricaricare"><?php echo CONTACT_ERROR_MSG."(".$e->getMessage().")"; ?></button>
            </div>
<?php
            die();
        }
?>
            <div class="row">
                <button class="btn btn-success" type="button" id="sentMagConf" name="sentMagConf" title="Click per ricaricare"><?php echo SENT_MSG_CNF_TXT; ?></button>
            </div>

<?php }else{?>
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control mt-x-0" placeholder="Name" required>
                </div>
                <div class="col-sm-6">
                    <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>   
                </div>
                <div class="col-sm-12">
                    <textarea name="message" id="message" class="form-control" placeholder="Message" required></textarea>
                </div>
            </div>
            <button class="btn btn-border" type="submit" id="contactSmtBtn" name="contactSmtBtn"><?php echo MAIL_FORM_SEND_BTN; ?><span class="glyphicon glyphicon-send"></span></button>
<?php } ?>
        </form>
    </div>
</section>