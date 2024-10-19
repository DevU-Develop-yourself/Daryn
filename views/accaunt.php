<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Перенаправление на страницу входа
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <video autoplay muted loop class="background-video">
        <source src="background/backvideo1.mp4" type="video/mp4">
    </video>
    <h1>Добро пожаловать, <?php echo htmlspecialchars($_SESSION['user_name']); ?>!</h1>
    <h2>Информация о аккаунте:</h2>
    <p>Email: <?php echo htmlspecialchars($_SESSION['user_email']); ?></p>
    <p>Имя: <?php echo htmlspecialchars($_SESSION['user_name']); ?></p>
    <p>Дата регистрации: <?php echo htmlspecialchars($_SESSION['user_registration_date']); ?></p>
    <a href="logout.php">Выйти</a>
</body>
</html>
