<?php include 'fonction.php'; 
//https://crontab-generator.org/
//https://doc.ubuntu-fr.org/cron




function updateFromBdd($bdd) {
    $fileId=$bdd->query('SELECT `userId` FROM `link`');
    while($file=$fileId->fetch()) {
        $id=$file;
        //var_dump($id);
        if($id['userId']!=1) {
            $timing=3;
        }else {
            $timing=1;
        }
        $reponse=$bdd->prepare('UPDATE `link` SET `chemin`=:chemin WHERE `userId` = ' .$id['userId']. ' AND ADDDATE(`link`.`date`,INTERVAL ' .$timing. ' MINUTE) < NOW()');
        $requete = $reponse->execute(array(
            'chemin'=>'*'
        ));
    }
 }
 updateFromBdd($bdd) ;
 
 function deleteOldFiles($bdd) {

    $file=$bdd->query('SELECT filename FROM link WHERE `chemin`="*"');
    while ($filename=$file->fetch())
     {
       shell_exec('rm /var/www/transfer/files/'.$filename['filename']);
       var_dump($filename);
     }
}
deleteOldFiles($bdd);


