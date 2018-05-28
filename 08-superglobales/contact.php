<?php
//On déclare les variables pour éviter les erreurs
$email = null;
$subject = null;
$message = null;
if (!empty($_POST)) { //Récupère les informations saisirs dont le formulaire
    $email = $_POST['mail'];
    $subject = $_POST['subject'];
    $message= $_POST['message'];
}
?>
<form method="POST">
    <div>
        <label for="mail">Mail</label>
        <input type="email" id="mail" name="mail" placeholder="mail@mail.com"/>
    </div><br/>
    <div>
        <label for="subject">Sujet</label>
        <input type="text" id="subject" name="subject" placeholder="Saisir le sujet du message"/>
    </div><br/>
    <div>
    <label for="message">Message</label>
        <textarea name="message" form="message">Saisir le message ici</textarea>
    </div><br/>

    <button>Envoyer</button>

</form>

<?php
$subject = $_POST['subject'];
$message = $_POST['message'];

if (!empty($_POST)) { //Si le formulaire est soumis
    $isValid = true;

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $isValid = false;
        echo 'L\'\email n\'est pas valide.<br/>';
    }

    //Ou strlen($subject) == 0
    if(empty($subject)) {
        $isValid = false;
        echo 'Le sujet ne doit pas être vide.';
    }

    if (strlen($message) < 15) {
        $isValid = false;
        echo 'Le message est trop court.';
    }

    if ($isValid) {
        echo 'Le formulaire a été envoyé.';
    }

    /*if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($subject) && strlen(&message) >= 15) {
        echo 'Le formulaire a été envoyé.';
    }
}

