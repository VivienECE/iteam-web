<?php
include("db.php");   
include("forms.php"); 
include("fonctions.php");
include("header/header.php");
contact_send_mail();
add_member(); 
include("menu/menu.php");
 
?>

<?php  


$sql= "SELECT * FROM event_calendar WHERE id = 3";
$result = query($sql);
$row = fetch_array($result);
$start_time = $row['start'];
$end_time = $row['end'];
$title = $row['title'];
$description = $row['description'];



?>


<center>

<div class="jumbotron jumbotron bg-cover">
    <div class="overlay"></div>
        <div class="container text-white">
    <br><br>
        <h1 class="display-4">ASSOCIATION INFORMATIQUE DE L'ECE</h1>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="#rejoins" role="button">REJOINS-NOUS</a>

        </div>
    </div>
</div>


<section id="apropos">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1>QUI SOMMES NOUS ?</h1>
                <hr>
                <p>Crée en 1996, iTeam est l'association spécialisée en informatique de l'ECE Paris École d'Ingénieur.<br>
                Tous les niveaux sont bienvenus, que tu sois débutant(e), intéressé(e) par le développement, ou motivé(e) pour te lancer dans de nouveaux projets. 
                </p>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="card text-white bg-dark mb-4">
                            <div class="card-body">
                                <h5 class="card-title">PROJETS</h5>
                                <p class="card-text">
                                ● Hackaton<br>
                                ● Modding<br>
                                ● Projets inter-association</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card text-white bg-dark mb-4">
                            <div class="card-body">
                                <h5 class="card-title">TUTORAT</h5>
                                <p class="card-text">
                                ● Suivi des Projets Scolaires et Personnelles <br>
                                ● Aides aux cours d'informatique<br>
                                ● Supports techniques
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card text-white bg-dark mb-4">
                            <div class="card-body">
                                <h5 class="card-title">FORMATIONS</h5>
                                <p class="card-text">
                                ● Frameworks<br>
                                ● Langages de Programmation<br>
                                ● Linux</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
</section>

<section id="rejoins">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>REJOINS-NOUS</h2>
                <hr><br><br>
                <!--<img src="photos/bureau.png" alt="" style="width:90%" class="photo_bureau"><br><br>-->
                <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#exampleModalLong">
                REJOINDRE ITEAM
                </button>

                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Rejoindre iTeam</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    <?php
                    inscription_form();
                    ?>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div><br><br>
    <div class="reseaux">
            <a href="https://www.facebook.com/ITeamECEParis">
            <img src="photos/fb.png" alt="">
            </a>
            <a href="https://www.instagram.com/iteam_ece/">
            <img src="photos/insta.png" alt="">
            </a>
            <a href="https://www.linkedin.com/company/iteam-ece/">
            <img src="photos/in.png" alt="">
            </a>
        </div>
    </div>
</section>

<section id="events">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>NOS EVENTS</h2>
                <hr>
                <div class="count">
                    <br><br>
                    <h3>PROCHAIN EVENT 
                        <hr class="my-4">
                    <?php echo $title ?></h3><br>
                    <h2><p id="countdown"></p></h2><br><br>
                </div><br>
                <a class="btn btn-dark btn-md" href="calendar/calendar.php" role="button">VOIR TOUS NOS EVENTS</a>
                
            </div>
        </div>
    </div>
</section>

