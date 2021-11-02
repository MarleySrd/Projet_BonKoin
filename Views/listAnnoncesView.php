<?php
<<<<<<< HEAD

//page affichant la liste des annonces

ob_start();
// ob_start() démarre la temporisation de sortie. Tant qu'elle est enclenchée, aucune donnée, hormis les en-têtes, n'est envoyée au navigateur, mais temporairement mise en tampon.
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 col-lg-4 col-xl-3 mt-3 d-flex justify-content-center">
            <div class="card">
                <a href="#">
                    <img src="../Assets/img/template.jpg" class="card-img-top" alt="Image">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p>20€</p>
                        <div class="descCard">
                            <p> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Repudiandae voluptate eligendi mollitia delectus minima. Quibusdam earum necessitatibus, laudantium maxime aliquid nihil eligendi unde distinctio libero quisquam, ipsa molestias cupiditate non.
                                Maiores, dignissimos eveniet? Unde nobis vitae consequuntur saepe quaerat dolore maxime blanditiis atque laboriosam dignissimos ut mollitia eum voluptatibus odit ullam aliquam, quasi sed earum officiis illum sit consequatur sapiente!</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <?php
    $loopAnnonces =  ob_get_clean();
    // ob_get_clean — Lit le contenu courant du tampon de sortie puis l'efface
    require_once('template.php');
    ?>
=======
// page affichant la liste des annonces $annoncesList
ob_start();
?>
<div class="container-fluid">
	<div class="d-flex justify-content-center flex-wrap">
	
<?php
// si tableau vide afficher 'aucune annonce'
foreach ($annoncesList as $annonce) {
    ?>


			<div class="card m-2" style="width: 18rem;">
			<img class="card-img-top img-fluid" style="height: 300px; object-fit: contain;"
				src="Assets/img/annonces/<?=$annonce['id_annonce']?>.png"
				alt="<?=$annonce['titre_annonce']?>">
			<div class="card-body">
				<h5 class="card-title"><?=$annonce['titre_annonce']?></h5>
				<p class="card-text"><?=$annonce['desc_annonce']?></p>
				<a href="?view&id_annonce=<?=$annonce['id_annonce']?>"
					class="btn btn-primary">Détails</a>
			</div>
		</div>

<?php } ?>



		</div>
</div>



<?php
$content = ob_get_clean();
$pageTitle = "Liste des annonces";
require (__DIR__ . '/template.php');
?>
>>>>>>> 3147e017b68728d1fa2f11eba0bde652039f7f17
