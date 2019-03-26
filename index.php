<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomeWork4_5</title>
</head>
<body>
<h2>Ассоциативный массив</h2>
<p>Создать многомерный массив, первый уровень - ключи языка: ru, en. Они в свою очередь седержат массивы из значениями
    дней недели на соответствующем языке. В скрипт передать 2 пераметра через GET запрос: 'lang' и 'day' и по ним выдим
    значение из массива.
    lang - тип языка, строка. day - номер дня недели, цыфра.</p>
<?php
$arLangWeekDay = [
    'ru' => [
        '1' => 'Понедельник',
        '2' => 'Вторник',
        '3' => 'Среда',
        '4' => 'Четверг',
        '5' => 'Пятница',
        '6' => 'Суббота',
        '7' => 'Воскресенье',
    ],
    'en' => [
        '1' => 'Monday',
        '2' => 'Tuesday',
        '3' => 'Wednesday',
        '4' => 'Thursday',
        '5' => 'Friday',
        '6' => 'Saturday',
        '7' => 'Sunday',
    ]
];

$lang = null;
$day = null;
if (array_key_exists("lang", $_GET) && array_key_exists("day", $_GET)) {
    $lang = $_GET['lang'];
    $day = $_GET["day"];
    echo "День недели согласно GET параметров <b>{$arLangWeekDay[$lang][$day]}</b>";
}
?>
</body>
</html>