<section id="bureau">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">                
                <div class="container text-center">
                <h2>BUREAU</h2>
                <hr>
                </div>
                <div class="shell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img">
                                    <img src="photos/desilva.png" alt="Product" class="img-responsive"/>
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                        <span>PRESIDENT</span>
                                        </div>
                                        <div class="title-product">
                                        <h3>Praveen DE SILVA</h3>
                                        </div>
                                        <div class="description-prod">
                                        <p>ING4 SE - Promotion 2022</p>
                                            <div class="linkedin_logo">
                                            <center>
                                                <a href="https://www.linkedin.com/in/praveen-de-silva-8b37a1196/">
                                                <img src="photos/linkedin_bureau.png" alt="" style="width:10%">
                                                </a>
                                            </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img">
                                    <img src="photos/fdhila.jpg" alt="Product" class="img-responsive"/>
                                </div>
                                <div class="wsk-cp-text">
                                    <div class="category">
                                    <span>TRESORIER</span>
                                    </div>
                                    <div class="title-product">
                                    <h3>Ahmed FDHILA</h3>
                                    </div>
                                    <div class="description-prod">
                                    <p>ING4 SI - Promotion 2022</p>
                                        <div class="linkedin_logo">
                                        <center>
                                            <a href="#">
                                            <img src="photos/linkedin_bureau.png" alt="" style="width:10%">
                                            </a>
                                        </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>    
                </div> 
                <div class="shell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img">
                                    <img src="photos/rnoube.jpg" alt="Product" class="img-responsive"/>
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                        <span>SECRETAIRE GENERALE</span>
                                        </div>
                                        <div class="title-product">
                                        <h3>Raoul NOUBE</h3>
                                        </div>
                                        <div class="description-prod">
                                        <p>ING4 Énergie - Promotion 2022</p>
                                            <div class="linkedin_logo">
                                            <center>
                                                <a href="https://www.linkedin.com/in/raoul-noube-tiako-006a9a197/">
                                                <img src="photos/linkedin_bureau.png" alt="" style="width:10%">
                                                </a>
                                            </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img">
                                    <img src="photos/detourney.jpg" alt="Product" class="img-responsive"/>
                                </div>
                                <div class="wsk-cp-text">
                                    <div class="category">
                                    <span>VICE-PRESIDENT COMMUNICATION</span>
                                    </div>
                                    <div class="title-product">
                                    <h3>Vivien DETOURNEY</h3>
                                    </div>
                                    <div class="description-prod">
                                    <p>ING4 SI - Promotion 2022</p>
                                    <div class="linkedin_logo">
                                        <center>
                                            <a href="https://www.linkedin.com/in/vivien-detournay-b8789b120/">
                                            <img src="photos/linkedin_bureau.png" alt="" style="width:10%">
                                            </a>
                                        </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>    
                </div> 
                <div class="shell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img">
                                    <img src="photos/kenny.jpg" alt="Product" class="img-responsive"/>
                                    </div>
                                    <div class="wsk-cp-text">
                                        <div class="category">
                                        <span>VICE-PRESIDENT SPONSOR</span>
                                        </div>
                                        <div class="title-product">
                                        <h3>Kenny HUBER</h3>
                                        </div>
                                        <div class="description-prod">
                                        <p>ING4 Finance - Promotion 2022</p>
                                            <div class="linkedin_logo">
                                            <center>
                                                <a href="https://www.linkedin.com/in/kenny-huber-b2053484/">
                                                <img src="photos/linkedin_bureau.png" alt="" style="width:10%">
                                                </a>
                                            </center>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="wsk-cp-product">
                                    <div class="wsk-cp-img">
                                    <img src="photos/rbouhnik.jpg" alt="Product" class="img-responsive"/>
                                </div>
                                <div class="wsk-cp-text">
                                    <div class="category">
                                    <span>VICE-PRESIDENT LOGISTIQUE</span>
                                    </div>
                                    <div class="title-product">
                                    <h3>Raphaël BOUHNIK</h3>
                                    </div>
                                    <div class="description-prod">
                                    <p>ING4 SI - Promotion 2022</p>
                                        <div class="linkedin_logo">
                                        <center>
                                            <a href="https://fr.linkedin.com/in/raphaël-bouhnik-6322901aa">
                                            <img src="photos/linkedin_bureau.png" alt="" style="width:10%">
                                            </a>
                                        </center>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </div>    
                </div>    
            </div>
        </div>
    </div>
</section>

<section id="sponsors">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>NOS SPONSORS</h2>
                <hr>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                            <a href="https://www.ece.fr/ecole-ingenieur/">
                                <img src="photos/ece.png" alt="ECE" style="width:100%">
                            </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <a href="https://www.thalesgroup.com/fr">
                                <img src="photos/thales.png" alt="Thales" style="width:100%">
                            </a>    
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <div class="card">
                            <a href="https://www.alten.fr/">
                                <img src="photos/alten.jpg" alt="Alten" style="width:100%">
                            </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card">
                            <a href="https://www.ibm.com/fr-fr">
                                <img src="photos/ibm_logo.jpg" alt="IBM" style="width:100%">
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>CONTACT</h2>
                <hr>
                <form id="contact-form" method="post" role="form">
                    <input type="text" name="nom" placeholder="Nom" style="width:39%" required>
                    <input type="text" name="prenom" placeholder="Prénom"style="width:40%" required><br><br>
                    <input type="text" name="email" placeholder="Adresse Mail ECE (xxx@edu.ece.fr)"style="width:80%" required><br><br>
                    <textarea name="message" id="message" placeholder="Message" style="width:80%" required></textarea><br><br>
                    <button type="submit" class="btn btn-dark" name="envoyer">ENVOYER</button>
                    
                </form>

                
            </div>
        </div>
    </div>
</section>
</center>




<script>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $start_time; ?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="countdown"
  document.getElementById("countdown").innerHTML = days + " Jours " + hours + " Heures "
  + minutes + " Minutes " + seconds + " Secondes ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById('countdown').innerHTML = "Event a déja commencé";
  }
}, 1000);
</script>

<?php
include("footer/footer.php");
?>