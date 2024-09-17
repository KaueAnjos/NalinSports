<?php
    $pdo = new PDO('mysql:host='.HOST.';dbname='.DATABASE, USERNAME, PASSWORD);

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
                <div class="carousel-item active">
                <div class="highlight-container">
                        <div class="highlight-card">
                            <img src="<?php echo INCLUDE_PATH; ?>/assets/img/tenis.png" />
                            <p class="product-name">Tênis Nike Air Max Masculino</p>
                            <br>
                            <p class="product-price">R$9999,99
                                <span class="product-installment">10x de R$999,99</span>
                            </p>
                            <button class="btn-products">Quero!</button>
                        </div>

                        <div class="highlight-card">
                            <img src="<?php echo INCLUDE_PATH; ?>/assets/img/tenis.png" />
                            <p class="product-name">Tênis Nike Air Max Masculino</p>
                            <br>
                            <p class="product-price">R$9999,99
                                <span class="product-installment">10x de R$999,99</span>
                            </p>
                            <button class="btn-products">Quero!</button>
                        </div>

                        <div class="highlight-card">
                            <img src="<?php echo INCLUDE_PATH; ?>/assets/img/tenis.png" />
                            <p class="product-name">Tênis Nike Air Max Masculino</p>
                            <br>
                            <p class="product-price">R$9999,99
                                <span class="product-installment">10x de R$999,99</span>
                            </p>
                            <button class="btn-products">Quero!</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                <div class="highlight-container">
                        <div class="highlight-card">
                            <img src="<?php echo INCLUDE_PATH; ?>/assets/img/tenis.png" />
                            <p class="product-name">Tênis Nike Air Max Masculino</p>
                            <br>
                            <p class="product-price">R$9999,99
                                <span class="product-installment">10x de R$999,99</span>
                            </p>
                            <button class="btn-products">Quero!</button>
                        </div>

                        <div class="highlight-card">
                            <img src="<?php echo INCLUDE_PATH; ?>/assets/img/tenis.png" />
                            <p class="product-name">Tênis Nike Air Max Masculino</p>
                            <br>
                            <p class="product-price">R$9999,99
                                <span class="product-installment">10x de R$999,99</span>
                            </p>
                            <button class="btn-products">Quero!</button>
                        </div>

                        <div class="highlight-card">
                            <img src="<?php echo INCLUDE_PATH; ?>/assets/img/tenis.png" />
                            <p class="product-name">Tênis Nike Air Max Masculino</p>
                            <br>
                            <p class="product-price">R$9999,99
                                <span class="product-installment">10x de R$999,99</span>
                            </p>
                            <button class="btn-products">Quero!</button>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                <div class="highlight-container">
                        <div class="highlight-card">
                            <img src="<?php echo INCLUDE_PATH; ?>/assets/img/tenis.png" />
                            <p class="product-name">Tênis Nike Air Max Masculino</p>
                            <br>
                            <p class="product-price">R$9999,99
                                <span class="product-installment">10x de R$999,99</span>
                            </p>
                            <button class="btn-products">Quero!</button>
                        </div>

                        <div class="highlight-card">
                            <img src="<?php echo INCLUDE_PATH; ?>/assets/img/tenis.png" />
                            <p class="product-name">Tênis Nike Air Max Masculino</p>
                            <br>
                            <p class="product-price">R$9999,99
                                <span class="product-installment">10x de R$999,99</span>
                            </p>
                            <button class="btn-products">Quero!</button>
                        </div>

                        <div class="highlight-card">
                            <img src="<?php echo INCLUDE_PATH; ?>/assets/img/tenis.png" />
                            <p class="product-name">Tênis Nike Air Max Masculino</p>
                            <br>
                            <p class="product-price">R$9999,99
                                <span class="product-installment">10x de R$999,99</span>
                            </p>
                            <button class="btn-products">Quero!</button>
                        </div>
                    </div>
                </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselHighlights" data-bs-slide="prev">
                <div class="container-arrow container-arrow-prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span></div>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselHighlights" data-bs-slide="next">
                <div class="container-arrow container-arrow-next"><span class="carousel-control-next-icon" aria-hidden="true"></span></div>
                <span class="visually-hidden">Next</span>
            </button>
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
                        // there are no teams registered
                    }
                    else
                    {
                        // defining quantity
                        $num_teams = ceil($screen_width/300);
                        $num_slides = ceil($sql->rowCount()/$num_teams);

                        // echo $num_teams ." opa ". $num_slides ." ";
                        // echo $screen_width ." X ". $screen_height;

                        // functions slides
                        function createFirstSlide($teams)
                        { ?>
                            <div class="carousel-item active">
                                <div class="container-itens"><?php
                                    foreach ($teams as $team)
                                    {
                                        ?><img src="<?php echo INCLUDE_PATH.$team['escudo']; ?>" class="icon-team <?php echo $team['nome']; ?>"><?php
                                    }?>
                                </div>
                            </div><?php
                        }

                        function createOthersSlides($teams)
                        { ?>
                            <div class="carousel-item">
                                <div class="container-itens"><?php
                                foreach ($teams as $team)
                                {
                                    ?><img src="<?php echo INCLUDE_PATH.$team['escudo']; ?>" class="icon-team <?php echo $team['nome']; ?>"><?php
                                }?>
                                </div>
                            </div><?php
                        }

                        // first slide
                        $first_slide = $pdo->prepare("SELECT * FROM tb_times WHERE cod_time<=". $num_teams ."");
                        $first_slide->execute();

                        $teams = $first_slide->fetchAll();
                        createFirstSlide($teams);

                        // others slides
                        $team_break = $team_now = $num_teams;

                        for ($slide_now=2; $slide_now<=$num_slides; $slide_now++){
                            $team_break += $num_teams;

                            $others_slides = $pdo->prepare("SELECT * FROM tb_times WHERE cod_time>". $team_now ." AND cod_time<=". $team_break);
                            $others_slides->execute();
    
                            $teams = $others_slides->fetchAll();
                            createOthersSlides($teams);

                            $team_now += $num_teams;
                        }
                    }
                ?>
            </div>
            
            <!-- buttons bootstrap  -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselTeam" data-bs-slide="prev">
                <div class="container-arrow"><span class="carousel-control-prev-icon" aria-hidden="true"></span></div>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselTeam" data-bs-slide="next">
                <div class="container-arrow"><span class="carousel-control-next-icon" aria-hidden="true"></span></div>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- Quebra de linha dos itens || Utilizar uma logica que modifica a var do loop de acordo com o tamanho da tela, deixando os itens com a quantdade ideal. -->
    </section>
</main>