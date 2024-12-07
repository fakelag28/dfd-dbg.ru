<!-- navbar.php -->
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap');
    .navbar, .card {
        top: 0;
        font-family: 'Ubuntu', sans-serif;
        background-color: #0a1c36;
    }
    .navbar {
        z-index: 1000 !important;
    }
    .navbar-brand img {
        height: 40px;
        width: auto;
    }
    .navbar-nav .nav-item + .nav-item {
        border-left: 1px solid rgba(255, 255, 255, 0.3);
        margin-left: 1rem;
        padding-left: 1rem;
    } 
    @media (max-width: 991.98px) {
        .navbar-nav .nav-item + .nav-item {
            border-left: none;
            margin-left: 0;
            padding-left: 0;
        }
    }
    .dropdown-menu {
        background-color: #0a1c36 !important;
    }
    .dropdown-item.active, .dropdown-item:active {
        background-color: #91251b !important;
    }
    </style>
     <nav style="position:sticky" class="navbar z-2 navbar-expand-lg navbar-dark">
         <div class="container">
             <a class="navbar-brand" href="..">
                 <img src="../assets/img/logo.png" alt="Logo" class="d-inline-block align-top">
                 
             </a>
             <a href=".." style="text-decoration: none;" class="text-white">Dobrograd Fire Department</a>
             <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>
             <div class="collapse navbar-collapse" id="navbarNav">
                 <ul class="navbar-nav ms-auto text-center">
                     <li class="nav-item">
                         <a class="nav-link <?php if($currentPage == 'home') echo 'active'; ?>" href=".."><i class="bi bi-house-door-fill"></i> Главная страница</a>
                     </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if($currentPage == 'academy' or $currentPage == 'backhome' or $currentPage == 'invite' or $currentPage == 'invite1') echo 'active'; ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-briefcase-fill"></i> Вступление
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item <?php if($currentPage == 'academy') echo 'active'; ?>" href="../academy">Пожарная академия</a>
                            </li>
                            <li>
                                <a class="dropdown-item <?php if($currentPage == 'backhome') echo 'active'; ?>" href="../backhome">BackHome Program</a>
                            </li>
                            <!-- <li>
                                <a class="dropdown-item <?php if($currentPage == 'invite1') echo 'active'; ?>" href="../statements">Все заявления</a>
                            </li> -->
                        </ul>
                    </li>
                     <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle <?php if($currentPage == 'structure' or $currentPage == 'news' or $currentPage == 'photos') echo 'active'; ?>" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-info-circle-fill"></i> Информация
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDropdown">
                            <li>
                                <a class="dropdown-item <?php if($currentPage == 'structure') echo 'active'; ?>" href="../structure">Структура департамента</a>
                            </li>
                            <li>
                                <a class="dropdown-item <?php if($currentPage == 'news') echo 'active'; ?>" href="https://forum.dfd-dbg.ru/forums/8/">Пресс-релизы</a>
                            </li>
                            <li>
                                <a class="dropdown-item <?php if($currentPage == 'photos') echo 'active'; ?>" href="../photos">Галерея департамента</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link <?php if($currentPage == 'forum1') echo 'active'; ?>" href="https://forum.dfd-dbg.ru/">
                            <i class="bi bi-chat-dots-fill"></i> Форум
                        </a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link <?php if($currentPage == 'login') echo 'active'; ?>" href="../login">
                            <i class="bi bi-box-arrow-in-right"></i> Войти <span style="font-size: 0.75em; vertical-align: sub;">Panel</span>
                        </a>
                    </li>
                 </ul>
             </div>
         </div>
     </nav>