<head>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>/assets/css/catalog-style.css">
</head>
<main>
    <section class="catalog">
        <div class="catalog-header">
            <span class="breadcrumb">Masculino / Adultos / Calçados</span>
            <div class="catalog-header-actions">
                <div class="catalog-title">
                    <h1>Calçados Masculinos</h1>
                </div>
                <div class="catalog-actions">
                    <select class="sort-select">
                        <option value="" disabled selected>Ordenar por</option>
                        <option value="relevance">Relevância</option>
                        <option value="price-asc">Menor Preço</option>
                        <option value="price-desc">Maior Preço</option>
                        <option value="discount">Desconto</option>
                    </select>
                </div>
            </div>
        </div>

        <div class="catalog-content">
            <div class="catalog-filters">
                <div class="filter-colors">
                    <div class="accordion" id="accordionColors">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingColors">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseColors" aria-expanded="true" aria-controls="collapseColors">
                                    Filtrar Cores
                                </button>
                            </h2>
                            <div id="collapseColors" class="accordion-collapse collapse show" aria-labelledby="headingColors" data-bs-parent="#accordionColors">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="color-box"></div>
                                                <p>Azul</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="color-box"></div>
                                                <p>Vermelho</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="color-box"></div>
                                                <p>Amarelo</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="color-box"></div>
                                                <p>Verde</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="color-box"></div>
                                                <p>Cinza</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="filter-sizes">
                    <div class="accordion" id="accordionSizes">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSizes">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSizes" aria-expanded="false" aria-controls="collapseSizes">
                                    Filtrar Tamanhos
                                </button>
                            </h2>
                            <div id="collapseSizes" class="accordion-collapse collapse" aria-labelledby="headingSizes" data-bs-parent="#accordionSizes">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            <a href="#">
                                                <div class="size-box"></div>
                                                <p>P</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="size-box"></div>
                                                <p>M</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="size-box"></div>
                                                <p>G</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="size-box"></div>
                                                <p>GG</p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <div class="size-box"></div>
                                                <p>XG</p>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="filter-prices">
                    <div class="accordion" id="accordionPrices">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingPrices">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePrices" aria-expanded="false" aria-controls="collapsePrices">
                                    Filtrar Preços
                                </button>
                            </h2>
                            <div id="collapsePrices" class="accordion-collapse collapse" aria-labelledby="headingPrices" data-bs-parent="#accordionPrices">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            <a href="#">Até R$ 50</a>
                                        </li>
                                        <li>
                                            <a href="#">R$ 51 - R$ 100</a>
                                        </li>
                                        <li>
                                            <a href="#">R$ 101 - R$ 200</a>
                                        </li>
                                        <li>
                                            <a href="#">R$ 201 - R$ 500</a>
                                        </li>
                                        <li>
                                            <a href="#">Acima de R$ 500</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="filter-brand">
                    <div class="accordion" id="accordionBrand">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingBrand">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBrand" aria-expanded="false" aria-controls="collapseBrand">
                                    Filtrar Marcas
                                </button>
                            </h2>
                            <div id="collapseBrand" class="accordion-collapse collapse" aria-labelledby="headingBrand" data-bs-parent="#accordionBrand">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            <label class="checkbox-container">
                                                <input class="custom-checkbox" type="checkbox" id="brandA" name="brand" value="BrandA">
                                                <span class="checkmark"></span>
                                                Marca A
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-container">
                                                <input class="custom-checkbox" type="checkbox" id="brandB" name="brand" value="BrandB">
                                                <span class="checkmark"></span>
                                                Marca B
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-container">
                                                <input class="custom-checkbox" type="checkbox" id="brandC" name="brand" value="BrandC">
                                                <span class="checkmark"></span>
                                                Marca C
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-container">
                                                <input class="custom-checkbox" type="checkbox" id="brandD" name="brand" value="BrandD">
                                                <span class="checkmark"></span>
                                                Marca D
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-container">
                                                <input class="custom-checkbox" type="checkbox" id="brandE" name="brand" value="BrandE">
                                                <span class="checkmark"></span>
                                                Marca E
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="filter-categories">
                    <div class="accordion" id="accordionCategories">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingCategories">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCategories" aria-expanded="false" aria-controls="collapseCategories">
                                    Filtrar Categorias
                                </button>
                            </h2>
                            <div id="collapseCategories" class="accordion-collapse collapse" aria-labelledby="headingCategories" data-bs-parent="#accordionCategories">
                                <div class="accordion-body">
                                    <ul>
                                        <li>
                                            <label class="checkbox-container">
                                                <input class="custom-checkbox" type="checkbox" id="categoryA" name="category" value="CategoryA">
                                                <span class="checkmark"></span>
                                                Categoria A
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-container">
                                                <input class="custom-checkbox" type="checkbox" id="categoryB" name="category" value="CategoryB">
                                                <span class="checkmark"></span>
                                                Categoria B
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-container">
                                                <input class="custom-checkbox" type="checkbox" id="categoryC" name="category" value="CategoryC">
                                                <span class="checkmark"></span>
                                                Categoria C
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-container">
                                                <input class="custom-checkbox" type="checkbox" id="categoryD" name="category" value="CategoryD">
                                                <span class="checkmark"></span>
                                                Categoria D
                                            </label>
                                        </li>
                                        <li>
                                            <label class="checkbox-container">
                                                <input class="custom-checkbox" type="checkbox" id="categoryE" name="category" value="CategoryE">
                                                <span class="checkmark"></span>
                                                Categoria E
                                            </label>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="catalog-products-grid">
                <div class="product-card">
                    <img src="<?php echo INCLUDE_PATH; ?>/assets/img/tenis.png" />
                    <div>
                        <p class="product-name">Tênis Nike Air Max Masculino</p>
                        <br>
                        <p class="product-price">R$9999,99
                            <span class="product-installment">10x de R$999,99</span>
                        </p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="<?php echo INCLUDE_PATH; ?>/assets/img/tenis.png" />
                    <div>
                        <p class="product-name">Tênis Nike Air Max Masculino</p>
                        <br>
                        <p class="product-price">R$9999,99
                            <span class="product-installment">10x de R$999,99</span>
                        </p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="<?php echo INCLUDE_PATH; ?>/assets/img/tenis.png" />
                    <div>
                        <p class="product-name">Tênis Nike Air Max Masculino</p>
                        <br>
                        <p class="product-price">R$9999,99
                            <span class="product-installment">10x de R$999,99</span>
                        </p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="<?php echo INCLUDE_PATH; ?>/assets/img/tenis.png" />
                    <div>
                        <p class="product-name">Tênis Nike Air Max Masculino</p>
                        <br>
                        <p class="product-price">R$9999,99
                            <span class="product-installment">10x de R$999,99</span>
                        </p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="<?php echo INCLUDE_PATH; ?>/assets/img/tenis.png" />
                    <div>
                        <p class="product-name">Tênis Nike Air Max Masculino</p>
                        <br>
                        <p class="product-price">R$9999,99
                            <span class="product-installment">10x de R$999,99</span>
                        </p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="<?php echo INCLUDE_PATH; ?>/assets/img/tenis.png" />
                    <div>
                        <p class="product-name">Tênis Nike Air Max Masculino</p>
                        <br>
                        <p class="product-price">R$9999,99
                            <span class="product-installment">10x de R$999,99</span>
                        </p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="<?php echo INCLUDE_PATH; ?>/assets/img/tenis.png" />
                    <div>
                        <p class="product-name">Tênis Nike Air Max Masculino</p>
                        <br>
                        <p class="product-price">R$9999,99
                            <span class="product-installment">10x de R$999,99</span>
                        </p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="<?php echo INCLUDE_PATH; ?>/assets/img/tenis.png" />
                    <div>
                        <p class="product-name">Tênis Nike Air Max Masculino</p>
                        <br>
                        <p class="product-price">R$9999,99
                            <span class="product-installment">10x de R$999,99</span>
                        </p>
                    </div>
                </div>
                <div class="product-card">
                    <img src="<?php echo INCLUDE_PATH; ?>/assets/img/tenis.png" />
                    <div>
                        <p class="product-name">Tênis Nike Air Max Masculino</p>
                        <br>
                        <p class="product-price">R$9999,99
                            <span class="product-installment">10x de R$999,99</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>