<?php  require 'connexion.php'; 
session_start();
if(isset($_POST['sub'])){
    newContact($bdd);
}

if (isset($_POST))
{
        $nom                   = $_POST["nom"];
        $chemin                = $_FILES["chemin"]["name"];
        $uploadir              = "files/";
        $cheminPath            = $uploadir. basename($chemin);
        $size = $_FILES['chemin']['size'];
        $id = $_SESSION['id'];

    //var_dump($chemin);



    if ( !$_SESSION ) {$id=1;} else { $id = $_SESSION['id']; }
    //var_dump();

    //echo '<pre>';
    if ((isset($_SESSION) && $size > 7000000) || (!$_SESSION && $size > 3000000)) {
        echo "votre fichier est trop lourd ! ";
    } else {
        if (move_uploaded_file($_FILES['chemin']['tmp_name'], $cheminPath)) 
        {
                chmod($cheminPath, 0666);
                echo "Le fichier est valide, et a été téléchargé avec succès.";
                $req = $bdd->prepare('INSERT INTO link(`name`,`filename`,`chemin`,`userId`) VALUES(:nom,:cheminnom ,:chemin,:userId)');
                $req->execute([
                    'nom'=>$nom,
                    'cheminnom'=>$chemin,
                    'chemin'=>$cheminPath,
                    'userId'=>$id 
                ]);
                header("location:download.php?link=".$cheminPath);
        }
    }
}
//echo '</pre>';
//--------------------------------------------------------------------------------------------------------------
//--------------------------------------------------------------------------------------------------------------

function newContact($bdd) 
{
	$query=$bdd->prepare('INSERT INTO users(username,mail,`password`) VALUES (:pseudo,:mail,:pass)');
	$query->execute([
		'pseudo'=>$_POST['pseudo'],
		'mail'=>$_POST['mail'],
		'pass'=>$_POST['pass']
    ]);
    $donnees = getlastcontact($bdd,$_POST['mail']);
    $id = $donnees['id'];
    $mail = $_SESSION['mail'];
    header("location:index.php?id=".$id);    
}

function getlastcontact($bdd,$mail)
{
    $query='SELECT * from users WHERE mail="'.$mail.'"';
    $result=$bdd->query($query);
    $donnees=$result->fetch();
    return $donnees;
}
function infoLink($bdd,$id) 
{
    $reponse=$bdd->query('SELECT * FROM link 
    INNER JOIN users ON link.`userId` = users.id WHERE users.id='.$id); 
    return $reponse;
}

