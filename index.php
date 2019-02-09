<?php
require_once 'core/init.php';

$userUpdate = DB::getInstance()->update('users', 4, array(
    'password' => 'newpassword',
    'name' => 'Dale Garett'
));



/*
echo '<br><br><br><br><pre>';
var_dump($user);
echo '</pre>';
*/ 