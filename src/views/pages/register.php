<?php
$page = "register";
$title = "Aysin Agency - Le Marketing Digital d'excellence";
ob_start(); 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["email"])){
        //appel de la fonction insertion dans DbManager
        $BDD->insertUserInfoRegister($_POST["lastName"], $_POST["firstName"], $_POST["email"], $_POST["dateOfBirth"], $_POST["mdp"]);

        //partie envoie mail de bienvenue
        $headers = "Content-Type: text/plain; charset=utf-8\r\n";
        $headers .= "From kayred931@gmail.com\r\n";
         if(mail($_POST["email"], "Bienvenue sur Aysin Agency !", "Bonjour" . $_POST["firstName"].",\n\n

         Nous sommes ravis de vous accueillir parmi nous ! Explorez nos différents templates et n'hésitez pas à nous contacter si vous avez des questions.\n
         
         À bientôt !\n
         
         Cordialement,\n
         Aysin Agency", $headers)){
        }else{
            echo '<script>
                alert("Échec de l\'envoi de l\'email");
            </script>';
        }

        header('Location: ' . PROJECT_FOLDER . '/www/?p=login');
    }
}
?>
<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>
    <div class="case2">
        <div class="form-box">
            <form class="form" method="post">
                <span class="title">Inscription</span>
                
                <div class="input-container">
                    <input type="text" name="firstName" placeholder="Nom">
                </div>
                <div class="input-container">
                    <input type="text" name="lastName" placeholder="Prénom">
                </div>
                <div class="input-container">
                    <input type="email" name="email" placeholder="Adresse e-mail">
                </div>
                <div class="info_years">
                    <input type="date" name="dateOfBirth" placeholder="A">
                </div>
                <div class="input-container">
                    <input type="password" name="mdp"  placeholder="Mot de passe">
                </div>
                <button type="submit" class="button_login">S'inscrire</button>
            </form>
            <div class="form-section">
            <p>Déjà un compte ? <a href=""> Connectez-vous</a></p>
            </div>
        </div>
    </div>
</body>
<?php $page_content = ob_get_clean();