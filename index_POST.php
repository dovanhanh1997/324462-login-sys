<!DOCTYPE HTML>
<html>
<style>
    .login {
        height: 180px;
        width: 230px;
        padding: 10px;
        border: 1px #CCC solid;
    }

    .login input {
        padding: 5px;
        margin: 5px;
    }
</style>
<body>
<form method="post">
    <div class="login">
        <h2>login</h2>
        <input type="text" name="username" size="30" placeholder="username"/>
        <input type="password" name="password" size="30" placeholder="password"/>
        <input type="submit" value="Sign in"/>
    </div>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "admin"){
        echo "<h2>Welcom <span style='color: red'>".$username."</span>";
    }else {
        echo "<h2><span style = 'color: red;'>Login Fall</span>";
    }
}
?>

</body>
</html>