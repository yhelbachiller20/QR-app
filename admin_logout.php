<?php

setcookie('user', $result['username'], time() - 3600);
setcookie('user_type', $result['user_type'], time() - 3600);
header("Location: admin_login.php");
