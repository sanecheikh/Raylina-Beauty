<?php
if (!isset($_SESSION['type'])) {
    include './includes/frmlogin.php';
} elseif ($_SESSION['type'] == "admin") {

    $requete = 'SELECT * FROM `client`';
    // var_dump($requete);
    $querySelect = new Sql();
    $users = $querySelect->lister($requete);
    $requete = 'SELECT * FROM `planning`;';
    $plannings = $querySelect->lister($requete);


    //dump($users);
?>

    <body class="home page-template-default page page-id-2172 wp-embed-responsive stk--is-blocksy-theme ct-loading" style="width:80%;margin-left:10%;background:white;" data-link="type-4" data-prefix="single_page" data-header="type-1:sticky" data-footer="type-1:reveal" itemscope="itemscope" itemtype="https://schema.org/WebPage">
        <div class="d-flex justify-content-center">




            <table class="class=" d-flex justify-content-center"" style="margin:0 auto;font-size:21px">
                <thead>
                    <tr>
                        <th class="nomTable" colspan="7">Liste des clients</th>
                    </tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>email</th>
                    <th>telephone</th>
                </thead>
                <tbody>

                    <?php
                    foreach ($users as $user) {
                    ?>
                        <tr>

                            <td><?= $user['nom'] ?></td>
                            <td><?= $user['prenom'] ?></td>
                            <td><?= $user['Adresse'] ?></td>
                            <td><?= $user['Telephone'] ?></td>
                            <td><?= $user['email'] ?></td>
                            <td><a href="index.php?page=updateClient&idClient=<?= $user['id_client'] ?>">Editer</a></td>

                            <td><a href="index.php?page=supprimer&table=client&id=<?= $user['id_client'] ?>" onclick="return confirm('Voulez vous vraiment supprimer ce client?')">Supprimer</a></td>

                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <div class="footTable">
                                <div data-pagination="" data-num-pages="numPages()" data-current-page="currentPage" data-max-size="maxSize" data-boundary-links="true"> </div>
                                <div class="float-right"><button class="btn btn-primary btn-lg active p-2 bd-highlight" onclick="location.href='index.php?page=ajouterClient'" type="button"> Ajouter un client </button></div>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="d-flex justify-content-center">

            <table class="class=" d-flex justify-content-center"" style="margin:0 auto;font-size:21px">
                <thead>
                    <tr>
                        <th class="nomTable" colspan="7">Liste des planning</th>
                    </tr>
                    <th>date</th>
                    <th>heure_debut</th>
                    <th>styliste</th>
                    <th>client</th>
                </thead>
                <tbody>

                    <?php
                    foreach ($plannings as $planning) {
                    ?>
                        <tr>

                            <td><?= $planning['date'] ?></td>
                            <td><?= $planning['heure_debut'] ?></td>
                            <?php
                            $id = $planning['Service_id_Service'];
                            $requete = "SELECT * FROM `service` where id_service='$id'";
                            $sers = $querySelect->lister($requete);
                            ?>
                            <td><?= $sers[0]['nom_service'] ?></td>
                            <?php
                            if ($planning['Client_id_client']) {
                                $id = $planning['Client_id_client'];
                                $requete = "SELECT * FROM `client` where id_client='$id' ";
                                $clis = $querySelect->lister($requete); ?>
                                <td><?= $clis[0]['nom'] ?> hqhq <?= $planning['Client_id_client'] ?></td>
                            <?php } else { ?>
                                <td></td>
                            <?php }
                            ?>
                            <td><a href="index.php?page=updateClient&idClient=<?= $user['id_client'] ?>">Editer</a></td>

                            <td><a href="index.php?page=supprimer&table=client&id=<?= $user['id_client'] ?>" onclick="return confirm('Voulez vous vraiment supprimer ce client?')">Supprimer</a></td>

                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="7">
                            <div class="footTable">
                                <div data-pagination="" data-num-pages="numPages()" data-current-page="currentPage" data-max-size="maxSize" data-boundary-links="true"> </div>
                                <div class="float-right"><button class="btn btn-primary btn-lg active p-2 bd-highlight" onclick="location.href='index.php?page=ajouterPlanning'" type="button"> Ajouter un planning </button></div>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </body>
<?php
} else {
    include './includes/frmInscription.php';
}
?>