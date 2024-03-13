<?php ob_start();
// require_once '../../utils/common.php';
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
        <body>
            <header>
                <nav >
                    <div>
                        <img src="<?=PROJECT_FOLDER ?>/src/images/titre.svg" alt="" style="width: 250px; padding-left: 40px;">

                        <ul>
                            <div>
                                <li><a href="<?=PROJECT_FOLDER ?>www/?p=accueil">Accueil</a></li>
                            </div>
                            <div>
                                <li><a href="<?=PROJECT_FOLDER ?>www/?p=expertises">Nos expertises</a></li>
                            </div>
                            <div>
                                <li><a href="<?=PROJECT_FOLDER ?>www/?p=contact">Contact</a></li>
                            </div>
                        </ul>

                        <div>
                            <button><a href="<?=PROJECT_FOLDER ?>www/?p=register">S'inscrire</a></button>
                        </div>
                    </div>
                </nav>
            </header>
        </body>
</html>


<?php $navbar = ob_get_clean(); ?>