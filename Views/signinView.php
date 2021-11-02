<<<<<<< HEAD
<?php include(__DIR__ . '/header.php'); ?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="login-form bg-light mt-4 p-4">
                    <form action="../?signin" method="POST" class="row g-3">
                        <h4>Inscription</h4>
                        <div class="col-12">
                            <label>Login</label>
                            <input type="text" name="login" class="form-control" placeholder="Entrez votre login">
                        </div>
                        <div class="col-12">
                            <label>Password</label>
                            <input type="password" name="pwd" class="form-control" placeholder="Entrez votre mot de passe">
                        </div>
                        <div class="col-12">
                            <input type="submit" class="btn btn-dark float-end" value="S'inscrire">
                        </div>
                    </form>
                    <hr class="mt-4">
                </div>
            </div>
        </div>
    </div>

</body>
=======
<?php
// page affichant la liste des annonces $annoncesList
ob_start();
?>


<section class="page-section" id="contact">
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
					</div>

					<!-- <div class="d-none" id="submitErrorMessage">
						<div class="text-center text-danger mb-3">Error sending message!</div>
					</div> -->
					<button class="btn btn-primary btn-xl" id="submitButton"
						type="submit">S'inscrire</button>
				</form>
			</div>
		</div>
	</div>
</section>


<?php
$content = ob_get_clean();
$pageTitle = "Inscription";
require (__DIR__ . '/template.php');
?>

>>>>>>> 3147e017b68728d1fa2f11eba0bde652039f7f17
