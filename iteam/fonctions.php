<?php

/*function send_mail($email, $subject, $message, $headers)
{
    return mail($email, $subject, $message, $headers);
}*/

// lance les classes de PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
// path du dossier PHPMailer % fichier d'envoi du mail
require 'lib/PHPMailer/src/Exception.php';
require 'lib/PHPMailer/src/PHPMailer.php';
require 'lib/PHPMailer/src/SMTP.php';

function send_mail($header, $subject, $contenu, $destinataire) {  

// on crée une nouvelle instance de la classe
$mail = new PHPMailer(true);
$mail->SMTPOptions = array('ssl' => 
   array(
      'verify_peer' => false,
      'verify_peer_name' => false,
      'allow_self_signed' => true));
  // puis on l’exécute avec un 'try/catch' qui teste les erreurs d'envoi
  try {
    /* DONNEES SERVEUR */
    #####################
    $mail->setLanguage('fr', '../PHPMailer/language/');   // pour avoir les messages d'erreur en FR
    //$mail->SMTPDebug = 2;            // décommenter en mode débug
    $mail->isSMTP();                                                            // envoi avec le SMTP du serveur
    $mail->Host       = 'smtp.gmail.com';                            // serveur SMTP
    $mail->SMTPAuth   = true;                                            // le serveur SMTP nécessite une authentification ("false" sinon)
    $mail->Username   = 'ne.pas.repondre.iteam@gmail.com';     // login SMTP
    $mail->Password   = 'iteammailserv2';   
    $mail->SMTPSecure = 'tsl';                                             // Mot de passe SMTP
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;     // encodage des données TLS (ou juste 'tls') > "Aucun chiffrement des données"; sinon PHPMailer::ENCRYPTION_SMTPS (ou juste 'ssl')
    $mail->Port       = 587;                                                               // port TCP (ou 25, ou 465...)

    /* DONNEES DESTINATAIRES */
    ##########################
    $mail->setFrom('ne.pas.repondre.iteam@gmail.com', $header);  //adresse de l'expéditeur (pas d'accents)
    $mail->addAddress($destinataire);        // Adresse du destinataire (le nom est facultatif)
    // $mail->addReplyTo('moi@mon_domaine.fr', 'son nom');     // réponse à un autre que l'expéditeur (le nom est facultatif)
    // $mail->addCC('cc@example.com');            // Cc (copie) : autant d'adresse que souhaité = Cc (le nom est facultatif)
    // $mail->addBCC('bcc@example.com');          // Cci (Copie cachée) :  : autant d'adresse que souhaité = Cci (le nom est facultatif)

    /* PIECES JOINTES */
    ##########################
    // $mail->addAttachment('../dossier/fichier.zip');         // Pièces jointes en gardant le nom du fichier sur le serveur
    // $mail->addAttachment('../dossier/fichier.zip', 'nouveau_nom.zip');    // Ou : pièce jointe + nouveau nom

    /* CONTENU DE L'EMAIL*/
    ##########################
    $mail->isHTML(true);                                      // email au format HTML
    $mail->Subject = utf8_decode($subject);      // Objet du message (éviter les accents là, sauf si utf8_encode)
    $mail->Body    = $contenu;          // corps du message en HTML - Mettre des slashes si apostrophes
    $mail->AltBody = 'Contenu au format texte pour les clients e-mails qiui ne le supportent pas'; // ajout facultatif de texte sans balises HTML (format texte)

    $mail->send();
  
  }
  // si le try ne marche pas > exception ici
  catch (Exception $e) {
    echo "Le Message n'a pas été envoyé. Mailer Error: {$mail->ErrorInfo}"; // Affiche l'erreur concernée le cas échéant
    set_message("<br><br>Le message n'a pas été envoyé", "error");
  }  
  return false;
} // fin de la fonction sendmail

function set_message($message, $type)
{
    echo "<div class='alert alert-$type' role='alert'>
        $message
        </div>";
}

function redirect($location)
{
    return header("Location: {$location} ");
}

function contact_send_mail()
{
    if(isset($_POST['envoyer']))
    {
        if (isset($_POST['message'])) 
        {
            $message_site = $_POST['message'];
        }
    
        if (isset($_POST['email'])) 
        {
            $mail_site = $_POST['email'];
        }
    
        if (isset($_POST['prenom'])) 
        {
            $prenom = $_POST['prenom'];
        }
    
        if (isset($_POST['nom'])) 
        {
            $nom = $_POST['nom'];
        }
        $email = "iteam.bureau@gmail.com";
        $subject = "Message site iTeam";
        $message = "Etudiant: $nom $prenom<br>
        			Mail : $mail_site<br><br>
        
                    Message: $message_site";
    
        $headers = "$mail_site";
    
    
        send_mail($headers, $subject, $message, $email);

    }
    
}

