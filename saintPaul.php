<!DOCTYPE html>
<html>
    <head>
      <title></title>
    </head>
    <body>
      <?php 
      include "menu.php";
      ?>
            
<!--- Présentation génerale du relais-->
    <section id="saintVincent" class="container">
        <div class=" paroisse row">
            <div class="col-md-12 col-sm-12">
                  <h1>Relais Saint Paul lès Dax</h1>    
            </div>     
        </div>
        <div class="row">
            <div class="col-md-8 col-sm-8">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                      <img class="d-block w-50" src="assets/images/st-paul-les-dax.jpg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-50" src="assets/images/st-vincent-de-xaintes.jpg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-50" src="assets/images/cathedax.jpg" alt="Third slide">
                    </div>
                </div>  
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
            </div>
                <a href="visiteSaintPaul.php">Une église à visiter</a>
            </div>
            <div class="saintVincent2 col-md-4 col-sm-4">
                <div class="permanence">
                    <h5>Accueil et permanence</h5>
                    <p>Du Lundi au vendredi de 14h30 à18h <br> de 15h à 18h <br> 
                      Presbytère Saint Paul<br>58 Rue Victor Hugo 40990  Saint Paul lès-Dax<br>05 58 91 58 93</p>
                </div><br><br>   
            </div>
        </div>
      
    </section>       

          
<!--l'organisation du relais-->
    <section id="activites" class="container">
      
                    <h2>L'organisation du relais</h2>

            <div class="  row">
                <div class=" col-md-3 col-sm-3">
                    <img src="">
                    <h5>EARP</h5> 
                    <p>Les membres</p> 
                </div>
                <div class=" col-md-3 col-sm-3">
                   <img src="">
                   <h5>Equipe liturgique</h5>
                   <p>Les membres</p>
                </div>
                <div class=" col-md-3 col-sm-3">
                  <img src="">
                  <h5>Equipe funéraille</h5>
                  <p>Les membres</p> 
                </div>

                <div class="col-md-3 col-sm-3">
                   <img src="">
                    <h5>La catéchèse</h5> 
                    <p>Les membres</p> 
                </div>
          </div>
    </section>
          
<!--la vie du relais-->
    <section id="sacrements" class="container">
      
                    <h2>La vie du relais</h2>
                
            <div class="  row">
                <div class="col-md-4 col-sm-4">
                   <h5>Les messes</h5>
                  <p>Messe en semaine<br>Du lundi au vendredi <br> 18h15 <br> Dimanche et sollenité<br> 10h45 et 18h</p>
                    
                </div>
                <div class=" col-md-4 col-sm-4">
                    <h5>La kermesse</h5>   
                </div>
                <div class=" col-md-4 col-sm-4">
                  <h5>Les  bradéries</h5>
                </div>
            </div>
    </section>
    <section id="newsletters" class="container">
      <?php
        include"newsletters.php";
      ?>  
    </section>
    <section class="container">
      <?php
        include"footer.php";
      ?>  
    </section>                 
  </body>
</html>

  </body>
</html>