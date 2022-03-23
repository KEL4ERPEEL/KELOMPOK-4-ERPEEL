<?php
session_start();

$user = $_POST["username"];
$pass = $_POST["password"];

$pesan = cariUser($user, $pass);
if ($pesan != null) {
    echo $pesan;
} else {
    echo "Login gagal";
}

function cariUser($user, $pass)
{
    for ($i = 0; $i < count($_SESSION['user']); $i++) {
        if (($_SESSION['user'][$i] == $user) && ($_SESSION['pass'][$i] == $pass)) {
            $_SESSION['userLogin'] = $_SESSION['user'][$i];
            return "Berhasil Login";
        }
    }
    return null;
}
