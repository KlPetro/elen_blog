<?php
require($_SERVER['DOCUMENT_ROOT'] . '/config/db.php');
require($_SERVER['DOCUMENT_ROOT'] . '/partials/header.php');
?>


<div id="colorlib-page">
    <?php
    require($_SERVER['DOCUMENT_ROOT'] . '/partials/sidebar.php');
    ?>
    <div id="colorlib-main">
        <?php

        $page = 'home';
        if (isset($_GET['p'])) {
            switch ($_GET['p']) {
                case 'home':
                    $page = 'home';
                    break;

                case 'photography':
                    $page = 'photography';
                    break;

                case 'travel':
                    $page = 'travel';
                    break;

                case 'fashion':
                    $page = 'fashion';
                    break;

                case 'about':
                    $page = 'about';
                    break;

                case 'contact':
                    $page = 'contact';
                    break;
                default:
                    $page = 'home';
                    break;
            }
        }

        require($_SERVER['DOCUMENT_ROOT'] . "/partials/pages/" . $page . ".php");
        require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
        ?>
    </div><!-- END COLORLIB-MAIN -->
</div><!-- END COLORLIB-PAGE -->

<?php
require($_SERVER['DOCUMENT_ROOT'] . '/partials/scripts.php');
?>