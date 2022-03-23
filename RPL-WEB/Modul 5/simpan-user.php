<?php
session_start();

if (empty($_POST["username"]) && empty($_POST["password"])) {
    $_SESSION['user'][] = null;
    $_SESSION['pass'][] = null;
    echo "Regsiter Gagal";
} else {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $_SESSION['user'][] = $username;
    $_SESSION['pass'][] = $password;
    echo "Berhasil register";
}

// session_unset();

// session_destroy();
