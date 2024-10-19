<?php
$token = "7220749512:AAEe3vp3-qslQ-jVXqvoox-o2Y1pH2PmSQs";
$website = "https://api.telegram.org/bot" . $token;

// Получение обновлений
$update = json_decode(file_get_contents('php://input'), TRUE);
$message = $update['message'] ?? null;

if ($message) {
    $chat_id = $message['chat']['id'];
    $text = $message['text'];

    // Пример простого ответа
    if ($text == "/start") {
        $response = "Привет! Я бот для LMS. Как я могу помочь?";
    } else {
        $response = "Вы написали: " . $text;
    }

    // Отправка ответа
    file_get_contents($website . "/sendMessage?chat_id=" . $chat_id . "&text=" . urlencode($response));
}
?>
