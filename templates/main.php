<?php
include_once 'templates/header.php'
?>
<!-- <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> -->
<link href="https://fonts.googleapis.com/css?family=Titan+One" rel="stylesheet">

<div class="main grid">
    <nav class="navigation grid-item1">
        <ul>
            <li><a href="/">Главная</a></li>
            <li><a href="/quests">Квесты</a></li>
            <li><a href="/about">О нас</a></li>
        </ul>
    </nav>
    <div class="role-buttons grid-item2">
        <ul>
            <li><a href="#">Вход</a></li>
            <li><a href="#">Регистрация</a></li>
        </ul>
    </div>
    <div class="content grid-item3">
        <div class="logo"></div>
        <div class="text">
            <p>Проект "Абитуриент"</p>
            <p>ОГЭКУ</p>
            <p>Пройди путь от абитуриента до студента нашего университета</p>
        </div>
    </div>
    <div class="form grid-item4">
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
    </div>
</div>

<link rel="stylesheet" href="/static/styles/main.css">


<?php
include_once 'templates/footer.php'
?>
