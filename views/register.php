<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <video autoplay muted loop class="background-video">
        <source src="backvideo1.mp4" type="video/mp4">
    </video>
    <div class="container1">

        <form action="../includes/register.php" method="POST">
            <h2>Регистрация</h2>
            <input type="text" name="name" placeholder="Имя" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Пароль" required>
            <button type="submit">Зарегистрироваться</button>
            <p>Уже есть аккаунт? <a href="login.php">Войдите здесь</a></p>
        </form>
    </div>
</body>
</html>
