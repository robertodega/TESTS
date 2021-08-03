<?php
    $underPath = "../layout/underConstruction/";
    $siteName = "robertodegaetano.it";
    $destEmail = "roberto@".$siteName;
    $underTitle = "Sito web in aggiornamento";
    $underTxt = "Il sito web è attualmente in fase di aggiornamento";
    $underTxt_2 = "Torneremo a breve con la nuova versione!<br /><br />Se volete essere contattati per rimanere aggiornati sulla data di rilascio della nuova piattaforma, inserite qui sotto il vostro indirizzo, grazie!";
    $emailPlaceholder = "Il vostro indirizzo email qui";
    $emailSendBtn = "Aggiornami!";
    $emailNotValidErr = "L'indirizzo inserito non risulta valido";
    $emailMandatoryErr = "L'indirizzo email è necessario";
    $emailSendOk = "Richiesta correttamente inviata! Grazie";
    $emailSendKo = "La richiesta NON è stata recapitata, mi dispiace";
    $socialLinks = [
		"facebook-f" => "https://www.facebook.com/roberto.degaetano"
		,"linkedin-in" => "https://www.linkedin.com/in/roberto-de-gaetano-49ba0129?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BymZo4xW5RDa0%2ByuELT7YRw%3D%3D"
		,"instagram" => "https://www.instagram.com/robdega/"
	];
    
    try{
        $sender = isset($_REQUEST["email"]) ? $_REQUEST["email"] : "";
        if($sender){
            $to = $destEmail;
            $email_subject = "RICHIESTA DI AGGIORNAMENTO";
            $email_body = "\n\n".$sender." richiede una notifica di aggiornamento per il sito web ".$siteName."\n\n";
            $headers = "From: ".$sender."\n";
            $headers .= "Reply-To: $sender"; 
            mail($to,$email_subject,$email_body,$headers);
        }
    }
    catch(Exception $e){
        echo $e->getMessage();
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title><?=$underTitle?></title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Tinos:ital,wght@0,400;0,700;1,400;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&amp;display=swap" rel="stylesheet" />

        <link href="<?=$underPath?>css/styles.css" rel="stylesheet" />
    </head>
    <body>

        <video class="bg-video" playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
            <source src="<?=$underPath?>assets/mp4/bg.mp4" type="video/mp4" />
        </video>
        
        <div class="masthead">
            <div class="masthead-content text-white">
                <div class="container-fluid px-4 px-lg-0">
                    <h1 class="fst-italic lh-1 mb-4"><?=$underTxt?></h1>
                    <p class="mb-5"><?=$underTxt_2?></p>
                    <form id="contactForm" data-sb-form-api-token="API_TOKEN" action="#">
                        <div class="row input-group-newsletter">
                            <div class="col"><input class="form-control" id="email" name="email" type="email" placeholder="<?=$emailPlaceholder?>" aria-label="<?=$emailPlaceholder?>" data-sb-validations="required,email" /></div>
                            <div class="col-auto"><button class="btn btn-primary" id="submitButton" type="submit"><?=$emailSendBtn?></button></div>
                        </div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="email:required"><?=$emailMandatoryErr?></div>
                        <div class="invalid-feedback mt-2" data-sb-feedback="email:email"><?=$emailNotValidErr?></div>
                        <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3 mt-2"><?=$emailSendKo?></div></div>
                    </form>
                </div>
            </div>
        </div>

        <div class="social-icons">
            <div class="d-flex flex-row flex-lg-column justify-content-center align-items-center h-100 mt-3 mt-lg-0">
<?php foreach($socialLinks as $l => $v){ ?>
                <a class="btn btn-dark m-3" href="<?=$v?>" target="_blank"><i class="fab fa-<?=$l?>"></i></a>
<?php } ?>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="<?=$underPath?>js/scripts.js"></script>
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    </body>
</html>
