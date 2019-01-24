<?php include "fonction.php";?>

<!DOCTYPE html>
<html>
    <head>
        <title>John et Asmaoui transfer</title>
        <link rel="icon" href="" sizes="16x16" type="image/png">
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="library/bootstrap/css/bootstrap.css" />
	    <link rel="stylesheet" href="library/fontawesome/css/all.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
        <link rel="stylesheet" href="css/animate.min.css" />
    </head>

    <header>
    

    
        <div class="link" >
            <div class="container">
                <h2>JOHN & ASMAOUI</h2>
                <a class=" link--yaku" href="index.php"> 
                    <span>T</span><span>r</span><span>a</span><span>n</span><span>s</span><span>f</span><span>e</span><span>r</span>					
                </a>
            </div> 
        </div>

        <div class="container sticky-top" >
            <div class="row">    
                <nav class="navbar navbar-expand-lg col-9">      
                    <div class="navbar-nav Dosis-Bold-nav"> 
                    <?php if($_SESSION['mail']){?>
                        <a class=" button button2 nav-item nav-link pad ins" href="infoLink.php">Historique</a>                       
                        <a class=" button button2 nav-item nav-link pad ins" href="logout.php">Déconnexion</a>
                <?php } 
                else { ?>
                    <a class="animated infinite tada delay-2s button button2 nav-item nav-link pad" href="inscription.php">Inscription</a>      
                    <a class="button button2 nav-item nav-link pad ins" href="login.php">Connexion</a>
                    <?php }?>               
                    </div>             			  					
                </nav>
                <div id="message">
                    <?php   $welcome=($_SESSION['id']);
                if($_SESSION){
                    echo 'Bienvenue ' .$_SESSION['mail'];
                }
                    ?>
                </div>
            </div>
        </div>
    </header>