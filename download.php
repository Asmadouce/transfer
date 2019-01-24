<?php 
include 'header.php';?> 

<?php 

if(isset($_GET['link']))
{?>
    <div class="container">
        <h1 class="col-12 text-center tel"> Tu peux maintenant télécharger ton fichier </h1>
        <a   class="btn col-12 download" onclick="downFunction()"  href='<?php echo $_GET['link']?>' download >
            <i   id="down" class="fas fa-arrow-alt-circle-down fa-6x"></i>    
        </a>
    </div>

<?php }



include 'footer.php';?> 


