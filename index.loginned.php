<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home - IT Лицей</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <video autoplay muted loop class="background-video">
        <source src="background/backvideo1.mp4" type="video/mp4">
    </video>
    <header>
        <div class="head" id="head">
            <h1 id="title">Добро пожаловать в IT Лицей</h1>
        </div>
        <div class="container">
            <nav class="menu" id="menu">
                <ul>
                    <li><a href="views/news.php">Новости</a></li>
                    <li><a href="views/leaderboard.php">Лидерборд</a></li>
                    <li><a href="#">Консультация</a></li>
                    <li><a href="views/accaunt.php">Профиль</a></li>
                </ul>
            </nav>
            <div class="burger-btn" id="burger-btn">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </header>

    <section id="about">
        <h2>О школе</h2>
        <p>IT-Лицей-интернат №1 в Шымкенте — это специализированное учебное заведение, ориентированное на поддержку одарённых детей с акцентом на IT-образование. 
        Основанная по инициативе первого Президента Казахстана Н. Назарбаева, школа предлагает программы по робототехнике, программированию, 3D-моделированию и другим технологическим направлениям. 
        Учебное заведение активно участвует в международных проектах и конкурсах, а также сотрудничает с иностранными образовательными учреждениями.</p>
    </section>

    <section id="achievements">
        <h2>Наши достижения</h2>
        <div class="slider-container">
            <div class="slider">
                <img src="images/achievement1.jpg" alt="Достижение 1">
                <img src="images/achievement2.jpg" alt="Достижение 2">
                <img src="images/achievement3.jpg" alt="Достижение 3">
                <img src="images/achievement4.jpg" alt="Достижение 4">
                <img src="images/achievement1.jpg" alt="Достижение 1">
                <img src="images/achievement2.jpg" alt="Достижение 2">
                <img src="images/achievement3.jpg" alt="Достижение 3">
                <img src="images/achievement4.jpg" alt="Достижение 4">
                <img src="images/achievement1.jpg" alt="Достижение 1">
                <img src="images/achievement2.jpg" alt="Достижение 2">
                <img src="images/achievement3.jpg" alt="Достижение 3">
                <img src="images/achievement4.jpg" alt="Достижение 4">
            </div>
            <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
            <button class="next" onclick="moveSlide(1)">&#10095;</button>
        </div>
    </section>
    
    <script src="script.js"></script>
    <script src="background.js"></script>
    <script src="galery.js"></script>
    <script src="burger_menu.js"></script>
</body>
</html>
