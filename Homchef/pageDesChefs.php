<?php

require_once 'inc/init.php';


require_once 'inc/header.php';
?>

<div id="pageChef">
		<div id="contenu">
			<aside id="aside">
				<div id="photoEtAvis">
					<img src="photos/pageChefs/damiensimon.png" alt="photo du chef Damien Simon" id="photoDamienSimon">
					<h3>Damien Simon</h3>
					<p>"Spécialisé en cuisine française !"</p>
					<div id="etoiles" class="flex">
						<div class="etoileJaune"><i class="fas fa-star"></i></div>
						<div class="etoileJaune"><i class="fas fa-star"></i></div>
						<div class="etoileJaune"><i class="fas fa-star"></i></div>
						<div class="etoileJaune"><i class="fas fa-star"></i></div>
						<div class="etoile"><i class="far fa-star"></i></div>
					</div>
					<p id="moyenne">MOYENNE 4/5</p>
				</div>
				<div id="descriptionChef">
				<h4>A PROPOS DU CHEF</h4>
				<P>Originaire de la région Poitou-Charentes, Damien a une grande expérience en hôtellerie**** luxe et restaurants en France et à l'étranger. Il est également lauréat de plusieurs concours culinaires.  Il a ensuite débuté un parcours en Angleterre dans l’hôtellerie et la restauration de luxe où il a pu expérimenter les différentes cuisines du monde ce qu'il lui a apporté une culture culinaire très enrichissante. En parallèle, encouragé par son chef de l’époque qui avait vu en lui des aptitudes culinaires fort intéressantes, il s'est lancé dans plusieurs concours de cuisine. Cela c'est avéré très positif puisque il a remporté différents titres pendant son séjour de 9 ans à Londres. A son retour en France, il a occupé des fonctions responsabilisantes dans le management et la gestion. Le Plazza Athénée entre autres, ont contribué à peaufiner le chef qu'il est devenu par la suite. Est ensuite venu le temps de se mettre à son propre compte en tant que chef patron d’un restaurant parisien. Assez de temps (3 ans) pour aller enfin vers une autre activité en tant que chef à domicile.</P>
				<h4>ZONE DESSERVIE</h4>
				<p>Paris, France +50km</p>
				<h4>LANGUES PARLÉES</h4>
				<p>Français, Anglais</p>
				<h4>TYPES DE CUISINE</h4>
				<p>Cuisine du marché, végétarienne, cocktail, brunch, française et italienne</p>
		</div>
			</aside>
		<main id="pageDesChefs" class="flex">
				<div class="menus">
					<div class="premierMenu">
						<div class="sliderimgSlider">
					     	<img src="photos/pageChefs/menu1.jpg" alt="plat du chef présenté dans une assiette" class="slider-img">
					    	<button class="boutonGauche" onclick="gauche()"><i class="fas fa-chevron-left"></i></button>
					     	<button class="boutonDroite" onclick="droite()"><i class="fas fa-chevron-right"></i></button>
					    </div>
						<div class="detailsMenu">
							<div>
								<p><strong>AMUSE-BOUCHE</strong> : Amuse-bouche du moment<br><strong>ENTRÉE</strong> : Rillettes aux deux saumons, pickles de radis noir et mesclun aux herbes<br><strong>PLAT</strong> : Joue de bœuf braisée au vin de truffe, spaetzles en persillade<br><strong>DESSERT</strong> : Crumble aux fruits de saison.</p>
							</div>
						</div>
						<div class="flex prix">
							<h5>50 € / convive</h5>
						</div>
						<div class="bouton flex">
							<button>CHOISIR</button>
						</div>
					</div>
				</div>
				<div class="menus">
					<div class="premierMenu">
						<div class="sliderimgSlider">
					      <img src="photos/pageChefs/menu1.jpg" alt="plat du chef présenté dans une assiette" class="slider-img2">
					     <button class="boutonGauche" onclick="gauche2()"><i class="fas fa-chevron-left"></i></button>
					     <button class="boutonDroite" onclick="droite2()"><i class="fas fa-chevron-right"></i></button>
					    </div>
						<div class="detailsMenu">
							<div>
								<p><strong>AMUSE-BOUCHE</strong> : Amuse-bouche du moment<br><strong>ENTRÉE</strong> : Rillettes aux deux saumons, pickles de radis noir et mesclun aux herbes<br><strong>PLAT</strong> : Joue de bœuf braisée au vin de truffe, spaetzles en persillade<br><strong>DESSERT</strong> : Crumble aux fruits de saison.</p>
							</div>
						</div>
						<div class="flex prix">
							<h5>50 € / convive</h5>
						</div>
						<div class="bouton flex">
						<button>CHOISIR</button>
						</div>
					</div>
				</div>
			<div class="menus">
				<div class="premierMenu">
					<div class="sliderimgSlider">
				    	<img src="photos/pageChefs/menu1.jpg" alt="plat du chef présenté dans une assiette" class="slider-img3">
				     	<button class="boutonGauche" onclick="gauche3()"><i class="fas fa-chevron-left"></i></button>
				     	<button class="boutonDroite" onclick="droite3()"><i class="fas fa-chevron-right"></i></button>
				    </div>
					<div class="detailsMenu">
						<div>
							<p><strong>AMUSE-BOUCHE</strong> : Amuse-bouche du moment<br><strong>ENTRÉE</strong> : Rillettes aux deux saumons, pickles de radis noir et mesclun aux herbes<br><strong>PLAT</strong> : Joue de bœuf braisée au vin de truffe, spaetzles en persillade<br><strong>DESSERT</strong> : Crumble aux fruits de saison.</p>
						</div>
					</div>
					<div class="flex prix">
						<h5>50 € / convive</h5>
					</div>
					<div class="bouton flex">
						<button>CHOISIR</button>
					</div>
				</div>
			</div>
		</main>
	</div>	
</div>

<?php
require_once 'inc/footer.php';