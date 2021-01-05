<?php

require_once 'inc/init.php';





require_once 'inc/header.php';
?>


<div id="imgRecrutement">
  <div class="textRecrutement">
  <h1>Faites ce que vous aimez, Nous nous occupons du reste.</h1>
  <p>Rejoignez notre communauté et bénéficiez de nos services.
  C'est rapide, simple et sans engagement.
  Créez votre compte en quelques minutes.</p>
  </div>

  <div class="divFormRecrutement">

  <form action="" method="post" class="formRecrutement"> 
    <h1>REJOIGNEZ HOMCHEF</h1>
    
    <div class="recrut"> 
      <div><label for="nom"></label></div>
      <div><input type="text" name="nom" id="nom" placeholder="Nom" value="<?php echo $_POST['nom'] ?? ''; ?>"></div>
    </div>

    <div class="recrut"> 
      <div><label for="prenom"></label></div>
      <div><input type="text" name="prenom" id="prenom" placeholder="Prénom" value="<?php echo $_POST['prenom'] ?? ''; ?>"></div>
    </div>

    <div class="recrut"> 
      <div><label for="ville"></label></div>
      <div><input type="text" name="ville" id="ville" placeholder="Votre Ville" value="<?php echo $_POST['ville'] ?? ''; ?>"></div>
    </div>

    <div class="recrut"> 
      <div><label for="code_postal"></label></div>
      <div><input type="text" name="code_postal" id="code_postal" placeholder="Code Postal" value="<?php echo $_POST['code_postal'] ?? ''; ?>"></div>
    </div>

    <div class="recrut"> 
      <div><label for="telephone"></label></div>
      <div><input type="text" name="telephone" id="telephone" placeholder="Téléphone" value="<?php echo $_POST['telephone'] ?? ''; ?>"></div>
    </div>

    <div class="recrut"> 
      <div><label for="email"></label></div>
      <div><input type="text" name="email" id="email" placeholder="E-mail" value="<?php echo $_POST['email'] ?? ''; ?>"></div>
    </div>

    <div class="recrut"> 
      <div><label for="mdp"></label></div>
      <div><input type="password" name="mdp" id="mdp" placeholder="Mot de passe" value="<?php echo $_POST['mdp'] ?? ''; ?>"></div>
    </div>

    <div class="recrutSub">
      <input type="submit" value="Inscrivez-vous">
    </div>

  </form>

  </div>
</div>

<div class="recrutSection2">
  <div class="recrutSection2Img"> <img src="photos/recrutement/logo.png" alt="Le logo "></div>
  <div class="recrutSection2Text">
    <h3>Qu’est-ce que Homchef ?</h3>
    <p>Une plateforme en ligne qui vous permet de recevoir des réservations en direct et simplifier la gestion de votre activité de chef à domicile.</p>
      
    <p>La plateforme leader sur le marché, avec plus d'un million d'assiettes servies depuis sa création.</p>
      
    <p>Un partenaire de confiance : une équipe à votre service pour vous accompagner dans le développement de votre entreprise (relation client, administratif, facturation, etc.)
    </p>
  </div>
</div>

<div class="recrutSection3">
  <h3>Être chef chez Homchef, comment ça marche ?</h3>
  <div>
    <img src="photos/recrutement/calendrier.png" alt="Logo représentant un calendrier avec un onglet validation effectuée">
    <p>Vous mettez en place vos <span>menus</span> et gérez votre <span>calendrier.</span>.</p>
  </div>
  <div>
    <img src="photos/recrutement/tirelire.png" alt="Logo représentant une tirelire en forme de cochon posé sur une main">
    <p>Suite à la résalisation de vos <span>prestations</span>, vous êtes payé directement sur votre <span>compte bancaire.</span></p>
  </div>
  <div>
    <img src="photos/recrutement/telephone.png" alt="Logo représentant un smatphone avec plusieurs logos sur les côtés">
    <p>Vous recevez des <span>réservations</span> pour des prestations de chef à domicile, cours de cuisine, etc.</p>
  </div>
</div>

<div class="recrutSection4">
  <h3>Les avantages de Homchef</h3>
  <div class="recrutSection4Div1">
    <div>
      <img src="photos/recrutement/free.png" alt="Logo représentant une paire d'aile avec écrit FREE au milieu">
      <p>Adhésion gratuite et sans engagement.</p>
    </div>
    <div>
      <img src="photos/recrutement/avis.png" alt="Logo représentant une pc portable avec 3 étoiles au dessus">
      <p>Soignez votre réputation en ligne en bénéficiant de notre notoriété.</p>
    </div>
  </div>
  <div class="recrutSection4Div2">
    <div>
      <img src="photos/recrutement/calendrier2.png" alt="Logo représentant une encoche de validation">
      <p>Selon votre rythme : choisissez vous-même vos disponibilités.</p>
    </div>
    <div>
      <img src="photos/recrutement/vesteChef.png" alt="Logo représentant la veste d'un chef">
      <p>Nos avantages exclusifs : vestes de cuisine, offres partenaires.</p>
    </div>
  </div>
</div>

<div id="imgRecrutement2">
  <div class="recrutSection5">
    <h3>Prêt(e) à nous rejoindre ?</h3>
    <p>Après votre inscription, vous serez pris(e) en charge par un conseiller de notre équipe qui répondra à toutes vos questions.</p>
    <a href="recrutement.php">REJOIGNEZ HOMCHEF</a>
  </div>
</div>

 


<?php
require_once 'inc/footer.php';