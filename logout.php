<?php
require __DIR__. '/vendor/autoload.php';
use \App\Session\user as SessionUser;

SessionUser::logout();
?>