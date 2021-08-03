<?php
    $checkValue = isset($_POST["checkValue"]) ? $_POST["checkValue"] : "";
?>
<div class="container">
    <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0 titleFont">Lascia un commento</h2>
    <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
        <div class="divider-custom-line"></div>
    </div>
    <div class="row justify-content-center cursiveFont">
        <div class="col-lg-8 col-xl-7">
            <form id="contactForm" name="contactForm" method="POST" action="#contact" data-sb-form-api-token="API_TOKEN">
                <input type="hidden" id="checkValue" name="checkValue" value="" />

<?php 
    if($checkValue){ 

        if(empty($_POST['name'])   ||
        empty($_POST['email'])     ||
        empty($_POST['message'])   ||
        !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
        {
            return false;
        }

        $name = strip_tags(htmlspecialchars($_POST['name']));
        $email_address = strip_tags(htmlspecialchars($_POST['email']));
        $message = strip_tags(htmlspecialchars($_POST['message']));
        $phone = isset($_POST["phone"]) ? $_POST["phone"] : "";

        $to = CONTACT_DEST_EMAIL;
        $email_subject = CONTACT_SUBJECT.":  ".$name;
        $email_body = CONTACT_EMAIL_BODY."Nome: $name\n\nEmail: $email_address;\n\nMessaggio:\n$message";
        $email_body .= $phone ? "\n\nTelefono:\n$$phone" : "";
        $email_body .= "\n\nMessaggio:\n$message";
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

            <div class="form-floating mb-3">
                <input class="form-control" id="name" type="text" name="name" placeholder="Il nome qui" data-sb-validations="required" />
                <label for="name">Nome completo</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">Il nome è obbligatorio</div>
            </div>

            <div class="form-floating mb-3">
                <input class="form-control contactField" id="email" type="text" name="email" placeholder="La mail qui" data-sb-validations="required" />
                <label for="email">Email</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">L'indirizzo email è obbligatorio</div>
            </div>

            <div class="form-floating mb-3">
                <input class="form-control contactField" id="phone" type="text" name="phone" placeholder="Il numero di telefono qui" />
                <label for="phone">Telefono</label>
            </div>

            <div class="form-floating mb-3">
                <input class="form-control contactField" id="message" type="text" name="message" placeholder="Il messaggio qui" data-sb-validations="required" />
                <label for="message">Messaggio</label>
                <div class="invalid-feedback" data-sb-feedback="name:required">Il messaggio è obbligatorio</div>
            </div>
            <button class="btn btn-primary btn-xl" id="submitButtonBtn" type="button"><?=MAIL_FORM_SEND_BTN?></button>
<?php } ?>
                </form>
            </div>
        </div>
    </div>
</section>
<script>
    var mandatory_field_label = "Campo Obbligatorio";

    $('#name').on('click',function(){$('#name').val('');});
    $('#email').on('click',function(){$('#email').val('');});
    $('#phone').on('click',function(){$('#phone').val('');});
    $('#message').on('click',function(){$('#message').val('');});

    $('#submitButtonBtn').on('click',function(){
        if(
            (!$('#name').val() || !$('#email').val() || !$('#message').val())
            ||
            ( 
                ($('#name').val() === mandatory_field_label) 
                || ($('#email').val() === mandatory_field_label) 
                || ($('#message').val() === mandatory_field_label) 
            )
        ){
            $('#name').css('border','0px solid red');$('#name').css('color','blue');
            $('#email').css('border','0px solid red');$('#email').css('color','blue');
            $('#phone').css('border','0px solid red');$('#message').css('color','blue');
            $('#message').css('border','0px solid red');$('#message').css('color','blue');

            if((!$('#name').val()) || ($('#name').val() === mandatory_field_label)){
                $('#name').css('border','1px solid red');
                $('#name').css('color','orangered');
                $('#name').val(''+mandatory_field_label+'');
            }
            if((!$('#email').val()) || ($('#email').val() === mandatory_field_label)){
                $('#email').css('border','1px solid red');
                $('#email').css('color','orangered');
                $('#email').val(''+mandatory_field_label+'');
            }
            if((!$('#message').val()) || ($('#message').val() === mandatory_field_label)){
                $('#message').css('border','1px solid red');
                $('#message').css('color','orangered');
                $('#message').val(''+mandatory_field_label+'');
            }
        }
        else{
            $('#checkValue').val('1');
            $('#contactForm').submit();
        }
    });

    $('#sentMagConf').on('click',function(){document.location.href='index.php';});
</script>