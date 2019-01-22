<?php 
include "header.php"; 
include "fonction.php";

if(isset($_SESSION)){
    //var_dump($_SESSION);
    //$id =$_GET['id'];	
}?>
<section>
	<div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Path</th>
                <th scope="col">Date de téléchargement</th>
                <th scope="col">Validité</th>
                </tr>
            </thead>
            <?php $reponse= infoLink($bdd,$id);
            while ($donnees=$reponse->fetch())
            { ?>
            <tbody>
                <tr>
                    <th scope="row"> <?php  echo $donnees['id'];?>  </th>
                    <td><?php  echo $donnees['name'];?> </td>
                    <td> <a id="disabled" href="<?php  echo $donnees['chemin'];?>" download>
                        <?php  echo $donnees['chemin'];?>
                        </a> 
                    </td>
                    <td><?php  echo $donnees['date'];?></td>
                    <td></td>      
                </tr>
            </tbody>		
            <?php      
            }
            ?>        
	</div>
</section>







<?php include 'footer.php'; ?>