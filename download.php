<?php  include 'fonction.php';
include 'header.php';?> 

<?php 

if(isset($_GET['link']))
{?>
    <div class="container">
        <a class="btn" href='<?php echo $_GET['link']?>' download > Click ici pour télécharger ton fichier </a>
    </div>

<?php }

?> 
