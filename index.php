<?php

// Включаем вывод ошибок
ini_set('display_errors',1);
error_reporting(E_ALL | E_STRICT);

// Устанавливаем имя сессии
ini_set('session.name', "sid");

// Ставим правильную таймзону
date_default_timezone_set("Europe/Kiev");

// Включаем отладку движка
define("ENGINE_DEBUG", true);

// Подключаем роутер
include_once 'application/core/CRouter.php';

// Создаем роутер
$app = new CRouter();

// Задаем маршруты указывающие на страницы
$app->add("^/$",               "main");
$app->add("^/error/(40[3-5])$","error");
$app->add("^/quests$",         "quests");
$app->add("^/quest/([1-3])$",  "quest");

// Запускаем роутер
$app->run();
