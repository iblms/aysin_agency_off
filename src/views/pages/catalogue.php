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
                    <img src="<?=PROJECT_FOLDER ?>/src/templates/acme1.png" alt="" width="357">
                    <div class="info-template">
                        <div class="title-prix">
                            <p class="title-template">Nom de la template</p>
                            <p class="prix">XX€</p>
                        </div>
                        <button>Télécharger</button>
                    </div>
                </div>
                <div class="box2-element">
                    <img src="<?=PROJECT_FOLDER ?>/src/templates/mariela1.png" alt="" width="357">
                    <div class="info-template">
                        <div class="title-prix">
                            <p class="title-template">Nom de la template</p>
                            <p class="prix">XX€</p>
                        </div>
                        <button>Télécharger</button>
                    </div>
                </div>
                <div class="box3-element">
                    <img src="<?=PROJECT_FOLDER ?>/src/templates/terminal1.png" alt="" width="357">
                    <div class="info-template">
                        <div class="title-prix">
                            <p class="title-template">Nom de la template</p>
                            <p class="prix">XX€</p>
                        </div>
                        <button>Télécharger</button>
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
    </main>
</body>
<?php $page_content = ob_get_clean();