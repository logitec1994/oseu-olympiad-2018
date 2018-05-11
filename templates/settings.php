<link rel="stylesheet" href="/static/styles/settings.css">
<link rel="stylesheet" href="/static/lib/notify/notify.css">

<script src="/static/lib/notify/notify.js"></script>
<script src="/static/javascript/settings.js"></script>

<form action="/settings" enctype="multipart/form-data" method="post" id="settings-form">
    <input type="text" class="form-control" name="lastname" placeholder="Введите фамилию..." required="" autofocus="" />
    <input type="text" class="form-control" name="firstname" placeholder="Введите имя..." required=""/>
    <input type="text" class="form-control" name="patronymic" placeholder="Введите отчество...">
    <div class="date form-control">
        <select class="custom-select" name="year"></select>
        <select class="custom-select" name="month"></select>
        <select class="custom-select" name="day"></select>
    </div>
    <input type="email" class="form-control" name="email" placeholder="Ведите E-mail...">
    <input type="password" class="form-control" name="password" placeholder="Введите пароль...">
    <label class="fileContainer" for="user-photo">
        Chose youre avatar
    </label>
    <input type="file" id="user-photo" class="form-control-file" accept=".png,.jpg,.jpeg" name="avatar">
    <input type="submit" value="Обновить" class="btn btn-primary" name="update">
</form>
