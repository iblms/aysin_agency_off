<?php
$page = "login";
$title = "Aysin Agency - Le Marketing Digital d'excellence";
ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>
    <div class="case1">
        <div class="form-box">
            <form class="form">
                <span class="title">Connexion</span>
                
                <div class="input-container">
                    <input type="email" placeholder="Adresse e-mail" style="color: black;">
                </div>
                <div class="input-container">
                    <input type="password" placeholder="Mot de passe">
                </div>
                <button class="button_login"><a href="#" class="login_link">Se connecter</a></button>
                <div class="forgot_mdp">
                    <a class="mdp_text" href="#">Mot de passe oublié ?</a>
                </div>
            </form>
            <div class="form-section">
            <p>Pas de compte ? <a href=""> Incrivez-vous</a></p>
            </div>
        </div>
    </div>
</body>
<?php $page_content = ob_get_clean();