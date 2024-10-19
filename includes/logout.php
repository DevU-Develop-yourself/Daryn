<?php
session_start();
session_destroy(); // Удаляем все данные сессии
header('Location: /login.php'); // Перенаправление на страницу входа
exit;
?>
