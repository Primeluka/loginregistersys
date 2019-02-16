<?php
require_once 'core/init.php';

if(Session::exists('home')) {
    echo '<p>'. Session::flash('home'). '</p>';
}

$user = new User();

if($user->isLoggedIn()) {
?>

<p>
    Hello <a href="profile.php"> <?php echo escape($user->data()->name);?></a> ! 
</p>

<div class="logout">
    <a href="logout.php">Log out</a>
</div>

<?php
} else {
    echo "You need to <a href='login.php'>log in</a> or <a href='register.php'>register</a>.";
}


/*
echo '<br><br><br><br><pre>';
var_dump($user);
echo '</pre>';
*/ 