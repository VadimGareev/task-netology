<?php
session_start();
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная страница</title>
</head>
<body>
<h1>Информация обо мне</h1>
<p>Вадим Гареев</p>

<?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])): ?>
    <p>Привет, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
    <a href="exit.php">Выйти</a>
<?php else: ?>
    <form action="post.php" method="post">
        <label for="username">Введите ваше имя:</label>
        <input type="text" id="username" name="username" required>
        <button type="submit">Отправить</button>
    </form>
<?php endif; ?>
</body>
</html>
