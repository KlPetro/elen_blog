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

<form method="post">
    <p>Login: <br>
        <input type="text" name="login">
    </p>
    <p>Password: <br>
        <input type="password" name="password">
    </p>
    <p><input type="submit" name="submit" value="Login"></p>
</form>