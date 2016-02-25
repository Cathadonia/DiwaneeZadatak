<?php

include "config.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT username FROM `users` WHERE `username` = '$this->username' AND `password` = '$this->password'";

    $data = $DB->QueryData($sql);


    $count = mysqli_num_rows($result);
}

$msg = '';

if (isset($_POST['login']) && !empty($_POST['password'])
) {

    if ($_POST['username'] == $this->username && $_POST['password'] == $this->password) {
        $_SESSION['valid'] = true;
        $_SESSION['timeout'] = time();
        $_SESSION['username'] = $this->username;


        echo 'You have entered valid use name and password';

    } else {

        $msg = 'Wrong username or password';
    }
}
header('Location: http://localhost/DiwaneeZadatak/Hello.php');

?>







