<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dobrograd Fire Department</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="../assets/img/logo.svg" sizes="32x32" type="image/svg+xml">
    <link rel="stylesheet" href="../assets/css/styles.css">
    <style>
        .hero {
            height: 70vh;
        }
        .card {
            transition: transform 0.3s;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card-img-top {
            height: 200px;
            object-fit: cover;
        }
        .btn-discord {
            background-color: #5865f2;
            color: white;
        }
        .btn-discord:hover {
        	background-color: #3e47af;
        	color: white;
        }
    </style>
</head>
<body>
    <?php
        $currentPage = 'home';
        include(__DIR__.'/includes/navbar.php');
    ?>
    <header id='element2' class="hero d-flex align-items-center">
        <div class="container text-center text-white">
            <h1 class="display-4 text-accent fw-bold"><i class="bi bi-fire"></i> Пожарный департамент Доброграда</h1>
            <p class="lead text-accent"><i class="bi bi-stars"></i> Защищаем жизни и имущество 24/7</p>
            <div class="mt-4">
                <a href="../academy" class="btn btn-accent"><i class="bi bi-briefcase-fill"></i> Пожарная академия</a>
                <a href="https://forum.dfd-dbg.ru/" class="btn btn-secondaryaccent"><i class="bi bi-chat-square-dots-fill"></i> Форум фракции</a>
                <br>
                <a href="https://discord.gg/VT4vMtGyKp" style="margin-top: 5px;" class="btn btn-discord"><i class="bi bi-discord"></i> Discord фракции</a>
            </div>
        </div>
    </header>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r134/three.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanta@0.5.24/dist/vanta.globe.min.js"></script>
    <script>
    VANTA.GLOBE({
      el: "#element2",
      mouseControls: false,
      touchControls: false,
      gyroControls: false,
      minHeight: 200.00,
      minWidth: 200.00,
      scale: 1.00,
      scaleMobile: 1.00,
      color: 0x91251b,
      color2: 0xffba2f,
      size: 5.00,
      backgroundColor: 0xffffff
    })
    </script>
    <main>
        <section id="about" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4 text-accent"><i class="bi bi-info-circle-fill"></i> О нашем департаменте</h2>
                <div class="row">
                    <div class="col-md-6">
                        Пожарное управление Доброграда отвечает за сохранение жизни и имущества на территории города Доброград. Преданные своему делу мужчины и женщины защищают всех жителей и посетителей города. Высококвалифицированные и надлежащим образом экипированные пожарные реагируют на пожары, спасательные операции, неотложную медицинскую помощь, выбросы химических веществ и стихийные бедствия.
                        Пожарное управление Доброграда управляет 7 пожарными станциями, состоит из 90 штатных и 75 внештатных пожарных и работает 24 часа в сутки 365 дней в году.
                    </div>
                    <div class="col-md-6">
                        <img src="../assets/img/poster_2.png" alt="Пожарные Доброграда" class="img-fluid rounded">
                    </div>
                </div>
            </div>
        </section>

        <section id="services" class="py-5 bg-light-subtle z-0" data-bs-theme="dark">
            <div class="container">
                <h2 class="text-center mb-4 text-white"><i class="bi bi-buildings-fill"></i> Наша работа</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="../assets/img/poster_3.png" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-white">Пожаротушение</h5>
                                <p class="card-text text-white">Быстрое реагирование на пожары и их эффективное тушение с использованием современного оборудования.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="../assets/img/poster_4.png" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-white">Спасательные операции</h5>
                                <p class="card-text text-white">Проведение спасательных операций при различных чрезвычайных ситуациях, включая ДТП и природные катастрофы.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                        <img src="../assets/img/poster_5.png" class="card-img-top">
                            <div class="card-body">
                                <h5 class="card-title text-white">Общественная деятельность</h5>
                                <p class="card-text text-white">Проведение образовательных программ для предотвращения пожаров и повышения безопасности.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--<section id="news" class="py-5" data-bs-theme="light">
            <div class='container'>
                <h2 class="text-center mb-4">Последние новости</h2>
                <div id="newsContainer" class="row">
                    <div class='col-md-4 mb-3'>
                        <div class="card news-item">
                            <div class="card-body">
                                <h5 class="card-title">${item.title}</h5>
                                <p class="card-text">${item.summary}</p>
                                <button class="btn btn-primary" onclick="openFullNews(${index})">Открыть полностью</button>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-4 mb-3'>
                        <div class="card news-item">
                            <div class="card-body">
                                <h5 class="card-title">${item.title}</h5>
                                <p class="card-text">${item.summary}</p>
                                <button class="btn btn-primary" onclick="openFullNews(${index})">Открыть полностью</button>
                            </div>
                        </div>
                    </div>
                    <div class='col-md-4 mb-3'>
                        <div class="card news-item">
                            <div class="card-body">
                                <h5 class="card-title">${item.title}</h5>
                                <p class="card-text">${item.summary}</p>
                                <button class="btn btn-primary" onclick="openFullNews(${index})">Открыть полностью</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->

        <section id="stats" class="py-5 bg-secondary-accent">
            <div class="container">
                <h2 class="text-center mb-4 text-accent"><i class="bi bi-bar-chart-line-fill"></i> Наша статистика</h2>
                <div class="row text-center">
                    <div class="col-md-3 mb-3">
                        <h3 class="display-4 fw-bold text-accent">98%</h3>
                        <p>Успешных спасательных операций</p>
                    </div>
                    <div class="col-md-3 mb-3">
                        <h3 class="display-4 fw-bold text-accent">5 мин</h3>
                        <p>Среднее время прибытия</p>
                    </div>
                    <div class="col-md-3 mb-3">
                        <h3 class="display-4 fw-bold text-accent">50+</h3>
                        <p>Профессиональных пожарных</p>
                    </div>
                    <div class="col-md-3 mb-3">
                        <h3 class="display-4 fw-bold text-accent">24/7</h3>
                        <p>Круглосуточное дежурство</p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="py-5">
            <div class="container">
                <h2 class="text-center mb-4 text-accent"><i class="bi bi-telephone-fill"></i> Связь с нами</h2>
                <p class="text-center"><strong>Экстренный вызов:</strong> 911*</p>
                <p class="text-center"><strong>Discord:</strong> <a href='#'>https://discord.gg/VT4vMtGyKp</a></p>
                <p class="text-center">*данный номер предоставлен исключительно в рамках RP режима, мы не призываем звонить по нему в реальной жизни</p>
            </div>
        </section>
    </main>

    <footer class="py-4">
        <div class="container text-center">
            <p>2024 | Иллюстрация игрового сайта фракции</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>