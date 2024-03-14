<?php
$page = "personnalisation";
$title = "Aysin Agency - Le Marketing Digital d'excellence";
require_once __DIR__ .'/../../utils/common.php';

ob_start(); ?>

<body>
    <?php require_once __DIR__ . '/../partials/navbar.php'; ?>
    <main>
        <div class="slogan">
            <img src="<?=PROJECT_FOLDER ?>/src/images/component_8.svg" alt="" width="1440">
        </div>
        <div class="maxi-box">
            <!-- <div class="all-block">
                    <div class="div1">
                        <input type="checkbox" id="choice1" name="choice1">
                        <label for="choice1">Madame</label>
                    </div>
                    
                    <div class="div2">
                        <input type="checkbox" id="choice2" name="choice2">
                        <label for="choice2">Monsieur</label>
                    </div>
                    
                    <input class="submit" type="submit" value="Continuer">
                </form> -->

                <div class="container">
                    <input type="checkbox" id="cbx" style="display: none;">
                    <label for="cbx" class="check">
                        <svg width="18px" height="18px" viewBox="0 0 18 18">
                            <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                            <polyline points="1 9 7 14 15 4"></polyline>
                        </svg>
                        Madame
                    </label>
                    <input type="checkbox" id="cbx" style="display: none;">
                    <label for="cbx" class="check">
                        <svg width="18px" height="18px" viewBox="0 0 18 18">
                            <path d="M1,9 L1,3.5 C1,2 2,1 3.5,1 L14.5,1 C16,1 17,2 17,3.5 L17,14.5 C17,16 16,17 14.5,17 L3.5,17 C2,17 1,16 1,14.5 L1,9 Z"></path>
                            <polyline points="1 9 7 14 15 4"></polyline>
                        </svg>
                        Monsieur
                    </label>
                </div>
                
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        var checkboxes = document.querySelectorAll('input[type="checkbox"]');

                        checkboxes.forEach(function (checkbox) {
                            checkbox.addEventListener('change', function () {
                                checkboxes.forEach(function (otherCheckbox) {
                                    if (otherCheckbox !== checkbox) {
                                        otherCheckbox.checked = false;
                                    }
                                });
                            });
                        });
                    });
                </script>
            </div>
        </div>
    </main>
</body>
<?php $page_content = ob_get_clean();