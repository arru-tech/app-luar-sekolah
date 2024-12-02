<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>
<link rel="stylesheet" href="./css/navbar.css">
    
<nav class="navbar">
    <div class="logo">
        <a href="#">
        <img src="./img/LS-logo-master.png" alt="Logo">
        </a>
    </div>
    <div class="menu">
        <ul>
            <li><a href="#" class="nav-link home">Home</a></li>
            <li><a href="#" class="nav-link komunitas">Komunitas</a></li>
            <li>
                    <a href="#" class="nav-link program">Program <i class="fa-solid fa-angle-down fa-sm" style="vertical-align: middle; margin-left: 5px;"></i></a>
            
                <div class="dropdown">
                    <a href="https://luarsekolah.com/prakerja">Prakerja</a>
                    <a href="https://belajarbekerja.com/">Belajar Bekerja</a>
                    <a href="https://luarsekolah.com/indonesia-skills-week">Indonesia Skills Week</a>
                </div>
            </li>
        </ul>
    </div>
    
    <div class="buttons">
        <a href="#" class="masuk">Masuk</a>
        <a href="#" class="daftar-btn">Daftar</a>
    </div>
    
    <div class="hamburger" onclick="toggleMenu()">
        <div></div>
        <div></div>
        <div></div>
    </div>
</nav>
<script>
    function toggleMenu() {
        const menu = document.querySelector('.navbar .menu');
        menu.classList.toggle('active');
    }

    // Set link aktif
    document.querySelector('.nav-link.komunitas').classList.add('active');
</script>

