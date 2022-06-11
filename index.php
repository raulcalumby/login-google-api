<?php
// AUTO LOAD

require __DIR__ . '/vendor/autoload.php';
use  \App\Session\user as SessionUser;
// Header
include __DIR__ . '/includes/header.php';

// Login
include SessionUser::isLogged()? 
__DIR__ . '/includes/admin.php':
__DIR__ . '/includes/login.php';

// Footer
include __DIR__ . '/includes/footer.php';
?>