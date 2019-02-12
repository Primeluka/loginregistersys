<?php
require_once 'core/init.php';

if(Session::exists('home')) {
    echo '<p>'. Session::flash('home'). '</p>';
}

/*
echo '<br><br><br><br><pre>';
var_dump($user);
echo '</pre>';
*/ 