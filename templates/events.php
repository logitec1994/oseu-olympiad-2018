
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
                <div class="home-event-wrap">
                    <p>В этом этапе вас ожидает ознакомление с университетом и городом</p>
                    <ul>
                        <li>Знакомство с городом
                            <ul>
                                <li>Знакомство с окресностями университета</li>
                            </ul>
                        </li>
                        <li>Знакомство с университетом
                            <ul>
                                <li>Знакомство с факультетом и кафедрами</li>
                                <li>Знакомство с преподователями</li>
                            </ul>
                        </li>
                        <li>Сбор документов
                            <ul>
                                <li>Документ подтверждающий личность</li>
                                <li>Военный билет</li>
                                <li>Экзаминационный листок</li>
                                <li>Сертификат</li>
                            </ul>
                        </li>
                        <li>Заполнение заявления поступления в университет</li>
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
                <p>Представьте, что вы выбрали университет, факультет, кафедру, и далее вам необходимо:
                    <ul>
                        <li>Подать все документы на поступление</li>
                        <li>Пройти собеседование</li>
                        <li>Пройти тестирование и набрать баллы</li>
                        <li>Узнать конкурсный балл</li>
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
                Студенту необходимо утвердить свой выбор поразмыслив во время прогулки по городу, осмотра окрестностей. Узнав побольше о данном месте с лёгкой душой подать "реальные документы" на поступление в университет, который был выбран.
                <ul>
                    <li>Познакомится с будущеей профессией</li>
                    <li>Узнать что такое студенческая жизнь</li>
                </ul>
                <form action="/events" method="post">
                    <input type="hidden" value="3">
                    <input type="submit" class="btn btn-success" value="Приступить">
                </form>
            </div>
        </div>
    </div>
</div>
