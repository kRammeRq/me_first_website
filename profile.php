<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Рыбаков Д.С</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container nav_bar">
            <div class="row">
                <div class="row">
                    <div class="col-3 nav_logo"></div> 
                    <div class="col-9">
                        <div class="nav_text">Информация обо мне!</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-8"> 
                    <h1>Рыбаков Д.С, лучший в мире адвокат. Я осуществляю свою деятельность в Калуге. Однако при необходимости выезжаю и в другие города РФ.
                        Являюсь специалистом уголовно-правовой практики. Работаю в сфере преступлений против личности, против собственности, против государственной службы и по иным квалификациям, предусмотренным Уголовным кодексом РФ.
                        Также имею богатый опыт в области цивилистики, что позволяет успешно оказывать юридическую помощь по гражданским делам в судах общей юрисдикции и в арбитражных судах.
                        
                         </h1>
                </div>
                <div class="col-4">
                    <div class="row my_photo"></div>
                    <div class="row"> <p class="title_photo">Рыбаков Д.С</p></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12"> 
                    <h1>Вот пример тех, с кем я работал!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div class="row photo_walt"></div>
                    <div class="row"> <p class="title_photo">Уолтер Уайт</p></div>
                </div>
                <div class="col-6">
                    <div class="row photo_jesse"></div>
                    <div class="row"> <p class="title_photo">Джесси Пинкман</p></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="button_js col-12">
                    <button id="myButton">Click me</button>
                    <p id="demo"></p>
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
                        <div class="row form_post"><input type="text" class="form" type="text" name="title" placeholder="Заголовок вашего поста"></div>
                        <div class="row form_post"><textarea name="text" cols="30" rows="10" placeholder="Введите текст вашего поста..."></textarea></div>
                        <button type="submit" class="btn_red"  id="ButtonSave" name="submit">Сохранить пост!</button>
                    </form>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="js/button.js"></script>
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