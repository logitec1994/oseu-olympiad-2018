<link rel="stylesheet" href="/static/styles/quests.css">
<link rel="stylesheet" href="/static/styles/quest.1.3.css">
<script src="/static/lib/snapfit.js"></script>
<script src="/static/javascript/quest.1.3.js"></script>

<div class="home-event-wrap">
    <div class="not-exist-files">
        <p>Статус документов</p>
        <ul>
            <li><span>Докукент, что подтверждает личность</span> <span>0/1</span></li>
            <li><span>Военный билет</span> <span>0/1</span></li>
            <li><span>Екзаминационный билет</span> <span>0/1</span></li>
            <li><span>Сертификат образец, что подтверждает знание иностранного языка</span> <span>0/1</span></li>
        </ul>
        <div id="my_img">
        </div>
        <img onload="snapfit.add(this)" src="/uploaded/1.passport.png" alt="" />
        <img onload="snapfit.add(this)" src="/uploaded/1.military-id.png" alt="" />
        <img onload="snapfit.add(this)" src="/uploaded/1.examination-ticket.png" alt="" />
        <img onload="snapfit.add(this)" src="/uploaded/1.english-certificate.png" alt="" />
    </div>
    <form action="#" method="post">
        <input type="hidden">
        <input type="submit" value="Продолжить" disabled>
    </form>
</div>