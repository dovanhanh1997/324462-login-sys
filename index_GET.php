<!DOCTYPE HTML>
<html>
<style>
    .login{
        height: 180px;
        widows: 230px;
        padding: 10px;
        border: 1px #CCC solid;
    }
    .login input {
        padding: 5px;
        margin: 5px;
    }
</style>
<body>
<form method="get">
    <div class="login">
        <input type="text" name="username" size="30" placeholder="username" />
        <input type="password" name="password" size = "30" placeholder="password" />
        <input type="submit" value="Sign In" />

    </div>
</form>

<?php
if ($_REQUEST["REQUEST_METHOD"] == "GET"){
    $username = $_GET["username"];
    $password = $_GET["password"];

    if ($username == "username" && $password == "password"){
        echo "<h2>Welcom<span style='color:red'>".$username."</span></h2>";
    }else {
        echo "<h2><span style='color:red'>Login Erro</span></h2>";
    }
}
?>
</body>
</html>