<?php
$page = "catalogue";
$title = "Aysin Agency - Le Marketing Digital d'excellence";
require_once __DIR__ .'/../../utils/common.php';

ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>
    <main>
        <div class="slogan">
            <img src="<?=PROJECT_FOLDER ?>/src/images/component_7.svg" alt="" width="1440">
        </div>

        <div class="all-templates">
            <div class="box-template1">
                <div class="box1-element">
                    <img id="img1" src="<?=PROJECT_FOLDER ?>/src/templates/acme1.png" alt="" width="357">
                    <img id="img1" src="<?=PROJECT_FOLDER ?>/src/templates/acme2.png" alt="" width="357" hidden>
                    <img id="img1" src="<?=PROJECT_FOLDER ?>/src/templates/acme3.png" alt="" width="357" hidden>
                    <img id="img1" src="<?=PROJECT_FOLDER ?>/src/templates/acme4.png" alt="" width="357" hidden>
                    <div class="info-template">
                        <div class="title-prix">
                            <p class="title-template">Nom de la template</p>
                            <p class="prix">XX€</p>
                        </div>
                        <button id="download1">Télécharger</button>
                    </div>
                </div>

                <script>
                    // document.getElementById('download').addEventListener('click', () => {
                    // let img = document.getElementById('img1');
                    // let imgPath = img.src;
                    // let fileName = imgPath.substring(imgPath.lastIndexOf('/') + 1);
                    // downloadFile(imgPath, fileName);
                    // });

                    // function downloadFile(url, fileName) {
                    //     // Créer un élément <a> temporaire
                    //     let a = document.createElement('a');
                    //     a.href = url;
                    //     a.download = fileName;

                    //     // Ajouter l'élément <a> au DOM et simuler un clic
                    //     document.body.appendChild(a);
                    //     a.click();

                    //     // Supprimer l'élément <a> du DOM après le téléchargement
                    //     document.body.removeChild(a);
                    // }

                    document.getElementById('download1').addEventListener('click', () => {
                    let images = document.querySelectorAll('.box1-element img, img[hidden]'); // Sélectionner toutes les balises img cachées
                        images.forEach((img, index) => {
                            let imgPath = img.src;
                            let fileName = 'image_' + index + '.' + imgPath.split('.').pop(); // Créer des noms de fichiers uniques
                            downloadFile(imgPath, fileName);
                        });
                    });

                    function downloadFile(url, fileName) {
                        let a = document.createElement('a');
                        a.href = url;
                        a.download = fileName;
                        document.body.appendChild(a);
                        a.click();
                        document.body.removeChild(a);
                    }
                </script>

                <div class="box2-element">
                    <img src="<?=PROJECT_FOLDER ?>/src/templates/mariela1.png" alt="" width="357">
                    <!-- <img src="<?=PROJECT_FOLDER ?>/src/templates/mariela2.png" alt="" width="357" hidden>
                    <img src="<?=PROJECT_FOLDER ?>/src/templates/mariela3.png" alt="" width="357" hidden>
                    <img src="<?=PROJECT_FOLDER ?>/src/templates/mariela4.png" alt="" width="357" hidden> -->
                    <div class="info-template">
                        <div class="title-prix">
                            <p class="title-template">Nom de la template</p>
                            <p class="prix">XX€</p>
                        </div>
                        <button id="download2">Télécharger</button>
                    </div>
                </div>
                <div class="box3-element">
                    <img src="<?=PROJECT_FOLDER ?>/src/templates/terminal1.png" alt="" width="357">
                    <div class="info-template">
                        <div class="title-prix">
                            <p class="title-template">Nom de la template</p>
                            <p class="prix">XX€</p>
                        </div>
                        <button >Télécharger</button>
                    </div>
                </div>
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