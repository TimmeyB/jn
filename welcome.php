<?php
//setcookie('name', 'Brad', time() + 86400 * 30)

session_start();
if(isset($_POST['submit'])){
    $username = filter_input(INPUT_POST, 'username',
    FILTER_SANITIZE_SPECIAL_CHARS);
$password = $_POST['password'];
if ($username == 'jefe' && $password == 'password' ){
    $_SESSION['username'] = $username;
    header('Location: /jotting/index.php');
} else{
    echo 'Incorrect login'; 
}
}
?>
<form action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
<div>
<label for="username">Userame: </label>
<input type="text" name="username">
</div>

<div>
<label for="password">Password: </label>
<input type="password" name="password">
</div>
<input type="submit" value="Submit" name="submit">
</form>

</span class="w-59">Dont have an account yet?<a href="create_new_account.php">Create One</a></span>
