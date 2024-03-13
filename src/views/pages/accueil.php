<?php
$page = "accueil";
$title = "Aysin Agency - Le Marketing Digital d'excellence";
require_once __DIR__ .'/../../utils/common.php';

ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>
    <main>
        <div class="slogan">
            <img src="/images/component_3.svg" alt="" width="1440">
        </div>

        <div class="text1">
            <p>Consultez notre catalague de templates selon votre domaine ou<br> recevez un accompagnement personnalisé dans la création de votre<br> site web.</p>
        </div>

        <div class="home-buttons">
            <button><a href="">Consulter le catalogue</a></button>
            <button><a href="">Demander un accompagnement</a></button>
        </div>

        <div>
            <img src="/images/component_6.svg" alt="" style="padding-top: 60px;">
        </div>

        <div class="title2">
            <p>Nos expertises dont vous pouvez<br> bénéficier</p>
        </div>

        <div class="all-line">
            <div class="line1">
                <p>SEO</p>

                <p class="paragraph">Consultez notre catalague de templates selon votre domaine ou<br> recevez un accompagnement personnalisé dans la création de votre<br> site web.</p>
            </div>

            <p class="line"> </p>

            <div class="line2">
                <p>ANALYSE DE DONNÉES</p>

                <p class="paragraph">Consultez notre catalague de templates selon votre domaine ou<br> recevez un accompagnement personnalisé dans la création de votre<br> site web.</p>
            </div>

            <p class="line"> </p>

            <div class="line3">
                <p>CONTENU MARKETING</p>

                <p class="paragraph">Consultez notre catalague de templates selon votre domaine ou<br> recevez un accompagnement personnalisé dans la création de votre<br> site web.</p>
            </div>

            <p class="line"> </p>

            <div class="line4">
                <p>RÉSEAUX SOCIAUX</p>

                <p class="paragraph">Consultez notre catalague de templates selon votre domaine ou<br> recevez un accompagnement personnalisé dans la création de votre<br> site web.</p>
            </div>

            <p class="line"> </p>

            <div class="line5">
                <p>MARKETING DIGITAL</p>

                <p class="paragraph">Consultez notre catalague de templates selon votre domaine ou<br> recevez un accompagnement personnalisé dans la création de votre<br> site web.</p>
            </div>

            <p class="line"> </p>

            <div class="line6">
                <p>WEB DESIGN</p>

                <p class="paragraph">Consultez notre catalague de templates selon votre domaine ou<br> recevez un accompagnement personnalisé dans la création de votre<br> site web.</p>
            </div>

            <p class="line"> </p>

            <div class="line7">
                <p>SITE WEB</p>

                <p class="paragraph">Consultez notre catalague de templates selon votre domaine ou<br> recevez un accompagnement personnalisé dans la création de votre<br> site web.</p>
            </div>

            <p class="line"> </p>

            <div class="line8">
                <p>SEA</p>

                <p class="paragraph">Consultez notre catalague de templates selon votre domaine ou<br> recevez un accompagnement personnalisé dans la création de votre<br> site web.</p>
            </div>

            <p class="line"> </p>

        </div>
    </main>
</body>
<?php $home = ob_get_clean();