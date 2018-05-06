
<link rel="stylesheet" href="/static/styles/events.css">
<script src="/static/javascript/events.js"></script>

<div class="presentation-wrapper" data-current="home-adventures">
    <div class="nav-wrapper">
        <div class="nav-section">
            <div data-name="home-adventures" class="section-title"><span>Домашние приключения</span></div>
            <div data-name="to-the-stars" class="section-title"><span>Сквозь тернии к звездам</span></div>
            <div data-name="gaudeamus-igitur" class="section-title"><span>Gaudeāmus igĭtur</span></div>
        </div>
    </div>
    <div class="presentation-section named--home-adventures">
        <div class="home-wrapper section-wrapper">
            <div class="home-text">
                <p>Позвольте нам познакомить вас с нашим университетом</p>
                <div class="home-event-wrap">
                    <p>В этом этапе вас ожидает ознакомление с университетом и городом</p>
                    <ul>
                        <li>Сбор документов
                            <ul>
                                <li>Документ подтверждающий личность</li>
                                <li>Военный билет</li>
                                <li>Экзаминационный листок</li>
                                <li>Сертификат</li>
                            </ul>
                        </li>
                        <li>Заполнение заявления</li>
                    </ul>
                </div>
                <form action="/events" method="post">
                    <input type="hidden" value="1">
                    <input type="submit" class="btn btn-success" value="Приступить">
                </form>
            </div>
        </div>
    </div>
    <div class="presentation-section named--to-the-stars">
        <div class="to-the-stars-wrapper section-wrapper">
            <div class="to-the-stars-text">
                <p>Понакомтесь с будущими преподавателями и наставниками</p>
                <p>Представьте, что именно в данную минуту вам необходимо:
                    <ul>
                        <li>Подать все документы на поступление</li>
                        <li>Узнать суть собеседования</li>
                        <li>Приблизится к экзаменам</li>
                    </ul>
                </p>
                <form action="/events" method="post">
                    <input type="hidden" value="2">
                    <input type="submit" class="btn btn-success" value="Приступить">
                </form>
            </div>
        </div>
    </div>
    <div class="presentation-section named--gaudeamus-igitur">
        <div class="gaudeamus-wrapper section-wrapper">
            <div class="gaudeamus-text">
                <form action="/events" method="post">
                    <input type="hidden" value="3">
                    <input type="submit" class="btn btn-success" value="Приступить">
                </form>
            </div>
        </div>
    </div>
</div>
