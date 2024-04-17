<?php ob_start();
?>

<body>
    <header>
        <nav>
            <div>
                <img src="<?=PROJECT_FOLDER ?>/src/images/titre.svg" alt="" style="width: 250px; padding-left: 40px;">

                <ul>
                    <div>
                        <li><a href="<?=PROJECT_FOLDER ?>www/?p=accueil" style="font-family: Outfit, sans-serif;">Accueil</a></li>
                    </div>
                    <div>
                        <li><a href="<?=PROJECT_FOLDER ?>www/?p=expertises" style="font-family: Outfit, sans-serif;">Expertises</a></li>
                    </div>
                    <div>
                        <li><a href="<?=PROJECT_FOLDER ?>www/?p=contact" style="font-family: Outfit, sans-serif;">Contact</a></li>
                    </div>
                </ul>
                <?php
                if(isset($_SESSION["user_id"]))
                { ?>
                <div>
                    <button><a href="<?=PROJECT_FOLDER ?>www/?p=register">Inscription</a></button>
                </div>
                <?php }
                else { ?>
                <div>
                    <button><a href="<?=PROJECT_FOLDER ?>www/?p=accueil">Se déconnecter</a></button>
                </div>
                <?php } ?>
            </div>
        </nav>
    </header>
</body>



<?php $navbar = ob_get_clean(); ?>