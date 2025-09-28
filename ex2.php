<?php
// Проверка наличия данных в запросе
if (isset($_GET['name']) && isset($_GET['email']) && isset($_GET['password'])) {
    $name = $_GET['name'];
    $email = $_GET['email'];
    $password = $_GET['password'];
    // Валидация email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Неверный формат email");
    }
    // Создание массива
    $user = array(
        'name' => $name,
        'email' => $email,
        'password' => $password
    );
    // Вывод массива на экран
    echo '<pre>';
    print_r($user);
    echo '</pre>';
} else {
?>
    <!-- Форма -->
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

            label {
                font-size: 24px;
            }

            .second-lable {
                margin-top: 10px;
            }

            input {
                height: 40px;
                width: 400px;
                font-size: 18px;
                box-sizing: border-box;
                padding-left: 15px;
            }

            button {
                height: 45px;
                width: 200px;
                align-content: center;
                font-size: 18px;
                margin-top: 20px;
            }

            input,
            button {
                border: 2px solid grey;
                border-radius: 7px;
            }

            button:hover {
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

            <label for="email" class="second-lable">Введите ваш email</label>
            <input type="text" id="email" name="email" required>

            <label for="password" class="second-lable">Введите ваш пароль</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Отправить</button>
        </form>
    </body>

    </html>
<?php
}
?>