<?php
$page = "catalogue";
$title = "Aysin Agency - Le Marketing Digital d'excellence";
require_once __DIR__ .'/../../utils/common.php';

ob_start();

$infoCatalogue = $BDD->getProductsBDD(); //recupération des templates depuis la BDD

?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>
    <main>
        <div class="slogan">
            <img src="<?=PROJECT_FOLDER ?>/src/images/component_7.svg" alt="" width="1440">
        </div>
        <div class="all-templates">
            <div class="box-template1">
            <!-- affichage des templates une par une -->
                <?php foreach($infoCatalogue as $row){?> <!-- on parcours le tableau avec les infos de chaque template et on les affiche -->
                <div class="box1-element">
                    <img id="img1" src="<?=PROJECT_FOLDER ?><?php echo '/src/templates/' . $row["product_img"] . '1.png' ?>" alt="" width="357">
                    <img id="img1" src="<?=PROJECT_FOLDER ?><?php echo '/src/templates/' . $row["product_img"] . '2.png' ?>" alt="" width="357" hidden>
                    <img id="img1" src="<?=PROJECT_FOLDER ?><?php echo '/src/templates/' . $row["product_img"] . '3.png' ?>" alt="" width="357" hidden>
                    <img id="img1" src="<?=PROJECT_FOLDER ?><?php echo '/src/templates/' . $row["product_img"] . '4.png' ?>" alt="" width="357" hidden>
                    <div class="info-template">
                        <div class="title-prix">
                            <p class="title-template"><?php echo $row["product_name"]?></p>
                            <p class="prix"><?php echo $row["product_price"]?>€</p>
                        </div>
                        <!-- <button id="download1">Acheter</button> -->
                        <a href="<?=PROJECT_FOLDER ?>/src/views/pages/checkout.php" id="download1">Acheter</a>
                    </div>
                </div>
                


                <script>
                    // C'EST LA FONCTION POUR TÉLÉCHARGER LES TEMPLATES QUE J'AI COMMENTÉ
                    
                    // document.getElementById('download1').addEventListener('click', () => {
                    // let images = document.querySelectorAll('.box1-element img, img[hidden]'); // Sélectionner toutes les balises img cachées
                    //     images.forEach((img, index) => {
                    //         let imgPath = img.src;
                    //         let fileName = 'image_' + index + '.' + imgPath.split('.').pop(); // Créer des noms de fichiers uniques
                    //         downloadFile(imgPath, fileName);
                    //     });
                    // });

                    // function downloadFile(url, fileName) {
                    //     let a = document.createElement('a');
                    //     a.href = url;
                    //     a.download = fileName;
                    //     document.body.appendChild(a);
                    //     a.click();
                    //     document.body.removeChild(a);
                    // }
                </script>
                <?php } ?>
            </div>
           
            <div class="box-template2">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div class="box-template3">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div class="box-template4">
                <div></div>
                <div></div>
                <div></div>
            </div>
        </div>
        

        <!-- <script>
            function downloadTemplate() {
                // URL du template à télécharger
                var templateUrl = '/src/templates/acme1.png'; // Remplacez 'url_du_template_a_telecharger.zip' par l'URL réelle du template
                
                // Création d'un élément <a> pour déclencher le téléchargement
                var link = document.createElement('a');
                link.href = templateUrl;
                link.download = 'acme1.png'; // Nom du fichier téléchargé
                document.body.appendChild(link);
                link.click();
                document.body.removeChild(link);
            }
        </script> -->

        <!-- <script src="/www/js/FileSaver.js-2.0.4"></script>
        <script src="/www/js/upload.js"></script> -->
    </main>
</body>
<?php $page_content = ob_get_clean();