<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
            crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
            integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
            integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
            crossorigin="anonymous"></script><!-- <?php
$querySelect = new Sql();
$requete = "SELECT * FROM `planning` where Client_id_client is null;";
$RDV = $querySelect->lister($requete);
//var_dump($RDV[0]['date']);

$tblQuery = new Sql();
$requeteEmp = "SELECT * from service ser
                                 join planning pl 
                                 where ser.id_service = pl.Service_id_Service and pl.Client_id_client is null;" ;
$tblService = $tblQuery->lister($requeteEmp);
//var_dump($tblService[0]['nom_service']);
//var_dump($tblService[0]['id_service']);
//var_dump("Je suis lq");
//	for ($i = 0; $i < count($tblService); $i++) {
?> -->


<body class="home page-template-default page page-id-2172 wp-embed-responsive stk--is-blocksy-theme ct-loading" data-link="type-4" data-prefix="single_page" data-header="type-1:sticky" data-footer="type-1:reveal" itemscope="itemscope" itemtype="https://schema.org/WebPage">

	<main id="main" class="site-main hfeed">

		<div class="ct-container-full" data-content="normal">
			<div class="entry-content">
				<h2 class="has-text-align-center has-text-color" style="color:#ffffff">Bienvenue Raylina Beauty</h2>
				<div class="wp-container-3 wp-block-columns alignwide">
					<div class="wp-container-1 wp-block-column">
						<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
							<img loading="lazy" width="1536" height="2049" class="wp-block-cover__image-background wp-image-2525" alt="" src="./assets/img/pmtkoufa.jpg" style="object-position:49% 70%" data-object-fit="cover" data-object-position="49% 70%" srcset="./assets/img/pmtkoufa.jpg, ./assets/img/pmtkoufa.jpg-225x300.jpg 225w, ./assets/img/pmtkoufa.jpg2-768x1025.jpg 768w,
  sizes=" (max-width: 1536px) 100vw, 1536px />
							<div class="wp-block-cover__inner-container">
								<h2 class="has-text-align-left has-text-color" style="color:#ffffff"><a href="index.php?page=prestations-femme" data-type="page" data-id="2039">Les Prestations Femme</a></h2>
							</div>
						</div>
					</div>


					<div class="wp-container-2 wp-block-column">
						<div class="wp-block-cover is-light has-custom-content-position is-position-bottom-left"><span aria-hidden="true" class="wp-block-cover__background has-background-dim"></span>
							<img loading="lazy" width="1536" height="2049" class="wp-block-cover__image-background wp-image-1574" alt="" src="./assets/img/coupehome.jpg" data-object-fit="cover" srcset="./assets/img/coupehome.jpg  1536w" , />
							<div class="wp-block-cover__inner-container">
								<h2 class="has-text-align-left"><a href="index.php?page=prestations-homme" data-type="page" data-id="2044">Les Prestations homme</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>

	<div class="entry-content" style="width:45%;position:relative;top: 15%;left: 30%;margin-top: 2%;">
		<!-- <div id="container" style="width:50%;position:relative;top: 15%;left: 25%;margin-top: 2%;margin-bottom: 18%;"> -->
		<form action="index.php?page=reservation" method="post">
			<h1>Les Choix de Jour pour RDV</h1>
			<label for="jour">Jour:</label><br>

			<select name="jour" id="jour">
				<?php for ($i = 0; $i < count($RDV); $i++) {
				?>
					<option value="<?= $RDV[$i]['date'] ?>"><?= $RDV[$i]['date'] ?></option>
				<?php  } ?>
			</select>

			<label for="temps">Temps:</label><br>

			<select name="heure" id="heure">
				<?php for ($i = 0; $i < count($RDV); $i++) {
				?>
					<option value="<?= $RDV[$i]['heure_debut'] ?>"><?= $RDV[$i]['heure_debut'] ?></option>
				<?php  } ?>
			</select>
			<label for="service">choisir ton service:</label><br>
			<select name="service" id="styliste">
				<?php
				for ($i = 0; $i < count($tblService); $i++) {
				?>
					<option value="<?= $tblService[$i]['id_service'] ?>"><?= $tblService[$i]['nom_service'] ?></option>
				<?php  } ?>
			</select>

			<input type="submit" value="Submit" style="display:block;margin:0 auto">
			<input type="hidden" name="frmReservation" />

		</form>
	</div>
	</div>
	<div id="bandeau_cookie" class="cookie_deactivate">
    <div class="row">
        <div class="col-md-12 col-xs-12 cookie_spacer">
            <span class="cookie_text">Ce site utilise des cookies afin que vous puissiez avoir la meilleure expérience
                de navigation possible. En poursuivant votre navigation ou en cliquant sur l'option "ACCEPTER", vous
                consentez à son utilisation.</span>

        </div>
        <div class="col-md-12 col-xs-12 container_cookie-btn">
            <button id="acceptCookies" class="btn btn-advanced"> Accepter </button>
            <button id="personnalize_my_cookie" type="button" class="btn btn-primary" data-toggle="modal"
                data-target="#rgpd_modal">
                Personnaliser
            </button>
            <a href="index.php?page=rgpd" class="btn btn-advanced">En savoir plus</a>
        </div>

    </div>
</div>

<div class="modal fade" id="rgpd_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Gestionnaire des cookies</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row ">
                    <div class="col-md-12 gestion_cookie-div-text">
                        <h2>Je personnalise mes préférences</h2>
                        <p>Les fonctionnalités de ce site listées ci-dessous s’appuient sur des services proposés par
                            des tiers.
                            Si vous donnez votre accord (consentement) ces cookies, ces tiers collecteront et
                            utiliseront vos données de navigation pour des finalités qui leur sont propres, conformément
                            à notre <a href="/rgpd">politique de confidentialité</a>.
                            Cette page vous permet de donner ou de retirer votre consentement, soit globalement soit
                            finalité par finalité.</p>
                    </div>
                </div>
                <div class="separator_section"></div>

                <div class="row gestion_cookie-div">

                    <div class="col-md-6 text-left">
                        <h2>
                            Google Analystics
                        </h2>
                        <small>
                            Permet de récolter des statistiques de fréquentation du site. Ces données sont anonymes et
                            nous permettent d'améliorer votre expérience utilisateur.
                        </small>
                    </div>
                    <div class="col-md-6">
                        <button id="GTMAllow" class="deny accept btn_cookie" data-authorize="true"
                            data-name="Analytics">
                            J'autorise
                        </button>
                        <button id="GTMDenied" class="deny refuse btn_cookie" data-authorize="false"
                            data-name="Analytics">
                            Je refuse
                        </button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="close_modal" type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                <button id="acceptcookies_modal" type="button" class="btn btn-primary">Confirmer mes choix</button>
            </div>
        </div>
    </div>
</div>




</body>