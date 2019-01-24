<?php 
include "header.php"; 

if(isset($_SESSION)){
   // var_dump($_SESSION);
    //$id =$_GET['id'];	
    //var_dump($_GET);

}?>
    <body>
        <div class="container animated fadeInUp">
            <div class="col-md-7 centree" id="form-bg" >
                <form  id="contact" action="index.php" method="post" enctype="multipart/form-data">
                    <div class="col-md-12 centree form-group">
                        <input type="text" name="nom" placeholder="Nom du fichier à télécharger">
                        <input type="file" name="chemin">
                        <button type="submit" class="btn">                     
                        Download  <i class="fas fa-arrow-circle-down fa-3x"></i> Download
                        </button>
                    </div> 
                </form>
            </div>
        </div>
    </body>
<?php include "footer.php" ?>