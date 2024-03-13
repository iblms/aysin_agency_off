<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/accueil.css">
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/navbar.css">
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/footer.css">
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/login.css">
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/logotype.css">
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/register.css">
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/type_siteweb.css">
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/whosheet.css">
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/bel_type.css">
        <link rel="stylesheet" href="<?=PROJECT_FOLDER ?>www/css/email.css">
        <script src="https://kit.fontawesome.com/2822932118.js" crossorigin="anonymous"></script>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
    </head>
    <body>
        <?= $navbar ?>
        <?= $home ?>
        <?= $page_content ?>
        <?= $footer ?>
    </body>
</html>
