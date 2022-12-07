<?php 

if(isset($_POST["frmAjouterproduit"]))
{
    
    $nom = htmlentities(trim($_POST['nom']));
    $type = htmlentities(trim($_POST['type']));
    $prix= htmlentities(trim($_POST['prix']));
   
   
    

    $erreurs = array();
    if(mb_strlen($nom) === 0)
    array_push($erreurs, "Il manque le nom");

   

   

    if(mb_strlen($prix) === 0)
    array_push($erreurs, "Il manque le prix");


        if(count($erreurs))
        {
            
        $messageErreur = "<ul>";
        for ($i=0; $i < count($erreurs); $i++) { 
        
            # code...
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }
        $messageErreur .= "</ul>";

        echo $messageErreur;
        include './includes/frmajouterproduit.php';
    }
    else {
        $admin = new Admin();
        echo $admin-> ajouterproduit($nom,$prix,$type);
        $url = "index.php?page=produit";
        //echo redirection($url);
    }

}

else{
    $identifiant = $nom = $quality = $prix = "";
    include './includes/frmajouterproduit.php';
}
?>