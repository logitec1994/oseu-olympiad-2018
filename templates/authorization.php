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
            <select name="day" id="day">
                <option value="01">01</option>
                <option value="02">02</option>
                <option value="03">03</option>
                <option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
            </select>
            <select name="month" id="month">
                <option value="01">Январь</option>
                <option value="02">Февраль</option>
                <option value="03">Март</option>
                <option value="04">Апрель</option>
                <option value="05">Май</option>
                <option value="06">Июнь</option>
                <option value="07">Июль</option>
                <option value="08">Август</option>
                <option value="09">Сентябрь</option>
                <option value="10">Октябрь</option>
                <option value="11">Ноябрь</option>
                <option value="12">Декабрь</option>
            </select>
            <select name="year" id="year">
<!--                 <option value="1981">1981</option>
                <option value="1982">1982</option>
                <option value="1983">1983</option>
                <option value="1984">1984</option>
                <option value="1985">1985</option>
                <option value="1986">1986</option>
                <option value="1987">1987</option>
                <option value="1988">1988</option>
                <option value="1989">1989</option>
                <option value="1990">1990</option>
                <option value="1991">1991</option>
                <option value="1992">1992</option>
                <option value="1993">1993</option>
                <option value="1994">1994</option>
                <option value="1995">1995</option>
                <option value="1996">1996</option> -->
                <option value="1997">1997</option>
                <option value="1998">1998</option>
                <option value="1999">1999</option>
                <option value="2000">2000</option>
            </select>
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
