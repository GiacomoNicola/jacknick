<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container-fluid text-center">
        <a class="navbar-brand" href="index.php">JackComputers</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#">PC</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Hardware
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Accessori Mod</a></li>
                        <li><a class="dropdown-item" href="#">Alimentatori</a></li>
                        <li><a class="dropdown-item">Case</a></li>
                        <li><a class="dropdown-item" href="#">Dissipatori</a></li>
                        <li><a class="dropdown-item" href="#">Memorie</a></li>
                        <li><a class="dropdown-item" href="#">Processori</a></li>
                        <li><a class="dropdown-item" href="#">Schede Madri</a></li>
                        <li><a class="dropdown-item" href="#">Schede Video</a></li>
                        <li><a class="dropdown-item" href="#">Ventole</a></li>
                        <li><a class="dropdown-item" href="#">SSD</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Accessori</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../pages/support">Supporto</a>
                </li>
            </ul>
            <form class="d-flex"> 
                <input type="text" name="" style="border-radius: 15px; border: none;" placeholder=" Cerca prodotti...">
                <a href="#">
                    <ion-icon class="search" name="search"></ion-icon>
                </a>    
            </form>
            <div class="icons">
                <div class="button-cart" onclick="addToCart()">
                    Carrello<ion-icon name="cart-outline"></ion-icon><div class="cart-counter">0</div>
                </div>
                <div class="button-login">
                    Login<ion-icon name="person-outline"></ion-icon>
                </div>
            </div>
        </div>
    </div>
</nav>