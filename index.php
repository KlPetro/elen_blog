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
        require($_SERVER['DOCUMENT_ROOT'] . '/partials/pages/home.php');
        ?>


        <?php
        require($_SERVER['DOCUMENT_ROOT'] . '/partials/footer.php');
        ?>