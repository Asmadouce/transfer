<?php ;
include 'header.php';
//var_dump($_POST);
?>
<div class="container animated fadeInUp">  
    <div class="col-md-7 centree" id="form-bg" >
        <form  id="contact" action="fonction.php" method="post" > 
            <h3>Inscription</h3>
            <h4>Entrez un pseudo, un email et un mot de passe</h4>
            <fieldset>
                <input name="pseudo" placeholder="Pseudo" type="text" tabindex="1" required autofocus>
            </fieldset>
            
            <fieldset>
                <input name="mail" placeholder="email" type="email" tabindex="2" required>
            </fieldset>
            <fieldset>
                <input type="password" id="myInput" name="pass" placeholder="mot de passe" type="text" tabindex="3"><br>
                <input type="checkbox" onclick="myFunction()"><br>
                <i id="eye"class="fas fa-eye fa-2x"></i>
                <i id="eyeHidden"class="fas fa-eye-slash fa-2x"></i>
            </fieldset>
        
            <fieldset>
                <button type="submit" id="contact-submit" name="sub" >Valider</button>
            </fieldset>
        </form> 
    <div>
</div>
<?php include 'footer.php'; ?>