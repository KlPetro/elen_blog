<?php


if (isset($_SESSION["user"]) && $_SESSION["user"] != null) {
    $_SESSION["user"] = null;
    header("Location: /");
}

if (isset($_COOKIE["user"]) && $_COOKIE["user"] != null) {
    setcookie("user", '', 0, '/');
    header("Location: /");
}
