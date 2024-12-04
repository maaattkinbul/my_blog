<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<header> <!-- Начало шапки сайта -->
    <div class="header-container"> <!-- Контейнер для элементов шапки -->
        <!-- Навигация сайта -->
        <nav class="main-nav">
            <a href="index.php">Главная</a> <!-- Ссылка на главную страницу -->
            <a href="templates/pages/about.php">О себе</a>   <!-- Ссылка на страницу "О себе" -->
        </nav>
        <!-- Центральный текст -->
        <div class="center-text">
            <h1>Добро пожаловать на мой блог</h1>
        </div>
        <!-- Блок с кнопками входа, выхода и личного кабинета -->
        <div class="user-section">
            <!-- Отображение текущей даты и времени -->
            <div class="date-time">
                <?php
                // Функция date() выводит текущую дату и время в формате день.месяц.год часы:минуты:секунды
                date_default_timezone_set('Europe/Minsk');
                echo date('d.m.Y H:i:s');
                ?>
            </div>
            <div class="user-actions">
                <?php
                session_start();
                if (isset($_SESSION['user_id'])) {
                    echo '<a href="pages/dashboard.php">Личный кабинет</a>';
                    echo '<a href="pages/logout.php">Выход</a>';
                } else {
                    echo '<a href="pages/login.php">Вход</a>';
                    echo '<a href="pages/register.php">Регистрация</a>';
                }
                ?>
            </div>
        </div>
    </div>
</header>

