<?php
if (isset($_COOKIE['user'])) {
    $userSQL = 'SELECT * FROM users WHERE id=' . $_COOKIE['user'];
    $userResult = $conn->query($userSQL);
    $user = $userResult->fetch_assoc();
}
?>
<div class="hero-wrap js-fullheight" style="background-image: url(assets/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="js-fullheight d-flex justify-content-center align-items-center">
        <div class="col-md-8 text text-center">
            <div class="avatar img mb-4" style="background-image: url(
                <?php
                if (isset($_COOKIE['user'])) {
                    if (empty($user['avatar'])) {
                        echo 'assets/images/avatar.jpg';
                    }
                    echo $user['avatar'];
                } else {
                    echo 'assets/images/avatar.jpg';
                }
                ?> );">
                <div class="blockcentr">
                    <p>New photo</p>
                    <form action="" method="post">
                        <input class="w-10 btn btn-small btn-primary" type="file" name="file">
                        <input class="w-10 btn btn-small btn-primary" type="submit" value="Save">
                    </form>
                </div>
            </div>
            <div class="desc">
                <h2 class="subheading">Hello I'm</h2>
                <h1 class="mb-4">
                    <?php
                    if (isset($_COOKIE['user'])) {
                        echo $user['username']  . '  ' .  $user['lastname'];
                    } else {
                        echo 'Your Name';
                    }
                    ?>
                </h1>
                <p class="mb-4">I am A Blogger Far far away, behind the word mountains, far from the
                    countries Vokalia and Consonantia, there live the blind texts. Separated they live in
                    Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                <p><a href="?p=about" class="btn-custom">More About Me <span class="ion-ios-arrow-forward"></span></a></p>
            </div>
        </div>
    </div>
</div>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 class="mb-4">Articles</h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary
                    regelialia. It is a paradisematic country.</p>
            </div>
        </div>
        <div class="row">
            <?php
            require($_SERVER['DOCUMENT_ROOT'] . '/partials/posts/post.php');
            ?>
        </div>
    </div>
</section>