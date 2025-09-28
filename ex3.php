<?php
//Запускаем сессию
session_start();

//Проверяем наличие счетчика посещений в массиве сессии и создаем переменную message
if (isset($_SESSION['visit_counter'])) {
    $_SESSION['visit_counter']++;
    $message = "С возвращением!";
} else {
    $_SESSION['visit_counter'] = 1;
    $message = "Приветствуем вас на сайте!";
}

//Создаем переменную с количеством посещений
$visit_counter = $_SESSION['visit_counter'];

//Выводим информацию на экран
echo "<h2>$message</h2>";
echo "<p>Вы посетили сайт $visit_counter раз</p>";
