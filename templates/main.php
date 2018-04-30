<?php
include_once 'templates/header.php'
?>

<div class="main">
    <div class="header">
        <nav class="navigation">
            <ul>
                <li><a href="/main">Главная</a></li>
                <li><a href="/quests">Квесты</a></li>
                <li><a href="/about">О нас</a></li>
            </ul>
        </nav>
        <div class="role-buttons">
            <ul>
                <li><a href="#">Вход</a></li>
                <li><a href="#">Регистрация</a></li>
            </ul>
        </div>
    </div>
    <div class="clear"></div>
    <main class="content">
        <div class="logo"></div>
        <div class="text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, quis! Dignissimos aperiam tenetur error ipsam natus adipisci. Nemo necessitatibus esse provident inventore, in cupiditate! Mollitia praesentium aut non nesciunt excepturi!</div>
    </main>
</div>

<form action="/registration" method="post">
    <input type="text" name="lastname" id="lastname" placeholder="Введите фамилию...">
    <input type="text" name="name" id="name" placeholder="Введите имя...">
    <input type="text" name="patronymic" id="patronymic" placeholder="Введите отчество...">
    <input type="email" name="email" id="email" placeholder="Ведите E-mail...">
    <input type="password" name="password" id="password" placeholder="Введите пароль...">
    <input type="password" name="re-password" id="re-password" placeholder="Повторите пароль...">
    <input type="submit" value="Регистрация">
</form>
<form action="/login" method="post">
    <input type="email" name="email" id="email" placeholder="Введите E-mail...">
    <input type="password" name="password" id="password" placeholder="Введите пароль...">
    <input type="submit" value="Вход">
</form>

<!-- <form action="#"></form> -->

<link rel="stylesheet" href="/static/styles/main.css">

<?php
include_once 'templates/footer.php'
?>
