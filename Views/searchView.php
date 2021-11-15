<?php
// search engine
ob_start();
?>

<div class="container shadow p-3 mb-5 bg-body rounded mt-5 search-view">
	<div class="row d-flex justify-content-center">
		<div class="col-md-10">
			<div class="p-3 py-4">
				<h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">
					Rechercher</h2>
				<div class="divider-custom">
					<div class="divider-custom-line"></div>
				</div>



				<form action="" method="get">
					<div class="position-relative ">
						<input type="hidden" name="search" value="">

						<div class="row g-3 mt-2 d-flex justify-content-center">
							<!-- Categories -->
							<div class="col-md-3">
								<select class="form-select form-search" id="categorie" name="id_categorie" onchange="updateCategories();">
									<option value="0">Toutes les catégories</option>
									<?php
									foreach ($listCategories as $id_categorie => $libelle_categorie) {
									?>
										<option value="<?= $id_categorie; ?>" <?php if (isset($errors['value']['id_categorie']) && ($id_categorie == $errors['value']['id_categorie'])) {
																					echo 'selected';
																				} ?>>
											<?php if (strlen($id_categorie) > 1) echo '---'; ?>
											<?= $libelle_categorie; ?></option>
									<?php } ?>
								</select>
							</div>

							<!-- Terms -->
							<div class="col-md-4"> <input type="text" name="terms" class="form-control" placeholder="Que recherchez-vous?"> </div>

							<!-- Localisation -->
							<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
							<script src="https://vicopo.selfbuild.fr/vicopo.min.js"></script>
							<!-- dans new annonce le name de l'input suivant est name="adresse_annonce"  -->
							<div class="col-md-4"> <input type="text" class="form-control" id="adr-search" name="adresse_annonce" placeholder="Où cherchez-vous?">

								<ul>
									<!--Affichage de la liste à partir de 2 caractères saisis-->
									<li data-vicopo="#adr-search" data-vicopo-click='{"#adr-search": "code - ville"}'>
										<strong data-vicopo-code-postal></strong>
										<span data-vicopo-ville></span>
									</li>
								</ul>
							</div>


						</div>
						<!-- Advanced criteria -->
						<div class="">
						<h6>Recherche avancée</h6>
						<!-- Prix -->
						<div class="col-md-1"> 
							<input type="button" type="number" class="form-control" value="Prix" onclick="minmaxPrice();" />
						</div>

						<div id="minmax" class="d-flex  d-none ">
							<div class="col-md-2 me-3"> 
								<span class="form-control pe-0 " >
									<input class="border-0 w-75" type="number" placeholder="Minimum">€
								</span>
							 </div>
							<div class="col-md-2"> <input type="number"  class="form-control" placeholder="Maximum"> </div>
						</div>

						<!-- immo -->
						<div class=" d-flex flex-wrap">
							<div style="display: none;" id="type-de-bien" class="col-md-2 me-3">
							
								<select class="form-select form-search " name="critere_type-de-bien">
									<option value="">Type de bien</option>
									<option value="Maison">Maison</option>
									<option value="Appartement">Appartement</option>
								</select>
							</div>
							<div style="display: none;" id="surface" class="col-md-2 me-3">
								
								<input class="form-control" id="surface" type="number" name="critere_surface" placeholder="Surface" />
							</div>
							<div style="display: none;" id="nombre-de-pieces" class="col-md-2">
								
								<input class="form-control" id="surface" type="number" name="critere_nombre-de-pieces" placeholder="Nombre de pièces" />

							</div>
						</div>

						<!-- consoles -->
						<div class="d-flex flex-wrap">
							<div style="display: none;" id="type" class="col-md-2 me-3">
								<select class="form-select form-search" name="critere_type">
									<option value="">Type</option>
									<option value="Console">Console</option>
									<option value="Jeux">Jeux</option>
									<option value="Accessoires">Accessoires</option>
								</select>
							</div>
						</div>

						<!-- voitures -->
						<div class="d-flex flex-wrap ">
							<div style="display: none;" id="marque" class="col-md-2 me-3">
								<input class="form-control" id="marque" type="text" name="critere_marque" placeholder="Marque" />
							</div>
							<div style="display: none;" id="modele" class="col-md-2 me-3">
								<input class="form-control" id="modele" type="text" name="critere_modele" placeholder="Modèle" />
							</div>
							<div style="display: none;" id="km" class="col-md-2 me-3">
								<input class="form-control" id="km" type="number" name="critere_km" placeholder="Kms" />
							</div>
							<div style="display: none;" id="carburant" class="col-md-2 me-3">
								<select class="form-select form-search" name="critere_carburant">
									<option value="">Carburant</option>
									<option value="Essence">Essence</option>
									<option value="Diesel">Diesel</option>
									<option value="Electrique">Electrique</option>
								</select>
							</div>
							<div style="display: none;" id="boite-de-vitesse" class="col-md-2 me-3">
								<select class="form-select form-search" name="critere_boite-de-vitesse">
									<option value="">Boite de vitesse</option>
									<option value="Manuelle">Manuelle</option>
									<option value="Automatique">Automatique</option>
								</select>
							</div>
							<div style="display: none;" id="couleur" class="col-md-2 me-3">
								<input class="form-control" id="couleur" type="text" name="critere_couleur" placeholder="Couleur" />
							</div>
							<div style="display: none;" id="nb-de-portes" class="col-md-2 me-3">
								<input class="form-control" id="nb-de-portes" type="number" name="critere_nb-de-portes" placeholder="Nombre de portes" />
							</div>
							<div style="display: none;" id="puissance" class="col-md-2 me-3">
								<input class="form-control" id="puissance" type="number" name="critere_puissance" placeholder="Puissance" />
							</div>
							<div style="display: none;" id="nb-de-places" class="col-md-2 me-3">
								<input class="form-control" id="nb-de-places" type="number" name="critere_nb-de-places" placeholder="Nombre de places" />
							</div>
						</div>
						<!-- telephonie -->
						<div class="d-flex flex-wrap">
							<div style="display: none;" id="capacite-de-stockage" class="col-md-2 me-3">
								<input class="form-control" id="capacite-de-stockage" type="number" name="critere_capacite-de-stockage" placeholder="Capacite de Stockage" />
							</div>
						</div>

						<!-- informatique -->
						<div class="d-flex flex-wrap">
							<div class="" style="display: none;" id="etat">
								<div class="row align-items-center">
									<div class="col-2">
										<a href="#" data-bs-toggle="modal" data-bs-target="#helpModal"><i class="fas fa-question-circle"></i></a>
									</div>
									<div class="col-10 ">
										<select class="form-select form-search" name="critere_etat">
											<option value="">État</option>
											<option value="Neuf">Neuf</option>
											<option value="Très bon état">Très bon état</option>
											<option value="Bon état">Bon état</option>
											<option value="État satisfaisant">État satisfaisant</option>
											<option value="Pour pièces">Pour pièces</option>
										</select>
									</div>
								</div>
							</div>
						</div>
					</div>

						<!-- Search button -->
						<div class="text-center position-absolute top-100 start-50 translate-middle" style="bottom:0;"><button class="btn btn-primary btn-lg btn-block m-2" type="submit">Rechercher</button> </div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!--Modale guide des états-->
