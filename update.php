<?php include 'fonction.php'; 
session_start();
$_SERVER['argc'];
$_SERVER['argv'];
print_r($_SERVER);

$now = time();
$day = strtotime('+1 day');
$min = strtotime('+10 minutes');
$id = $_SESSION['id'];
//var_dump($id);

function idLink($bdd,$id) 
{
    $reponse=$bdd->query('SELECT link.id FROM link 
    INNER JOIN users ON link.`userId` = users.id WHERE users.id='.$id); 
    return $reponse;
}
  
function updateLink($bdd,$id)
{   
    $link = idLink($bdd,$id);//permet de récupérer l'id de la table 'link'
    while ($idLink = $link-> fetch())
    {
        $reponse=$bdd->prepare('UPDATE `link` SET `chemin`=:chemin WHERE  id ='.$idLink['id']);
        $requete=$reponse->execute(array(
        'chemin'=> '#',   
        ));
        //var_dump($idLink['id']);
    };  
   
}  
updateLink($bdd,$id);