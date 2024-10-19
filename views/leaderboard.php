<?php
require '../includes/db.php';
$stmt = $pdo->query("SELECT name, points FROM users ORDER BY points DESC");
$users = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Лидерборд</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <h2>Лидерборд</h2>
    <ul>
        <?php foreach ($users as $user): ?>
            <li><?php echo $user['name']; ?> - <?php echo $user['points']; ?> очков</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
