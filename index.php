<?php

// Включаем вывод ошибок
ini_set('display_errors',1);
error_reporting(E_ALL | E_STRICT);

// Устанавливаем имя сессии
ini_set('session.name', "sid");

// Ставим правильную таймзону
date_default_timezone_set("Europe/Kiev");

// Включаем отладку движка
define("ENGINE_DEBUG", false);

// Подключаем роутер
include_once 'application/core/CRouter.php';

// Создаем роутер
$app = new CRouter();

// Задаем маршруты указывающие на страницы
$app->add("^/$",               "main");
$app->add("^/authorization$",  "authorization");
$app->add("^/registration$",   "registration");
$app->add("^/login$",          "login");
$app->add("^/logout$",         "logout");
$app->add("^/events$",         "events");
$app->add("^/quest/([1-3])$",  "quest");
$app->add("^/about$",          "about");
$app->add("^/error/(40[3-5])$","error");

// Запускаем роутер
$app->run();
