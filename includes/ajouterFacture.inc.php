
<?php

if (isset($_POST["ajouterfacture"])) {
    $nom = htmlentities(trim($_POST['nom']));
    $prestation = htmlentities(trim($_POST['prestation']));
    $prix_coiffure  = htmlentities(trim($_POST['prix_coiffure']));
    $prix_produit = htmlentities(trim($_POST['prix_produit']));
    $somme_facture = htmlentities(trim($_POST['somme_facture']));
    $date = htmlentities(trim($_POST['date']));




    $erreurs = array();
    if (mb_strlen($nom) === 0)
        array_push($erreurs, "Il manque le nom");





    if (mb_strlen($prix_coiffure) === 0)
        array_push($erreurs, "Il manque le prix");

        if (mb_strlen($prix_produit) === 0)
        array_push($erreurs, "Il manque le prix");
        


    if (count($erreurs)) {

        $messageErreur = "<ul>";
        for ($i = 0; $i < count($erreurs); $i++) {

            # code...
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }
        $messageErreur .= "</ul>";

        echo $messageErreur;
        include './includes/ajouterfacture.php';
    } else {
        $admin = new Admin();
        echo $admin->ajouterfacture($nom,$prestation, $prix_coiffure, $prix_produit,$somme_facture, $date);
        
 $url = "index.php?page=facture";
   // echo redirection($url);
    }
} else {
  $nomv = $Prestation = $prix_coiffure = $prix_produit = $somme_Facture = $date = "";
   var_dump("not set"); 
    include './includes/ajouterfacture.php';
}
?>