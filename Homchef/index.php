<?php

require_once 'inc/init.php';





require_once 'inc/header.php';
?>

<!-- 1ERE PARTIE INDEX -->

		<div id="imageAccueil">
			<p id="slogan">Faites une pause, prenez un chef !</p>
			<a href="#geoloc" id="recherche">RECHERCHE RAPIDE PAR LOCALISATION</a>
		</div>
		<div class="clear"></div>
		
		<!-- PARTIE NOS SERVICES -->
		 <section id="nosServices">
	    	<h2>Nos services</h2>
		    <div class="traitService moutarde"></div>
		    <div class="flex" id="lotImgServices">
		      <div>
		        <img src="photos/index/loupe.png" alt="Logo représentant une loupe de couleur or">
		        <h3>Recherches avancées</h3>
		        <p>Recherchez un chef grâce à la recherche rapide, la localisation ou encore à partir d'une spécialité.</p>
		      </div>
		      <div>
		        <img src="photos/index/fleche.png" alt="Logo représentant une fleche pointant vers la droite de couleur or avec un fond marron">
		        <h3>Notes et avis</h3>
		        <p>Faites nous parts de vos expériences avec les chefs en laissant une note ou un commentaire !</p>
		      </div>
		      <div>
		        <img src="photos/index/certificat.png" alt="Logo représentant un certificat de couleur or">
		        <h3>Professionnels et particuliers</h3>
		        <p>Inscrivez vous en tant que professionnel pour pouvoir référencer votre profil de chef. Pour les particuliers,
		          votre adhésion gratuite vous permettra de personnaliser votre compte!</p>
		      </div>
		      <div>
		        <img src="photos/index/coeur.png" alt="Logo représentant un coeur de couleur marron">
		        <h3>Retrouvez-nous</h3>
		        <p>Retrouvez-nous sur vos réseaux sociaux préférés.</p>
		      </div>
		    </div>
			</section>
			
			<!-- PARTIE GEOLOC -->
			<section id="geoloc" class="flex">
				<h2>Géolocalisation</h2>
				<div class="traitgeo"></div>
				<p class="PremierTextGeo">Retrouvez nos Chefs vedettes de la semaine</p>
				<div class="partie2Geo flex">
					<div id="map" class="flex">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d5653620.942475821!2d2.0516999500000006!3d46.219264949999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1605636580509!5m2!1sfr!2sfr"
							width="70%" height="600px" style="border:0;" allowfullscreen="" aria-hidden="false"
							tabindex="0"></iframe>
					</div>
					<div class="profilGeo">
							<img src="photos/index/damiensimon.png" class="imgGeo" alt="Image de profil représentant Damien Simon l'un des chefs vedette de la semaine">
							<p><span>Damien simon</span><br>
								Gastronomie Française</p>
					</div>
					<div class="profilGeo2">
							<img src="photos/index/damiensimon.png" class="imgGeo" alt="Image de profil représentant Damien Simon l'un des chefs vedette de la semaine">
							<p><span>Damien simon</span><br>
								Gastronomie Française</p>
					</div>
					<div class="profilGeo3">
							<img src="photos/index/damiensimon.png" class="imgGeo" alt="Image de profil représentant Damien Simon l'un des chefs vedette de la semaine">
							<p><span>Damien simon</span><br>
								Gastronomie Française</p>
					</div>
				</div>	
			</section>
			 
			 <!-- PARTIE LES SPECIALITES -->
		<section id="lesSpecialites"> <!--div spécialités avec liens-->
			<div class="blocImage">
				<h2>Les spécialités de nos chefs</h2>
				<div class="traitService moutarde"></div>
			</div>
			<div id="box">
				<a class="speChef1" href="pagedesspecialites.php">
					<img src="photos/index/chinois.png" alt="spécialités chinoises"/>
					<span class="speChef">Chinois</span>
				</a>
				<a class="speChef1" href="pagedesspecialites.php">
					<img src="photos/index/americain.png" alt="spécialités américaines"/>
					<span class="speChef">Américain</span>
				</a>
				<a class="speChef1" href="pagedesspecialites.php">
					<img src="photos/index/baggle.png" alt="spécialités baggles"/>
					<span class="speChef">Bagel</span>
				</a>
				<a class="speChef1" href="pagedesspecialites.php">
					<img src="photos/index/mexicain.png" alt="spécialités mexicaines"/>
					<span class="speChef">Mexicain</span>
				</a>
				<a class="speChef1" href="pagedesspecialites.php">
					<img src="photos/index/japonais.png" alt="spécialités japonaises"/>
					<span class="speChef">Japonais</span>
				</a>
				<a class="speChef1" href="pagedesspecialites.php">
					<img src="photos/index/italien.png" alt="spécialités italiennes"/>
					<span class="speChef">Italien</span>
				</a>
				<a class="speChef1" href="pagedesspecialites.php">
					<img src="photos/index/francais.png" alt="spécialités françaises"/>
					<span class="speChef">Français</span>
				</a>
				<a class="speChef1" href="pagedesspecialites.php">
					<img src="photos/index/vegetarien.png" alt="spécialités végétariennes"/>
					<span class="speChef">Végétarien</span>
				</a>
			</div>
		</section>

			<!-- PARTIE AVIS -->
		<section id="avis">
			<div class="blocImage">
				<h2 id="comment">Les hôtes partagent leurs expériences</h2>
				<div class="traitService1 moutarde"></div>
			</div>
			<!-- Theme Boostrap pour le carousel + css dans assets et css boostrap-->
			<div>
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				    <ol class="carousel-indicators">
				    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				     	<li data-target="#myCarousel" data-slide-to="1"></li>
				     	<li data-target="#myCarousel" data-slide-to="2"></li>
				    </ol>
				    <div class="carousel-inner">
			      		<div class="carousel-item active">
				        	<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#FFFFFF"/></svg>
				        	<div class="container">
				        		<div class="carousel-caption text-left">
				            		<h1 class="nomAvis">Mr X.</h1>
				            		<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum"</p>
			          			</div>
			        		</div>
			      		</div>
			      		<div class="carousel-item">
				        	<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#FFFFFF"/></svg>
				        	<div class="container">
			          			<div class="carousel-caption">
					            	<h1 class="nomAvis">Mme Y</h1>
					            	<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum"</p>
				          		</div>
			        		</div>
			      		</div>
			      		<div class="carousel-item">
			        		<svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="80%" fill="#FFFFFF"/></svg>
				        	<div class="container">
				        		<div class="carousel-caption text-right">
					            	<h1 class="nomAvis">Pauleta</h1>
					            	<p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum"</p>
					        	</div>
				        	</div>
			      		</div>
			    	</div>
			    	<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
			      		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			      		<span class="sr-only">Previous</span>
			    	</a>
			    	<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
			      		<span class="carousel-control-next-icon" aria-hidden="true"></span>
			      		<span class="sr-only">Next</span>
			    	</a>
			  	</div>
			</div>
		</section>  


<?php
require_once 'inc/footer.php';