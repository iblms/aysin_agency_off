<?php ob_start();
// require_once '../../utils/common.php';
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

                <div>
                    <button><a href="<?=PROJECT_FOLDER ?>www/?p=register">Inscription</a></button>
                </div>
            </div>
        </nav>
    </header>
</body>



<?php $navbar = ob_get_clean(); ?>