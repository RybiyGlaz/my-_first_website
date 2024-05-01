<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Онищенко Д.И.</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
    <div class="container nav_bar">
        <div class="row">
            <div class="col-3 nav_logo"></div>
            <div class="col-9">
                <div class="nav_text">Ведьмаки</div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <h2>Воистину нет ничего более отвратного, нежели монстры оные, натуре противные, ведьмаками именуемые,
                    ибо суть они плоды мерзопакостного волшебства и диавольства. Это есть мерзавцы без достоинства, совеcти
                    чести, истинные исчадия адовы, токмо к убиениям приспособленными. Нет таким, како оне, места меж людьми
                    почтенными.А их Каэр Морхен, где оные бесчестники гнездятся, где оные бесчестники гнездятся, где мерзкие свои де
                    ла обделывают, смерт должен быть с лона земли и след по нему солью и селитрой посыпан.
                    Они валдаются по старне, нахальные и наглые, сами себя зла и истребителями, оборотней уничтожителями
                    и упырей отравителями именуещие, выманивают у легковерных плату, а приработав так, двигаются дви-
                    гаются дале, дабы в ближайшем городе таковое жульничество вновь свершить. Легче всего проникают оне
                    в хаты честного, простого и не отдающего в себе в том отчета хазяина, коий все злоключения и злосча-
                    стия запросто приписывает чарам, противуестественным творениям и мерзопакостным чудовищам, действиям
                    облачников альбо злых духов. Заместо того чтобы богам молиться, в храм богатое подношение
                    занести, простак сей грязному ведьмаку готов шелонг последний отдать, веря, что ведьмак, этот
                    выродок безбожный, сумеет долю его улучшить и несчастья отвратить.
                </h2>
            </div>
            <div class="col-4 text-center">
                <div class="row my_photo"></div>
                <div class="row"><p class="tittle_photo">Онищенко Д.И.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class ="container">
        <div class="row">
            <div class="button_js col-12">
                <button id="myButton">Click me</button>
                <p id ="demo"></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="hello">
                    Привет, <?php echo $_COOKIE['User']; ?>
                </h1>
            </div>
            <div class="col-12">
                <form method="POST" action="profile.php">
                    <input type="text" class="form" type="text" name="title" placeholder="Заголовок вашего поста">
                    <textarea name="text" cols="30" rows="10" placeholder="Введите текст вашего поста ..."></textarea>
                    <button type="submit" class="btn_red" name="submit">Сохраните пост!</button>
                </form>
            </div>
        </div>
    </div>
<script type="text/javascript" src="js/script.js"></script>
</body>

</html>

<?php
require_once('db.php');
$link = mysqli_connect('127.0.0.1', 'root', 'kali', 'first');

if (isset($_POST['submit'])) {

    $title = $_POST['title'];
    $main_text = $_POST['text'];

    if (!$title || !$main_text) die ("Заполните все поля");

    $sql = "INSERT INTO posts (title, main_text) VALUES ('$title', '$main_text')";

    if (!mysqli_query($link, $sql)) die ("Не удалось добавить пост");
}
?>