function add_member()
{
    if(isset($_POST['inscrire']))
    {
        if (isset($_POST['name'])) 
        {
            $prenom = $_POST['name'];
        }
    
        if (isset($_POST['mail'])) 
        {
            $email = $_POST['mail'];
        }
    
        if (isset($_POST['surname'])) 
        {
            $nom = $_POST['surname'];
        }
    
        if (isset($_POST['date'])) 
        {
            $date = $_POST['date'];
        }

        if (isset($_POST['numero_adresse'])) 
        {
            $numero_adresse = $_POST['numero_adresse'];
        }
    
        if (isset($_POST['voie'])) 
        {
            $voie = $_POST['voie'];
        }

        if (isset($_POST['complement'])) 
        {
            $complement = $_POST['complement'];
        }
    
        if (isset($_POST['code_postal'])) 
        {
            $code = $_POST['code_postal'];
        }
    
        if (isset($_POST['ville'])) 
        {
            $ville = $_POST['ville'];
        }

        if (isset($_POST['pays'])) 
        {
            $pays = $_POST['pays'];
        }

        if (isset($_POST['tel'])) 
        {
            $tel = $_POST['tel'];
        }

        if (isset($_POST['classe'])) 
        {
            $classe = $_POST['classe'];
        }

        if (isset($_POST['td'])) 
        {
            $td = $_POST['td'];
        }

        $sql = "INSERT INTO membres(nom, prenom, date, email, num_adresse, voie, complement, code_postal, ville, pays, tel, classe, td, statut)";
        $sql.= " VALUES('$nom','$prenom', '$date', '$email','$numero_adresse','$voie', '$complement', '$code', '$ville', '$pays', '$tel', '$classe', '$td', '0')";
        $result = query($sql);
        set_message("<br><br>Merci d'avoir fait confiance à l'iTeam. Un mail sera envoyé pour finaliser l'inscription !", "success");

        $pumpkin_url = "https://billetterie.pumpkin-app.com/inscriptipn-iteam";

        $header = "noreply@iteam.fr";
    	//Caractères spéciaux / € ne marche pas
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $subject = "Finalisation de l'inscription iTeam";
        $contenu = "
        <p>Bonjour $prenom,<br><br>
        Bienvenue dans la famille de l'iTeam.<br>
        Pour finaliser ton inscription, il faut payer ta cotisation annuelle de 10,00 euros pour l'année scolaire 2020-2021 via :<br>
            - Pumpkin : $pumpkin_url<br>
            - Espèces : en retrouvant un membre de l'iTeam à l'ECE<br>
            - CB : en retrouvant un membre de l'iTeam à l'ECE<br><br>

        Une fois ton paiement effectué, tu recevras un mail de confirmation.<br>
        Dans le cas échant, contactez le bureau : iteam.bureau@gmail.com<br><br>
        
        N'oubliez pas de nous retrouver sur nos pages de réseaux sociaux :<br>
            - Facebook : https://www.facebook.com/ITeamECEParis<br>
            - Instagram : https://www.instagram.com/iteamece/<br><br>

        A bientôt,<br><br>

        L'équipe iTeam</p>

        ";

		//utf8_decode()->Caractères spéciaux
        send_mail($header, utf8_decode($subject), utf8_decode($contenu), $email);

    }  
}


function confirm_member()
{
    
    $requete= "SELECT * FROM membres WHERE statut = 0";
    $resultat = query($requete);
    while ($ligne = $resultat -> fetch_assoc()) 
    {
        echo 'ID: ' . $ligne['id_membre'] . ' Nom: ' . $ligne['nom'] . ' Prénom: ' . $ligne['prenom'] . ' Email: ' . $ligne['email'] . ' Téléphone: ' . $ligne['tel'] . ' Classe: ' . $ligne['classe'] . ' TD: ' . $ligne['td'] . ' ';
        echo "<br>";
       
    }

    if(isset($_POST['button_regle']))
    {
        if (isset($_POST['id'])) 
        {
            $id = $_POST['id'];
        }

        $sql= "UPDATE membres SET statut=1 WHERE id_membre=$id";
        $result = query($sql);


        $sql1= "SELECT * FROM membres WHERE id_membre=$id";
        $result1 = query($sql1);
        $row = fetch_array($result1);
        $nom = $row['nom'];
        $prenom = $row['prenom'];
        $mail = $row['email'];

      	//Caractères spéciaux / € ne marche pas
        $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
        $header = "noreply@iteam.fr";
        $subject = "Confirmation de l'inscription iTeam";
        $contenu = "
        <p>Bonjour $prenom,<br><br>
        Ta cotisation de 10€ est bien reçue. Tu es bien inscrit(e) en tant que membre chez iTeam et nous te remercions.<br>
        Nous espérons que tu vas passer une agréable année avec iTeam.<br><br>
        Pour plus d’informations, n’hésites pas à nous contacter.<br><br>

        A bientôt,<br><br>

        L'équipe iTeam</p>

        ";


        send_mail($header, utf8_decode($subject), utf8_decode($contenu), $mail);

        redirect("manageadminpage.php");
    }
}






?>