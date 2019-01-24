<?php ;
include 'header.php';
include 'session.php';
session_start(); //var_dump($_SESSION);
?>



<div class="container animated fadeInUp">
    <div class="col-md-7 centree" id="form-bg" >
        <form id="contact" action="login.php" method="post"> <!-- enctype="multipart/form-data" -->
            <h3>Connexion</h3>
            <h4>Entrez votre email et mot de passe</h4>
            
            <fieldset>
                <input name="mail" placeholder="email" type="email" tabindex="2" >
            </fieldset>

            <fieldset>
                <input type="password" id="myInput" name="pass" placeholder="mot de passe" type="text" tabindex="3"><br>
                <input type="checkbox" onclick="myFunction()"><br>
                <i id="eye"class="fas fa-eye fa-2x"></i>
                <i id="eyeHidden"class="fas fa-eye-slash fa-2x"></i>
            </fieldset>

            <fieldset>
                <button type="submit" id="contact-submit" name="login" >Valider</button>
            </fieldset>
        </form>
    </div>
</div>



<?php include 'footer.php'; ?>