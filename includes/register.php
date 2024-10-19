<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $registration_date = date('Y-m-d H:i:s'); // Получаем текущую дату и время

    // Проверка существующего email
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    if ($stmt->rowCount() > 0) {
        echo "Этот email уже зарегистрирован.";
        exit; // Прерываем выполнение скрипта
    }

    // Изменяем запрос для вставки даты регистрации
    $stmt = $pdo->prepare("INSERT INTO users (name, email, password, registration_date) VALUES (?, ?, ?, ?)");
    if ($stmt->execute([$name, $email, $password, $registration_date])) {
        header('Location: /index.loginned.php'); // Убедитесь, что путь правильный
        exit(); // Важно завершить выполнение скрипта
    } else {
        echo "Ошибка при регистрации. Пожалуйста, попробуйте снова.";
    }
}
?>
