<?php
// Подключение header.php для единого стиля шапки сайта
include 'templates/includes/header.php';
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>О себе</title>
    <link rel="stylesheet" href="style.css"> <!-- Подключение общих стилей -->
</head>
<body>
<main class="about-page">
    <!-- Заголовок страницы -->
    <section class="about-header">
        <h1>О себе</h1>
        <p>Привет! Я [Твое имя], автор этого блога. Здесь я делюсь своими мыслями, интересами и увлечениями.</p>
    </section>

    <!-- Блок с фотографией -->
    <section class="about-photo">
        <img src="images/avatar.jpg" alt="Фото автора" class="avatar">
    </section>

    <!-- Основное описание -->
    <section class="about-details">
        <h2>Немного обо мне</h2>
        <p>
            Я увлекаюсь программированием и веб-разработкой. Решил создать этот блог, чтобы делиться
            своими мыслями, интересными проектами и опытом. Моя цель — вдохновлять других и рассказывать о том,
            как найти баланс между работой и увлечениями.
        </p>
        <p>
            Также я люблю спорт, книги, путешествия и изучение новых технологий.
        </p>
    </section>

    <!-- Контакты -->
    <section class="about-contacts">
        <h2>Контактная информация</h2>
        <p>Email: <a href="mailto:youremail@example.com">youremail@example.com</a></p>
        <div class="social-links">
            <a href="https://vk.com/yourprofile" target="_blank">
                <img src="includes/images/vk-icon.png" alt="VK">
            </a>
            <a href="https://instagram.com/yourprofile" target="_blank">
                <img src="includes/images/instagram-icon.png" alt="Instagram">
            </a>
        </div>
    </section>

    <!-- Форма обратной связи -->
    <section class="contact-form">
        <h2>Напишите мне</h2>
        <form action="buttons/send_message.php" method="POST">
            <label for="name">Ваше имя:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Ваш email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Сообщение:</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Отправить</button>
        </form>
    </section>
</main>

<?php
// Подключение footer.php для общего подвала
include 'templates/includes/footer.php';
?>
</body>
</html>
