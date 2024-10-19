<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <video autoplay muted loop class="background-video">
        <source src="backvideo1.mp4" type="video/mp4">
    </video>
    <div class="container1">
        <form action="../includes/login.php" method="POST">
            <h2>Вход</h2>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Пароль" required>
            <button type="submit">Войти</button>
            <p>Нет аккаунта? <a href="register.php">Зарегистрируйтесь</a></p>
        </form>
    </div>
</body>
</html>
