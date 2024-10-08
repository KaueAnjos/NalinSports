<?php
    require_once __DIR__ . '/../config/connection.php';
    require_once __DIR__ . '/../config/config.php';

    // getting screen resolution
    session_start();
    if(isset($_SESSION['screen_width']) AND isset($_SESSION['screen_height'])){
        $screen_width =  $_SESSION['screen_width'];
        $screen_height = $_SESSION['screen_height'];

    } else if(isset($_REQUEST['width']) AND isset($_REQUEST['height'])) {
        $_SESSION['screen_width'] = $_REQUEST['width'];
        $_SESSION['screen_height'] = $_REQUEST['height'];
        header('Location: ' . $_SERVER['PHP_SELF']);
        
    } else {
        echo '<script type="text/javascript">window.location = "' . $_SERVER['PHP_SELF'] . '?width="+screen.width+"&height="+screen.height;</script>';
    }
?>
<head>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>/assets/css/home-style.css" />
</head>
<main>
    <section class="carousel">
        <div id="maincarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#maincarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#maincarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#maincarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?php echo INCLUDE_PATH; ?>/assets/img/carousel/slide1.png" class="d-block">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo INCLUDE_PATH; ?>/assets/img/carousel/slide2.png" class="d-block">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo INCLUDE_PATH; ?>/assets/img/carousel/slide3.png" class="d-block">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#maincarousel" data-bs-slide="prev">
                <div class="container-arrow"><span class="carousel-control-prev-icon" aria-hidden="true"></span></div>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#maincarousel" data-bs-slide="next">
                <div class="container-arrow"><span class="carousel-control-next-icon" aria-hidden="true"></span></div>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>

    <section class="highlights">
        <br>
        <h1>Destaques</h1> 

        <div id="carouselHighlights" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                    // validation
                    $sql = $pdo->prepare("SELECT * FROM produtos");
                    $sql->execute();

                    if ($sql->rowCount() == 0)
                    {
                        echo "
                            <p style='font-size: 30px; color: #f66b0e; width: 100%; text-align: center;'>
                                Não há produtos em destaque
                            </p>
                        ";
                        $num_slides = 0;
                    }
                    else
                    {
                        // functions slides
                        function createFirstSlideHighlights($highlights)
                        { ?>
                            <div class="carousel-item active">
                                <div class="highlight-container"><?php
                                    foreach ($highlights as $highlight)
                                    { ?>
                                        <div class="highlight-card">
                                            <img src="<?php echo INCLUDE_PATH . $highlight['imagem']; ?>" />
                                            <p class="product-name"><?php echo $highlight['tipo'] ." ". $highlight['marca'] ." ". $highlight['nome_produto']; ?></p>
                                            <br>
                                            <p class="product-price"><?php echo "R$". $highlight['preco']; ?>
                                                <span class="product-installment"><?php echo $highlight['limite_parcelas'] ."x de R$". $highlight['preco']; ?></span>
                                            </p>
                                            <a href="store?cod_prod=<?php echo $highlight['cod_prod']; ?>" class="btn-products">Quero!</a>
                                        </div><?php
                                    }?>
                                </div>
                            </div><?php
                        }

                        function createOthersSlidesHighlights($highlights)
                        {  ?>
                            <div class="carousel-item">
                                <div class="highlight-container"><?php
                                    foreach ($highlights as $highlight)
                                    { ?>
                                        <div class="highlight-card">
                                            <img src="<?php echo INCLUDE_PATH . $highlight['imagem']; ?>" />
                                            <p class="product-name"><?php echo $highlight['tipo'] ." ". $highlight['marca'] ." ". $highlight['nome_produto']; ?></p>
                                            <br>
                                            <p class="product-price"><?php echo "R$". $highlight['preco']; ?>
                                                <span class="product-installment"><?php echo $highlight['limite_parcelas'] ."x de R$". $highlight['preco']; ?></span>
                                            </p>
                                            <a href="store?cod_prod=<?php echo $highlight['cod_prod']; ?>" class="btn-products">Quero!</a>
                                        </div><?php
                                    }?>
                                </div>
                            </div><?php
                        }
                        
                        // defining quantity
                        $px_highlights = 700;

                        $num_highlights = ceil($screen_width/$px_highlights);
                        $num_slides = ceil($sql->rowCount()/$num_highlights);

                        // first slide
                        $first_slide = $pdo->prepare("SELECT * FROM produtos WHERE cod_prod<=". $num_highlights ."");
                        $first_slide->execute();

                        $highlights = $first_slide->fetchAll();
                        createFirstSlideHighlights($highlights);

                        // others slides
                        $highlight_break = $highlight_now = $num_highlights;

                        for ($slide_now=2; $slide_now<=$num_slides; $slide_now++){
                            $highlight_break += $num_highlights;

                            $others_slides = $pdo->prepare("SELECT * FROM produtos WHERE cod_prod>". $highlight_now ." AND cod_prod<=". $highlight_break);
                            $others_slides->execute();
    
                            $highlights = $others_slides->fetchAll();
                            createOthersSlidesHighlights($highlights);

                            $highlight_now += $num_highlights;
                        }
                    }
                ?>
            </div>

            <!-- buttons bootstrap  -->
            <?php
                if($num_slides > 1){ ?>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTeam" data-bs-slide="prev">
                        <div class="container-arrow"><span class="carousel-control-prev-icon" aria-hidden="true"></span></div>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTeam" data-bs-slide="next">
                        <div class="container-arrow"><span class="carousel-control-next-icon" aria-hidden="true"></span></div>
                        <span class="visually-hidden">Next</span>
                    </button><?php
                }
            ?>
        </div>

    </section>

    <section class="product-type">
        <h1>O QUE VOCÊ ESTÁ</h1>
        <h1>PROCURANDO?</h1>
        <div class="products">
            <div class="product-card">
                <h1>CONJUNTOS</h1>
                <img src="<?php echo INCLUDE_PATH; ?>/assets/img/products-cards/set2.png" />
            </div>
            <div class="product-card">
                <h1>CAMISAS</h1>
                <img src="<?php echo INCLUDE_PATH; ?>/assets/img/products-cards/shirt.png" />
            </div>
            <div class="product-card">
                <h1>TÊNIS</h1>
                <img src="<?php echo INCLUDE_PATH; ?>/assets/img/products-cards/shoes.png" />
            </div>
        </div>
    </section>

    <section class="team" id="team">
        <label>Escolha seu time</label>

        <div id="carouselTeam" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                    $sql = $pdo->prepare("SELECT * FROM tb_times");
                    $sql->execute();

                    // validation
                    if ($sql->rowCount() == 0)
                    {
                        echo "
                            <p style='font-size: 30px; color: #f66b0e; width: 100%; text-align: center;'>
                                Não há nenhum registro de time
                            </p>
                        ";
                        $num_slides = 0;
                    }
                    else
                    {
                        // defining quantity
                        $px_teams = 300;

                        $num_teams = ceil($screen_width/$px_teams);
                        $num_slides = ceil($sql->rowCount()/$num_teams);

                        // functions slides
                        function createFirstSlideTeam($teams)
                        { ?>
                            <div class="carousel-item active">
                                <div class="container-itens"><?php
                                    foreach ($teams as $team)
                                    {
                                        ?><a href="catalog?team=<?php echo $team['cod_time']; ?>">
                                            <img src="<?php echo INCLUDE_PATH.$team['escudo']; ?>" class="icon-team">
                                        </a><?php
                                    }?>
                                </div>
                            </div><?php
                        }

                        function createOthersSlidesTeam($teams)
                        { ?>
                            <div class="carousel-item">
                                <div class="container-itens"><?php
                                foreach ($teams as $team)
                                {
                                    ?><a href="catalog?team=<?php echo $team['nome']; ?>">
                                        <img src="<?php echo INCLUDE_PATH.$team['escudo']; ?>" class="icon-team">
                                    </a><?php
                                }?>
                                </div>
                            </div><?php
                        }

                        // first slide
                        $first_slide = $pdo->prepare("SELECT * FROM tb_times WHERE cod_time<=". $num_teams ."");
                        $first_slide->execute();

                        $teams = $first_slide->fetchAll();
                        createFirstSlideTeam($teams);

                        // others slides
                        $team_break = $team_now = $num_teams;

                        for ($slide_now=2; $slide_now<=$num_slides; $slide_now++){
                            $team_break += $num_teams;

                            $others_slides = $pdo->prepare("SELECT * FROM tb_times WHERE cod_time>". $team_now ." AND cod_time<=". $team_break);
                            $others_slides->execute();
    
                            $teams = $others_slides->fetchAll();
                            createOthersSlidesTeam($teams);

                            $team_now += $num_teams;
                        }
                    }
                ?>
            </div>
            
            <!-- buttons bootstrap  -->
            <?php
                if($num_slides > 1){ ?>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselTeam" data-bs-slide="prev">
                        <div class="container-arrow"><span class="carousel-control-prev-icon" aria-hidden="true"></span></div>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselTeam" data-bs-slide="next">
                        <div class="container-arrow"><span class="carousel-control-next-icon" aria-hidden="true"></span></div>
                        <span class="visually-hidden">Next</span>
                    </button><?php
                }
            ?>
        </div>
    </section>
</main>