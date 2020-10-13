<?php

function inscription_form()
{
    echo 
        "<form id='member-form' method='post' role='form'>
            <div class='modal-body'>                   
                <input type='text' name='surname' id='nom' placeholder='Nom*' required style='width:100%' ><br><br>
                <input type='text' name='name' id='prenom' placeholder='Prénom*' required style='width:100%' ><br><br>
                <input type='date' name='date' id='date' placeholder='Date de Naissance*' required style='float:left'><br><br>
                <input type='text' name='mail' id='email' placeholder='Adresse E-Mail ECE*' required style='width:100%' ><br><br>
                <input type='text' name='numero_adresse' id='numero_adresse' placeholder='N°' style='width:10%'>
                <input type='text' name='voie' id='voie' placeholder='Voie' style='width:89%'><br><br>
                <input type='text' name='complement' id='complement' placeholder='Complément d'adresse' style='width:100%'><br><br>
                <input type='text' name='code_postal' id='code_postal' placeholder='Code Postale' style='width:50%; float:left'><br><br>
                <input type='text' name='ville' id='ville' placeholder='Ville' style='width:100%'><br><br>
                <input type='text' name='pays' id='pays' placeholder='Pays' style='width:100%'><br><br>
                <input type='tel' name='tel' id='tel' placeholder='Téléphone' style='width:70%; float:left' ><br><br>  
                <select id='classe' name='classe' required style='width:30%; float:left'>
                <option value='ING1'>ING1*</option>
                <option value='ING2'>ING2*</option>
                <option value='ING3'>ING3*</option>
                <option value='ING4'>ING4*</option>
                <option value='ING5'>ING5*</option>
                </select><br><br>
                <input type='text' name='td' id='td' placeholder='TD*' required style='width:30%; float:left' ><br><br>  
                
            </div>
            <div class='modal-footer'>
                <button type='button' name='fermer' class='btn btn-secondary' data-dismiss='modal'>FERMER</button>
                <input type='submit' name='inscrire' class='btn btn-primary' value='INSCRIRE'>
            </div>
        </form>";
}




?>