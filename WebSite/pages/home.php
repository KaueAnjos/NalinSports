<main>
    <section class="carousel">
        <div id="maincarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#maincarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#maincarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#maincarousel" data-bs-slide-to="2" aria-label="Slide 3">
                </button>
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
        <!-- <div class="highlights-cards-carousel">
            <div id="carouselExampleControls" class="carousel slide highlights-cards-container" data-bs-ride="carousel">
                <div class="carousel-inner">


                    <div class="carousel-item active">
                        <div class="highlights-cards-container">
                            <a href="#">
                                <div id="debug" class="highlights-cards">
                                    <img src="assets/img/tenis.png">
                                    <p>TENIS NIKE AIR MAX MASCULINO</p>
                                    <br>
                                    <p>R$9999,99<br>
                                    <span class="highlight-p-card">10 x de R$999,99</span></p>
                                    <button class="button-cards">QUERO!</button>
                                </div>
                            </a>
                            <a href="#">
                                <div class="highlights-cards">
                                    <img src="assets/img/tenis.png">
                                    <p>TENIS NIKE AIR MAX MASCULINO</p>
                                    <br>
                                    <p>R$9999,99<br>
                                    <span class="highlight-p-card">10 x de R$999,99</span></p>
                                    <button class="button-cards">QUERO!</button>
                                </div>
                            </a>
                            <a href="#">
                                <div class="highlights-cards">
                                    <img src="assets/img/tenis.png">
                                    <p>TENIS NIKE AIR MAX MASCULINO</p>
                                    <br>
                                    <p>R$9999,99<br>
                                    <span class="highlight-p-card">10 x de R$999,99</span></p>
                                    <button class="button-cards">QUERO!</button>
                                </div>
                            </a>
                        </div>
                    </div> -->
        <!-- Segundo Slide -->
        <!-- <div class="carousel-item">
                        <div class="highlights-cards-container">
                            <a href="#">
                                <div class="highlights-cards">
                                    <img src="assets/img/tenis.png">
                                    <p>TENIS NIKE AIR MAX MASCULINO</p>
                                    <br>
                                    <p>R$9999,99<br>
                                    <span class="highlight-p-card">10 x de R$999,99</span></p>
                                    <button class="button-cards">QUERO!</button>
                                </div>
                            </a>
                            <a href="#">
                                <div class="highlights-cards">
                                    <img src="assets/img/tenis.png">
                                    <p>TENIS NIKE AIR MAX MASCULINO</p>
                                    <br>
                                    <p>R$9999,99<br>
                                    <span class="highlight-p-card">10 x de R$999,99</span></p>
                                    <button class="button-cards">QUERO!</button>
                                </div>
                            </a>
                            <a href="#">
                                <div id = "debug" class="highlights-cards">
                                    <img src="assets/img/tenis.png">
                                    <p>TENIS NIKE AIR MAX MASCULINO</p>
                                    <br>
                                    <p>R$9999,99<br>
                                    <span class="highlight-p-card">10 x de R$999,99</span></p>
                                    <button class="button-cards">QUERO!</button>
                                </div>
                            </a>
                        </div>
                    </div> 

                   
                </div>
                <button class="carousel-control-prev" style= "color:red" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <i class="fas fa-chevron-left" style="margin-right: 55%"></i>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <i class="fas fa-chevron-right" style="margin-right: -55%"></i>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div> -->

 

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
                <div class="carousel-item active">
                    <div class="container-itens">
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sccp.png" />
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sfc.png" />
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sccp.png" />
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sfc.png" />
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sccp.png" />
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sfc.png" />
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sccp.png" />
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-itens">
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sfc.png" />
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sccp.png" />
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sfc.png" />
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sccp.png" />
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sfc.png" />
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sccp.png" />
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sfc.png" />
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-itens">
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sccp.png" />
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sfc.png" />
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sccp.png" />
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sfc.png" />
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sccp.png" />
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sfc.png" />
                        <img src="<?php echo INCLUDE_PATH; ?>/assets/img/img-team/sccp.png" />
                    </div>
                </div>
            </div>

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