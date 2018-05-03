<?php
include_once 'templates/header.php'
?>


<!-- slider start -->
<div class="wrap-slider">
    <input type="radio" id="slide-1" name="slides" checked>
    <section class="slide slide-one">
        <h1>ОГЭКУ</h1>        
    </section>
    <input type="radio" id="slide-2" name="slides">
    <section class="slide slide-two">
        <h1>Достижения</h1>        
    </section>
    <input type="radio" id="slide-3" name="slides">
    <section class="slide slide-three">
        <h1>Новый корпус</h1>        
    </section>
    <input type="radio" id="slide-4" name="slides">
    <section class="slide slide-four">
        <h1>Выпускной</h1>        
    </section>
    <div class="header">
        <label for="slide-1"></label>
        <label for="slide-2"></label>
        <label for="slide-3"></label>
        <label for="slide-4"></label>
    </div>
</div>
<!-- slider end -->

<link rel="stylesheet" href="/static/styles/main.css">

<?php
include_once 'templates/footer.php'
?>