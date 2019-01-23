<?php include 'fonction.php'; 
//https://crontab-generator.org/
//https://doc.ubuntu-fr.org/cron




function updateFromBdd($bdd) {
    $fileId=$bdd->query('SELECT `userId` FROM `link`');
    while($file=$fileId->fetch()) {
        $id=$file;
        var_dump($id);
        if($id['userId']!=1) {
            $timing=3;
        }else {
            $timing=1;
        }
        $reponse=$bdd->prepare('UPDATE `link` SET `chemin`=:chemin WHERE `userId` = ' .$id['userId']. ' AND ADDDATE(`link`.`date`,INTERVAL ' .$timing. ' MINUTE) < NOW()');
        $requete = $reponse->execute(array(
            'chemin'=>'#'
        ));
    }
 }

/*function userId($bdd,$id) 
{
    $reponse=$bdd->query('SELECT `userId` FROM `link`'); 
    return $reponse;
}


function updateLink($bdd,$id)
    {   
        $userId = UserId($bdd,$id);//permet de récupérer l'id de la table 'link'
        var_dump($userId);
            while ($idLink = $link-> fetch())
            {
                $reponse=$bdd->prepare('UPDATE `link` SET `chemin`=:chemin WHERE  id ='.$idLink['id']);
                $requete=$reponse->execute(array(
                'chemin'=> '#',   
                ));
                var_dump($idLink['id']);
                
        };
      
    }  */


