<!DOCTYPE html>
<html lang="pt-br">

<body>
    <header>
        <nav class="navBar">
            <div class="left-items">
                <img src="<?php echo INCLUDE_PATH; ?>/assets/img/logotipo.png" onclick="resetPage()">

                <div class="search-bar">
                    <div><i class="fas fa-search"></i></div>
                    <input class="search-input" type="text" placeholder="O que você está procurando?">
                </div>
            </div>
            <div class="right-items">
                <div class="wish-list">
                    <i class="fas fa-heart"></i>
                    <p>Lista de desejos</p>
                </div>
                <i class="fas fa-shopping-cart"></i>
                <a href="<?php echo INCLUDE_PATH_ADMIN; ?>login"><button class="admin-button">Admin</button></a>
            </div>
        </nav>
        <nav class="sub-navbar">
            <div class="categories-items">
                <ul>
                    <li><a href="">Masculino</a></li>
                    <li><a href="">Feminino</a></li>
                    <li><a href="">Infantil</a></li>
                    <li><a href="">Calçados</a></li>
                </ul>
            </div>

            <div class="menu-categories">
                <p>Categorias</p>
                <div><i class="fas fa-bars"></i></div>
            </div>
        </nav>
    </header>
</body>

</html>