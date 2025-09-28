<?php
if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];
    echo "<h2 style='margin-top: 45vh; font-size: 24px; text-align: center;'>Здравствуйте, $name!</h2>";
    if ($age >= 18) {
        echo "<p style='margin-top: 20px; font-size: 20px; text-align: center;'>Вам $age лет. Вы совершеннолетний.</p>";
    } else {
        echo "<p style='margin-top: 20px; font-size: 20px; text-align: center;'>Вам $age лет. Вы несовершеннолетний.</p>";
    }
} else {
?>
    <!DOCTYPE html>
    <html lang="ru">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <style>
            body {
                width: 100vw;
                height: 100vh;
                margin: 0;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            form {
                display: flex;
                flex-direction: column;
                gap: 10px;
                align-items: center;
            }

            label{
                font-size: 24px;
            }

            .second-lable{
                margin-top: 10px;
            }

            input{
                height: 40px;
                width: 400px;
                font-size: 18px;
                box-sizing: border-box;
                padding-left: 15px;
            }

            button{
                height: 45px;
                width: 200px;
                align-content: center;
                font-size: 18px;
                margin-top: 20px;
            }

            input, button{
                border: 2px solid grey;
                border-radius: 7px;
            }

            button:hover{
                cursor: pointer;
                border-color: tomato;
                background-color: transparent;
            }
        </style>
    </head>

    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="GET">
            <label for="name">Введите ваше имя</label>
            <input type="text" id="name" name="name" required>

            <label for="age" class="second-lable">Введите ваш возраст</label>
            <input type="number" id="age" name="age" required>

            <button type="submit">Отправить</button>
        </form>
    </body>

    </html>
<?php
}
?>