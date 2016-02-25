<?php

include "config.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT username FROM `users` WHERE `username` = '$username' AND `password` = '$password'";

    $data = $DB->QueryData($sql);


    $count = mysqli_num_rows($result);
}

$msg = '';

if (isset($_POST['login']) && !empty($_POST['username'])
    && !empty($_POST['password'])
) {

    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = $username;

        echo 'You have entered valid use name and password';
    } else {
        $msg = 'Wrong username or password';
    }
}
?>


/*
if ($count == 1) {

@session_start();
//session_register($username);
$_SESSION['login_user'] = $username;

Redirect('http://localhost/DiwaneeZadatak/Hello.php');
} else {

$error = "Vas username ili password su neispravni.";

}
}
*/




