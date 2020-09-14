<?php
include("db.php");    
include("fonctions.php");
include("header/header.php");
contact_send_mail();
add_member(); 
include("menu/menu.php");
 
?>



<center>

<div class="jumbotron">
    
<h1 class="display-4">Welcome to iTeam!</h1>
<p class="lead">Nous sommes l'association promouvant l'informatique à l'ECE Paris.</p>
<hr class="my-4">
<p class="lead">
    <a class="btn btn-warning btn-lg" href="#rejoins" role="button">REJOINS-NOUS</a>
</p>
</div>


<section id="apropos">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h1>À PROPOS</h1>
                <hr>
                <p>Crée en 1996, iTeam est une association spécialisée en informatique.           
                </p>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="card text-white bg-warning mb-4">
                            <div class="card-body">
                                <h5 class="card-title">ENTRAIDE</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card text-white bg-info mb-4">
                            <div class="card-body">
                                <h5 class="card-title">PROJETS</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card text-white bg-success mb-4">
                            <div class="card-body">
                                <h5 class="card-title">SUPPORTS</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam eu sem tempor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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

<section id="rejoins">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>REJOINS-NOUS</h2>
                <hr>
                <img src="photos/bureau.png" alt="" style="width:90%" class="photo_bureau"><br><br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalLong">
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
                    
                    <form id="member-form" method="post" role="form">
                        <div class="modal-body">                       
                            <input type="text" name="surname" id="nom" placeholder="Nom" style="width:100%" ><br><br>
                            <input type="text" name="name" id="prenom" placeholder="Prénom" style="width:100%" ><br><br>
                            <input type="date" name="date" id="date" placeholder="Date de Naissance" style="float:left"><br><br>
                            <input type="text" name="mail" id="email" placeholder="Adresse Mail" style="width:100%" ><br><br>
                            <input type="text" name="numero_adresse" id="numero_adresse" placeholder="N°" style="width:10%">
                            <input type="text" name="voie" id="voie" placeholder="Voie" style="width:89%"><br><br>
                            <input type="text" name="complement" id="complement" placeholder="Complément d'adresse" style="width:100%"><br><br>
                            <input type="number" name="code_postal" id="code_postal" placeholder="Code Postale" style="width:50%; float:left"><br><br>
                            <input type="text" name="ville" id="ville" placeholder="Ville" style="width:100%"><br><br>
                            <input type="text" name="pays" id="pays" placeholder="Pays" style="width:100%"><br><br>
                            <input type="tel" name="tel" id="tel" placeholder="Téléphone" style="width:70%; float:left" ><br><br>  
                            <select id="classe" name="classe" style="width:30%; float:left">
                            <option value="ING1">ING1</option>
                            <option value="ING2">ING2</option>
                            <option value="ING3">ING3</option>
                            <option value="ING4">ING4</option>
                            <option value="ING5">ING5</option>
                            </select><br><br>
                            <input type="text" name="td" id="td" placeholder="TD" style="width:30%; float:left" ><br><br>  
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" name="fermer" class="btn btn-secondary" data-dismiss="modal">FERMER</button>
                            <input type="submit" name="inscrire" class="btn btn-primary" value="INSCRIRE">
                        </div>
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="projets">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>NOS PROJETS</h2>
                <hr>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero odio fugiat voluptatem dolor, provident officiis, id iusto! Obcaecati incidunt, qui nihil beatae magnam et repudiandae ipsa exercitationem, in, quo totam.</p>
            </div>
        </div>
    </div>
</section>

<section id="events">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2>NOS EVENTS</h2>
                <hr>
                
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
                                                <a href="#">
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
                                    <img src="photos/noube.jpg" alt="Product" class="img-responsive"/>
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
                                                <a href="#">
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
                                    <img src="photos/huber.jpg" alt="Product" class="img-responsive"/>
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
                                                <a href="#">
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
                                    <img src="photos/bouhnik.jpg" alt="Product" class="img-responsive"/>
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
                    <button type="submit" class="btn btn-primary" name="envoyer">ENVOYER</button>
                    
                </form>

                
            </div>
        </div>
    </div>
</section>
</center>


<?php  

include("footer/footer.php");
?>