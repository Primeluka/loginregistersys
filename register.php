<?php
require_once "core/init.php";

if(Input::exists()) {
    if(Token::check(Input::get('token'))){
        //echo 'Its running';
        
        $validate = new Validate();
        $validation = $validate->check($_POST, array(
            'username' => array(
                'required' => true,
                'min' => 2,
                'max' => 20,
                'unique' => 'users'
            ),
            'password' => array(
                'required' => true,
                'min' => 6
            ),
            'password_again' => array(
                'required' => true,
                'matches' => 'password'
            ),
            'name' => array(
                'required' => true,
                'min' => 2,
                'max' => 50
            )
        ));

        if($validation->passed()) {
            Session::flash('success', 'Your registered successfully!');
            header('Location: index.php');
        } else {
            foreach($validation->errors() as $error) {
                echo $error.'<br>';
            }
        }
    }
}


/*
echo '<br>funkcja empty<br>';
echo (empty($_POST)) ? 'true' : 'false';
echo '<br>funkcja isset<br>';
echo (isset($_POST)) ? 'true' : 'false';

echo "<br><br>";
echo '<pre>';
var_dump($_POST);
echo '</pre>';
*/
?>

<form action="" method="POST">
    <div class="field">
        <label for="username">Username</label>
        <input type="text" name="username" id="username" value="<?php echo Input::get('username') ?>" autocomplete="off">
    </div>

    <div class="field">
        <label for="password">Choose a password</label>
        <input type="password" name="password" id="password">
    </div>

    <div class="field">
        <label for="password_again">Repeat your password</label>
        <input type="password" name="password_again" id="password_again">
    </div>

    <div class="field">
        <label for="name">Enter your name</label>
        <input type="text" name="name" value="<?php echo Input::get('name') ?>" id="name">
    </div>

    <input type="hidden" name="token" value="<?php echo Token::generate(); ?>">
    <input type="submit" value="Register">
</form>