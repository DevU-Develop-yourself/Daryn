<?php
require '../includes/db.php';
$stmt = $pdo->query("SELECT * FROM news ORDER BY created_at DESC");
$news = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Новости школы</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h2>Новости школы</h2>
    <ul>
        <?php foreach ($news as $article): ?>
            <li>
                <h3><?php echo $article['title']; ?></h3>
                <p><?php echo $article['content']; ?></p>
                <small>Опубликовано <?php echo $article['created_at']; ?></small>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
