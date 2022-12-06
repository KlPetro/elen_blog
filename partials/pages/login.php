<?php
if (isset($_POST["submit"])) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE `username` = '$login' AND `password` = '$password'";
    $result = $conn->query($sql);

    $user = $result->fetch_assoc();
    if ($user != NULL) {
        setcookie("user", $user['id'], time() + 3600 * 24, "/");
        header("Location: /");
    } else {
        header("Location: /?p=register");
    }
}

?>




<form action="#" method="POST">
    <h1 class="h3 mb-3 fw-normal">Sing In</h1>
    <div class="form-floating">
        <input type="text" class="form-control" id="floatingName" name="login" placeholder="Username">
    </div>

    <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="password" placeholder="Password">
    </div>

    <button class="w-100 btn btn-small btn-primary" type="submit" name="submit" value="Login">Sign in</button>
</form>