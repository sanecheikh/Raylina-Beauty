<?php



if (isset($_POST['frmContact'])) { 
   /*  $id = htmlentities(trim($_POST['id'])); */
    $nom = htmlentities(trim($_POST['nom']));
    $email = htmlentities(trim($_POST['email']));
    $sujet = htmlentities(trim($_POST['sujet']));
    $message = htmlentities(trim($_POST['message']));

    $erreurs = array();

    if (mb_strlen($email) === 0)
        array_push($erreurs, "Il manque votre e-mail");

    

    if (count($erreurs)) {
        $messageErreur = "<ul>";

        for ($i = 0; $i < count($erreurs); $i++) {
            $messageErreur .= "<li>";
            $messageErreur .= $erreurs[$i];
            $messageErreur .= "</li>";
        }

        $messageErreur .= "</ul>";

        echo $messageErreur;
        include './includes/frmContact.php';
    } else {
       // $requeteLogin = "SELECT password FROM utilisateurs WHERE email='$email'";
     //   $sqlLogin = new Sql();
      //  $resultatLogin = $sqlLogin->lister($requeteLogin);

      /*   if (count($resultatLogin) > 0) {
            // Traitement pour vérifier le mot de passe
            $resultatPassword = $resultatLogin[0]['password'];

            if (password_verify($mdp, $resultatPassword)) {
                $message = "Vous êtes connecté";
                $_SESSION['login'] = true;

                $messageEmail = $mail . ' vous êtes connecté !';
                sendEmail($mail, 'contact@ceppic-php-file-rouge.fr', 'Login Success', $messageEmail);
            } else {
                $message = "Erreur d'authentification";
                $_SESSION['login'] = false;
            }
             */
       /*  public function Messages(string $nom, string $email, string $sujet,string $message)
        { */
            $requete = "INSERT INTO Messages (nom,email,sujet,message) VALUES ('$nom','$email','$sujet','$message');";
            $sqlmsg = new Sql();
            var_dump($requete);
            $sqlmsg->inserer($requete);
       /*  }
        else {
            $message = "Votre adresse n'est pas dans la base";
        }

        echo $message;
 */
       // $url = $_SERVER['HTTP_ORIGIN'] . dirname($_SERVER['REQUEST_URI']) . "/";

      //  echo redirection($url, 2000);
      //  echo "<p><a href=\"$url\">Revenir à la page d'accueil</a></p>";
    }
} else {
    $mail = "";
    include './includes/frmContact.php';
}
