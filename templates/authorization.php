<?php
include_once 'templates/header.php'
?>

<form action="/registration" method="post" id="registration-form">
    <p>Регистрация</p>
    <input type="text" name="lastname" placeholder="Введите фамилию...">
    <input type="text" name="firstname" placeholder="Введите имя...">
    <input type="text" name="patronymic" placeholder="Введите отчество...">
    <input type="email" name="email" placeholder="Ведите E-mail...">
    <input type="password" name="password" placeholder="Введите пароль...">
    <input type="password" name="re-password" placeholder="Повторите пароль...">
    <input type="submit" value="Регистрация" name="registration">
</form>
<form action="/login" method="post" id="login-form">
    <p>Вход</p>
    <input type="email" name="email" placeholder="Введите E-mail...">
    <input type="password" name="password" placeholder="Введите пароль...">
    <input type="submit" value="Вход" name="login">
</form>
<link rel="stylesheet" href="/static/styles/form.css">
<?php
include_once 'templates/footer.php'
?>
