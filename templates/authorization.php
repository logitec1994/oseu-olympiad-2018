<?php
include_once 'templates/header.php'
?>
<link rel="stylesheet" href="/static/styles/form.css">
<link rel="stylesheet" href="/static/lib/notify/notify.css">

<script src="/static/lib/notify/notify.js"></script>
<script src="/static/lib/cookies.js"></script>
<script src="/static/javascript/authorization.js"></script>

<div class="wrapper">
    <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Авторизация</h2>
        <input type="email" class="form-control" name="email" placeholder="Введите E-mail..." required="" autofocus="">
        <input type="password" class="form-control" name="password" placeholder="Введите пароль..." required=""/>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Войти</button>
    </form>
</div>

<div class="wrapper">
    <form class="form-signin" method="post">
        <h2 class="form-signin-heading">Регистрация</h2>
        <input type="text" class="form-control" name="lastname" placeholder="Введите фамилию..." required="" autofocus="" />
        <input type="text" class="form-control" name="firstname" placeholder="Введите имя..." required=""/>
        <input type="text" class="form-control" name="patronymic" placeholder="Введите отчество...">
        <div class="date form-control">
            <select name="year">
                <option value="01">01</option>
            </select>
            <select name="month">
                <option value="01">Январь</option>
            </select>
            <select name="day">
                <option value="1997">1997</option>
            </select>
        </div>
        <input type="email" class="form-control" name="email" placeholder="Ведите E-mail...">
        <input type="password" class="form-control" name="password" placeholder="Введите пароль...">
        <input type="password" class="form-control" name="re-password" placeholder="Повторите пароль...">
        <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
    </form>
</div>



<?php
include_once 'templates/footer.php'
?>
