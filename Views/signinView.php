<?php
// page affichant la liste des annonces $annoncesList
ob_start();
?>


<section class="page-section signin" id="contact">
	<div class="container">
		<h2
			class="page-section-heading text-center text-uppercase text-secondary mb-0">
			Inscription</h2>

		<div class="divider-custom">
			<div class="divider-custom-line"></div>
		</div>

		<div class="row justify-content-center">
			<div class="col-lg-8 col-xl-7">
				<form action="?signin" method="post">


					<div class="form-floating mb-3">
						<input class="form-control" id="nom" name="nom" type="text"
							placeholder="Nom d'utilisateur" required="required" /> <label
							for="nom">Nom d'utilisateur</label>
					</div>
					
					<div class="form-floating mb-3">
						<input class="form-control" id="mail" name="mail" type="text"
							placeholder="Email de l'utilisateur" required="required" /> <label
							for="mail">Email de l'utilisateur</label>
					</div>

					<div class="form-floating mb-3">
						<input class="form-control" id="pwd" name="pwd" type="password"
							placeholder="Mot de passe" required="required" /> <label
							for="pwd">Mot de passe</label>
<<<<<<< HEAD
						<small class="form-text text-muted">Le mot de passe nécessite une majuscule, un chiffre, et un caractère spécial</small>
=======
							<small class="form-text text-muted">Le mot de passe de 8 caractères minimum nécessite une majuscule, un chiffre, et un caractère spécial.</small>
>>>>>>> fe1d45f17ed0aff4d06324c4ecf0e827a8b3d563
					</div>
					<?php if (isset($errorPassword)){ ?>
						<div id="submitErrorMessage">
							<div class="text-center text-danger mb-3"><?=$errorPassword ?></div>
						</div>
					<?php } ?>
					<button class="btn btn-primary me-2 " id="submitButton"
						type="submit">S'inscrire</button>
				</form>
			</div>
		</div>
	</div>
</section>


<?php
$content = ob_get_clean();
$pageTitle = "Inscription";
$pageDescription= "Page d'inscription pour site du bon koin";
require (__DIR__ . '/template.php');
?>

