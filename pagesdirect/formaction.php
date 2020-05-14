<?php

if(isset($_POST['login']) && isset($_POST['password']) ) {
    $login = addslashes($_POST["login"]);
    $password = addslashes($_POST["password"]);
    echo "login: $login</br>";
    echo"password: $password</br>";
    echo "<script>alert(\"$login, Вы успешно зарегистрированы на сайте.\");</script>";

}

?>