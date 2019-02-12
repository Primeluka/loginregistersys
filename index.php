<?php
require_once 'core/init.php';

if(Session::exists('success')) {
    echo Session::flash('success');
}

/*
echo '<br><br><br><br><pre>';
var_dump($user);
echo '</pre>';
*/ 