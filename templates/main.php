<?php
include_once 'templates/header.php'
?>


<!-- slider start -->
<div class="wrap-slider">
    <div class="header">
        <label for="slide-1">First Slide</label>
        <label for="slide-2">Second Slide</label>
        <label for="slide-3">Three Slide</label>
        <label for="slide-4">Four Slide</label>
        <label for="slide-5">Five Slide</label>
    </div>
    <input type="radio" id="slide-1" name="slides" checked>
    <section class="slide slide-one">
        <h1>Slide1 Title</h1>        
    </section>
    <input type="radio" id="slide-2" name="slides">
    <section class="slide slide-two">
        <h1>Slide2 Title</h1>        
    </section>
    <input type="radio" id="slide-3" name="slides">
    <section class="slide slide-three">
        <h1>Slide3 Title</h1>        
    </section>
    <input type="radio" id="slide-4" name="slides">
    <section class="slide slide-four">
        <h1>Slide4 Title</h1>        
    </section>
    <input type="radio" id="slide-5" name="slides">
    <section class="slide slide-five">
        <h1>Slide4 Title</h1>        
    </section>
</div>
<!-- slider end -->

<link rel="stylesheet" href="/static/styles/main.css">

<?php
include_once 'templates/footer.php'
?>