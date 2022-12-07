<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izitoast/1.4.0/css/iziToast.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<body class="home page-template-default page page-id-2172 wp-embed-responsive stk--is-blocksy-theme ct-loading" style="width:80%;margin-left:10%" data-link="type-4" data-prefix="single_page" data-header="type-1:sticky" data-footer="type-1:reveal" itemscope="itemscope" itemtype="https://schema.org/WebPage" >
    <div  id="container" style="width:50%;position:relative;top: 25%;left: 25%;margin-top: 9%;margin-bottom: 10%;border-radius: 30px;">
        <!-- zone de connexion -->
        
        <form action="index.php?page=login" style="text-align:center" method="POST">
            <h2>Se connecter</h2>
            
           <!--  <label>Identifiant</label><br> -->
            <input type="text" placeholder="Entrer l'identifiant" name="username" style="width: 200px;border: 3px;border-style:solid ;border-radius: 20px;" ><br><br>
            <!-- <label>Mot de passe</label><br> -->
            <input type="password" placeholder="Entrer le mot de passe" name="password" style="width: 200px;border: 3px;border-style:solid;border-radius: 20px;" ><br><br>
            <input type="submit" id='submit' value='Connexion' style="padding: 4px 60px;border-radius: 20px;" /><br><br>
            <span ><a href="#" style="color: black;">mot de passe oublier?</a></span><br><br>
            <input type="hidden" name="frmLogin"/>
            <h6>Pas encore de compte?</h6>
            <span style="background-color: blue;padding: 8px 60px;border-radius: 20px;"><a href="index.php?page=inscription" style="color: white;">S'INSCRIRE</a></span><br>
            <br>
        </form>
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