<?php
include "config.php";

$sql    = "SELECT username FROM `users` ORDER BY ASC ";

$result = mysqli_query($sql);

while($user = mysqli_fetch_array($result))
    echo $user['user_name'].'<br/>';