<?php
include_once 'templates/header.php'
?>
<link rel="stylesheet" href="/static/styles/authorization.css">
<link rel="stylesheet" href="/static/lib/notify/notify.css">

<script src="/static/lib/notify/notify.js"></script>
<script src="/static/lib/cookies.js"></script>
<script src="/static/javascript/authorization.js"></script>

<div class="authorization-wrapper">
    <div class="form-wrapper">
        <label for="" title="tab-1" class="authorization tab active">Авторизация</label>
        <label for="" title="tab-2" class="registration tab">Регистрация</label>
        <form id="login-form" class="form-signin" method="post">
            <h2 class="form-signin-heading">Авторизация</h2>
            <input type="email" class="form-control" name="email" placeholder="Введите E-mail..." required="" autofocus="">
            <input type="password" class="form-control" name="password" placeholder="Введите пароль..." required=""/>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
        </form>
        <form id="registration-form" class="form-signin hidden" method="post">
            <h2 class="form-signin-heading">Регистрация</h2>
            <input type="text" class="form-control" name="lastname" placeholder="Введите фамилию..." required="" autofocus="" />
            <input type="text" class="form-control" name="firstname" placeholder="Введите имя..." required=""/>
            <input type="text" class="form-control" name="patronymic" placeholder="Введите отчество...">
            <div class="date form-control">
                <select name="year">
                </select>
                <select name="month">
                </select>
                <select name="day">
                </select>
            </div>
            <input type="email" class="form-control" name="email" placeholder="Ведите E-mail...">
            <input type="password" class="form-control" name="password" placeholder="Введите пароль...">
            <input type="password" class="form-control" name="re-password" placeholder="Повторите пароль...">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
        </form>
    </div>
</div>


<?php
include_once 'templates/footer.php'
?>
