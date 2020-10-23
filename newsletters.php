<!DOCTYPE html>
<html>
	<head>
		<title>Contactez moi!</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" ></script>
		<link rel="stylesheet" type="text/css" href="styles.css">
	</head>
	<body>
		<div id="newsletters" class="container">
			<div class="divider"></div>
			<div class="heading">
				<h2>Inscrivez vous à la newsletter paroissiale</h2>
             
            <div class="d-flex justify-content-center">
	  				<div class="spinner-border" role="status">
	    				<span class="sr-only">Loading...</span>
	  				</div>
			</div>



			</div>
			<div class="row">
				<div class="col-lg-12 col-lg-offset-1">
					<form id="contact" method="post" action="" role="form">
<!-- Je remarque les élement sont deux par deux l'un à coté de l'autre il faut donc une classe row qui aura des classe col-md-6-->
						<div class="row">
							<div class=" col-md-6">
								<label for="firstname" id="firstname"> Prenom<span class="blue">*</span></label>
								<input type="text" name="firstname"   class="form-control" placeholder="Votre prénom" value = "">
								<p class="comments">message d'erreur</p>
							</div>


							<div class=" col-md-6">
								<label for="name" id="name">Nom<span class="blue">*</span></label>
								<input type="text" name="name" class="form-control" placeholder="Votre nom" value = "">
								<p class="comments">message d'erreur</p>
							</div>


							<div class=" col-md-6">
								<label for="email" id="email"> email<span class="blue">*</span></label>
								<input type="text" name="email" class="form-control" placeholder="Votre email" value = "">
								<p class="comments">message d'erreur</p>
							</div>


							<div class=" col-md-6">
								<label for="telephone" id="phone"> Téléphone<span class="blue"></span></label>
								<input type="tel" name="phone" class="form-control" placeholder="Votre Télephone" value = "">
								<p class="comments">message d'erreur</p>
							</div>


<!-- Vu que le message prend toute la page, je vais lui donner une class col-md-12-->
							<div class=" col-md-12">
								<label for="telephone" id="phone"> Adresse postale<span class="blue"></span></label>
								<input type="tel" name="phone" class="form-control" placeholder="Votre adresse" value = "">
								<p class="comments" >message d'erreur</p>
							</div>


							<div class=" col-md-12">
								<p class="blue">*<strong>Ces informations sont requises</strong></p>
							</div>


							<div class=" col-md-12">
								<input type="submit"  class="button1" value="Envoyez">
							</div>
						</div>

						<p class="thanks-you" > Votre message a bien été envoyé. Merci de m'avoir contacter! </p>
					</form>
					
				</div>
			</div>
			
		</div>

	</body>
</html>