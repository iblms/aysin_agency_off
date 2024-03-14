<?php
$page = "register";
$title = "Aysin Agency - Le Marketing Digital d'excellence";
ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>
    <div class="case2">
        <div class="form-box">
            <form class="form">
                <span class="title">Inscription</span>
                
                <div class="input-container">
                    <input type="text" placeholder="Nom">
                </div>
                <div class="input-container">
                    <input type="text" placeholder="Prénom">
                </div>
                <div class="input-container">
                    <input type="email" placeholder="Adresse e-mail">
                </div>
                <div class="info_years">
                    <input type="date" placeholder="Adresse e-mail">
                </div>
                <div class="input-container">
                    <input type="password" placeholder="Mot de passe">
                </div>
                <button class="button_login">S'inscrire</button>
                
            </form>
            <div class="form-section">
            <p>Déjà un compte ? <a href=""> Connectez-vous</a></p>
            </div>
        </div>
    </div>
</body>
<?php $page_content = ob_get_clean();