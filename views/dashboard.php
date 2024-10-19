<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h2>Добро пожаловать в ваш личный кабинет!</h2>
    <ul>
        <li><a href="news.php">Новости школы</a></li>
        <li><a href="leaderboard.php">Лидерборд</a></li>
        <li><a href="schedule.php">Ваше расписание</a></li>
        <li><a href="../includes/logout.php">Выйти</a></li>
    </ul>
</body>
</html>
