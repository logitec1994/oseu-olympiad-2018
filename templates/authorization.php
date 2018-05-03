<?php
include_once 'templates/header.php'
?>
<link rel="stylesheet" href="/static/styles/authorization.css">
<link rel="stylesheet" href="/static/lib/notify/notify.css">

<script src="/static/lib/notify/notify.js"></script>
<script src="/static/lib/cookies.js"></script>
<script src="/static/javascript/authorization.js"></script>
<script src="/static/javascript/form.js"></script>

<div class="forms-wrapper">
    <div class="wrap">
        <label for="" title="Вкладка 1" class="tab active authorization">Авторизация</label>
        <label for="" title="Вкладка 2" class="tab registration">Регистрация</label>

        <form action="/login" method="post" id="login-form" class="tab-form">
            <p>Вход</p>
            <input type="email" name="email" placeholder="Введите E-mail...">
            <input type="password" name="password" placeholder="Введите пароль...">
            <input type="submit" value="Вход" name="login">
            <ul>
                <li><a href="#"><i class="fa fa-google"></i></a></li>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-vk"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </form>
        <form action="/registration" method="post" id="registration-form" class="tab-form hidden">
            <p>Регистрация</p>
            <input type="text" name="lastname" placeholder="Введите фамилию...">
            <input type="text" name="firstname" placeholder="Введите имя...">
            <input type="text" name="patronymic" placeholder="Введите отчество...">
            <select name="year"></select>
            <select name="month"></select>
            <select name="day"></select>
            <input type="email" name="email" placeholder="Ведите E-mail...">
            <input type="password" name="password" placeholder="Введите пароль...">
            <input type="password" name="re-password" placeholder="Повторите пароль...">
            <input type="submit" value="Регистрация" name="registration">
            <div class="recover">
                <input type="checkbox">
                <label for="">Я прочитал правила <a href="#">заполнения</a></label>
            </div>
        </form>
    </div>
</div>

<?php
include_once 'templates/footer.php'
?>
