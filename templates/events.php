<?php
include_once 'templates/header.php'
?>

<link rel="stylesheet" href="/static/styles/events.css">
<script src="/static/javascript/events.js"></script>

<div class="presentation-wrapper" data-current="home-adventures">
    <div class="nav-wrapper">
        <div class="nav-section">
            <div data-name="home-adventures" class="section-title nav-active"><span>Домашние приключения</span></div>
            <div data-name="to-the-stars" class="section-title"><span>Сквозь тернии к звездам</span></div>
            <div data-name="gaudeamus-igitur" class="section-title"><span>Gaudeāmus igĭtur</span></div>
        </div>
    </div>
    <div class="presentation-section named--home-adventures section-active"></div>
    <div class="presentation-section named--to-the-stars"></div>
    <div class="presentation-section named--gaudeamus-igitur"></div>
</div>
<?php
include_once 'templates/footer.php'
?>
