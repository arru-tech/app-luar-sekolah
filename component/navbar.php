<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"/>
<link rel="stylesheet" href="./css/navbar.css">
    
<nav class="navbar">
    <div class="logo">
        <img src="./img/LS-logo-2nd-master.png" alt="Logo">
    </div>
    <div class="menu">
        <ul>
            <li><a href="#" class="nav-link home">Home</a></li>
            <li><a href="#" class="nav-link testimoni">Testimoni</a></li>
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
    <a href="#" class="get-started">Get Started</a>
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
    document.querySelector('.nav-link.home').classList.add('active');
</script>

