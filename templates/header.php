<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Main</title>
    <link rel="stylesheet" href="/static/lib/normalize.min.css">
    <link rel="stylesheet" href="/static/lib/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/static/styles/global.css">
    <link rel="stylesheet" href="/static/lib/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="/static/lib/fonts.css">

    <script src="/static/lib/jquery-3.3.1.min.js"></script>
    <script src="/static/lib/bootstrap/bootstrap.min.js"></script>
    <script src="/static/lib/auxiliary.js"></script>
    <script src="/static/lib/cookies.js"></script>
    <script src="/static/javascript/global.js"></script>
</head>
<body>
    <header class="header <?= $menuState ?>">
        <div class="sidebar">
            <?php if ($isAuthorized): ?>
            <div class="sidebar-user">
                <div class="user-avatar" title="<?= $userFirstName ?> <?= $userLastName ?>"></div>
                <div class="user-name">
                    <div class="user-lastname"><?= $userFirstName ?></div>
                    <div class="user-firstname"><?= $userLastName ?></div>
                </div>
            </div>
            <?php endif; ?>
            <nav class="nav">
                <div class="nav-item">
                    <a href="/" title="Главная">
                        <i class="fa fa-home"></i>
                        <span>Главная</span>
                    </a>
                </div>
                <div class="nav-item">
                    <a href="/events" title="События">
                        <i class="fa fa-asterisk"></i>
                        <span>События</span>
                    </a>
                </div>
                <?php if (!$isAuthorized): ?>
                <div class="nav-item">
                    <a href="/authorization" title="Авторизация">
                        <i class="fa fa-id-badge"></i>
                        <span>Авторизация</span>
                    </a>
                </div>
                <?php endif; ?>
                <?php if ($isAuthorized): ?>
                    <div class="nav-item">
                        <a href="/settings" title="Настройки">
                            <i class="fa fa-gear"></i>
                            <span>Настройки</span>
                        </a>
                    </div>
                <?php endif; ?>
                <?php if ($isAuthorized && $isUserAdmin): ?>
                    <div class="nav-item">
                        <a href="/users" title="Пользователи">
                            <i class="fa fa-users"></i>
                            <span>Пользователи</span>
                        </a>
                    </div>
                <?php endif; ?>
                <div class="nav-item">
                    <a href="/about" title="О нас">
                        <i class="fa fa-info"></i>
                        <span>О нас</span>
                    </a>
                </div>
                <?php if ($isAuthorized): ?>
                <div class="nav-item">
                    <a href="/logout" title="Выйти">
                        <i class="fa fa-sign-out"></i>
                        <span>Выйти</span>
                    </a>
                </div>
                <?php endif; ?>
            </nav>
            <div class="sidebar-mode-toggle">
                <i class="fa fa-angle-double-<?= $menuChevronDirection ?>"></i>
            </div>
        </div>
    </header>
    <main class="main">