<div class="modal" id="helpModal" tabindex="-1">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title">Guide de l'état du bien à vendre</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<ul>
					<li><strong>État neuf : </strong>Bien non-utilisé, complet, avec emballage non ouvert et notice(s) d’utilisation.</li>
					<li><strong>Très bon état : </strong>Bien pas ou peu utilisé, sans aucun défaut ni rayure, complet et en parfait état de fonctionnement.</li>
					<li><strong>Bon état : </strong>Bien en parfait état de fonctionnement, comportant quelques petits défauts (mentionnés
						dans l’annonce et visibles sur les photos).</li>
					<li><strong>État satisfaisant : </strong>Bien en état de fonctionnement correct, comportant des défauts et signes d’usure
						manifestes (mentionnés dans l’annonce et visibles sur les photos).</li>
					<li><strong>Pour pièces : </strong>Bien non fonctionnel, pour restauration complète ou récupération de pièces détachées.</li>
				</ul>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Fermer</button>
			</div>
		</div>
	</div>
</div>
<!--Fin modale guide des états-->

<script type="text/javascript">
	/*Display or not min max fields*/
	function minmaxPrice() {
		var minmax = document.getElementById('minmax');
		if (minmax.classList.contains('d-none')) {
			minmax.classList.replace('d-none' , 'd-block')
		}else if(minmax.classList.contains('d-block')){
			minmax.classList.replace('d-block' , 'd-none')
		}
	}

	function updateCategories() {
		// DOM elements
		var categoriesIds = new Array();
		categoriesIds['0'] = new Array();
		categoriesIds['1'] = ["type-de-bien", "surface", "nombre-de-pieces"];
		categoriesIds['2'] = ["marque", "modele", "km", "carburant", "boite-de-vitesse", "couleur", "nb-de-portes", "puissance", "nb-de-places"];
		categoriesIds['31'] = ["etat"];
		categoriesIds['32'] = ["type", "marque", "modele", "etat"];
		categoriesIds['33'] = ["marque", "modele", "couleur", "capacite-de-stockage", "etat"];
		categoriesIds.forEach((item, index) => {
			for (var j = 0; j < item.length; j++) {
				hide(item[j]);
			}
		})
		// display selected
		var categorie = document.getElementById('categorie');
		for (var j = 0; j < categoriesIds[categorie.value].length; j++) {
			display(categoriesIds[categorie.value][j]);
		}
	}

	function display(element) {
		var e = document.getElementById(element);
		e.style.display = "block";
	}

	function hide(element) {
		var e = document.getElementById(element);
		e.style.display = "none";
	}

	// first update if errors on form
	updateCategories();
</script>


<?php
$content = ob_get_clean();
$pageTitle = "Rechercher";
$pageDescription = "Moteur de recherche du site le bon koin";
require(__DIR__ . '/template.php');
?>