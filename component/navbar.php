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
                    <a href="#">Program 1</a>
                    <a href="#">Program 2</a>
                    <a href="#">Program 3</a>
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

