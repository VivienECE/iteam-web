<?php

function send_mail($email, $subject, $message, $headers)
{
    return mail($email, $subject, $message, $headers);
}

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
        $email = "praveends1998@gmail.com";
        $subject = "Message site iTeam";
        $message = "Etudiant: $nom $prenom
        
                    Message: $message_site";
    
        $headers = "From: $mail_site";
    
    
        //send_mail($email, $subject, $message, $headers);
        set_message("<br><br>Le message a été envoyé avec succèes! iTeam vous recontactera très rapidement!", "success");
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
        redirect("paiement.php");
        set_message("<br><br>Le message a été envoyé avec succèes! iTeam vous recontactera très rapidement!", "success");

    }  
}




?>