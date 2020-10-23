<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
    <div class="container"> 
  		<?php 
  			include "menu.php";
  		?>
		
       <section class="row "><!--section class row -->
           <div class="col-12 col-md-6 col-lg-3">
                <section class="card actualite">
                   <div class="card-body">
                    <img src="images/envoiEapp.jpg" alt="Image d'actualités" class="card-img-top" />
                      <h1 class="h3 card-title"><a>Actualités</a></h1>
                       <p>Le dimanche 4 octobre, Mgr SOUCHU a procedé à l'envoi en mission de la nouvelle EAPP (Equipe d'Animation Pastorale Paroissiale)</p>
                   </div>
                </section>
           </div><!--Fin premier élement-->
            <div class="col-12 col-md-6 col-lg-3">
                <section class="card bonneNouvelle">
                  
                   <div class="card-body">
                      <h1 class="h3 card-title"><a>Bonne Nouvelle</a></h1>
                      <p>le bulletin d'information de la paroisse paraît une fois par trimestre.</p><a href="documents/bonneNouvelle.pdf" target="_blank">Pour plus dinformations</a>
                          
                   </div>
                </section>
           </div><!--Fin second element-->
            <div class="col-12 col-md-6 col-lg-3">
                <section class="card annonces">
                  
                   <div class="card-body">
                      <h1 class="h3 card-title"><a href="documents/annonceParoissiales.pdf" target="_blank">Annonces de la semaine</a></h1>  
                   </div>
                </section>
           </div><!--Fin troisième element-->
            <div class="col-12 col-md-6 col-lg-3">
                <section class="card">
                  <img src="images/images/video.jpg" alt="Carte" class="card-img-top" />
                   <div class="card-body">
                      <h1 class="h3 card-title"><a href="https://diocese40.fr/les-paroisses/" target="_blank">Une paroisse dans un diocèse</a></h1>
                       
                   </div>
                </section>
           </div><!--Fin quatrième element-->
       </section><!-- Fin section class row -->
       <?php 
        include"footer.php";
      ?>
    </div>                 
  </body>
</html>

	