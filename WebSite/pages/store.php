<?php
require_once __DIR__ . '/../config/connection.php';
require_once __DIR__ . '/../config/config.php';
?>

<head>
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>/assets/css/store-style.css">
</head>

<main>
    <?php
    // Definir o código do produto (certifique-se de que $cod_prod é definido corretamente)
    $cod_prod = isset($_GET['cod_prod']) ? intval($_GET['cod_prod']) : 1;

    // Consultar dados do produto
    $sql_produto = "
    SELECT marca, tipo, nome_produto, genero, preco, cod_prod
    FROM produtos
    WHERE cod_prod = $cod_prod
";

    $result_produto = $conn->query($sql_produto);

    // Verificação se o produto foi encontrado
    if ($result_produto->num_rows > 0) {
        $produto = $result_produto->fetch_assoc();
        $marca = htmlspecialchars($produto['marca']);
        $tipo = htmlspecialchars($produto['tipo']);
        $nome_produto = htmlspecialchars($produto['nome_produto']);
        $genero = htmlspecialchars($produto['genero']);
        $preco = number_format($produto['preco'], 2, ',', '.');
        $codigo = htmlspecialchars($produto['cod_prod']);
        $imagem_principal = INCLUDE_PATH . '/assets/img/products/tn1.png';
    } else {
        echo "Produto não encontrado.";
        exit;
    }
    ?>
    <section class="product-header">
        <div class="product-display">
            <div class="product-exposition">
                <!-- Carrossel Principal -->
                <div id="productCarousel" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <!-- Adicione suas imagens principais aqui -->
                        <div class="carousel-item active">
                            <img src="<?php echo INCLUDE_PATH; ?>/assets/img/products/tn1.png" class="d-block" alt="Imagem 1">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo INCLUDE_PATH; ?>/assets/img/products/tn2.png" class="d-block" alt="Imagem 2">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo INCLUDE_PATH; ?>/assets/img/products/tn3.png" class="d-block" alt="Imagem 3">
                        </div>
                        <div class="carousel-item">
                            <img src="<?php echo INCLUDE_PATH; ?>/assets/img/products/tn4.png" class="d-block" alt="Imagem 4">
                        </div>
                    </div>
                    <!-- Indicadores de Miniaturas -->
                    <div class="thumbnail-gallery">
                        <div><img class="thumbnail" src="<?php echo INCLUDE_PATH; ?>/assets/img/products/tn1.png" data-bs-target="#productCarousel" data-bs-slide-to="0" alt="Imagem 1"></div>
                        <div><img class="thumbnail" src="<?php echo INCLUDE_PATH; ?>/assets/img/products/tn2.png" data-bs-target="#productCarousel" data-bs-slide-to="1" alt="Imagem 2"></div>
                        <div><img class="thumbnail" src="<?php echo INCLUDE_PATH; ?>/assets/img/products/tn3.png" data-bs-target="#productCarousel" data-bs-slide-to="2" alt="Imagem 3"></div>
                        <div><img class="thumbnail" src="<?php echo INCLUDE_PATH; ?>/assets/img/products/tn4.png" data-bs-target="#productCarousel" data-bs-slide-to="3" alt="Imagem 4"></div>
                    </div>
                </div>
            </div>
        </div>
        <aside class="product-details">

            <!-- Product header -->
            <div class="product-header">
                <h1 class="brand-name"><?php echo $marca; ?></h1>
                <h1 class="product-title"><?php echo "$tipo $nome_produto $genero"; ?></h1>
                <p class="product-code">Código do produto: <?php echo $codigo; ?></p>
            </div>

            <!-- Product price -->
            <div class="product-pricing">
                <h2 class="product-price">R$ <?php echo $preco; ?></h2>
                <h2 class="product-installments">10x de R$ <?php echo number_format($produto['preco'] / 10, 2, ',', '.'); ?></h2>
            </div>

            <!-- Size options -->
            <?php
            $sql_tamanhos = "
            SELECT t.cod_tamanho, t.tamanho, IFNULL(pt.disponivel, FALSE) AS disponivel
            FROM tamanhos t
            LEFT JOIN produto_tamanhos pt ON t.cod_tamanho = pt.cod_tamanho AND pt.cod_prod = $cod_prod
";

            $result_tamanhos = $conn->query($sql_tamanhos);

            // Exibição dos tamanhos
            if ($result_tamanhos->num_rows > 0) {
                echo '<div class="size-options">';
                echo '<p class="size-options-title">Tamanho:</p>';
                echo '<div class="product-size">';

                while ($row = $result_tamanhos->fetch_assoc()) {
                    $tamanho = $row['tamanho'];
                    $disponivel = $row['disponivel'];

                    if ($disponivel) {
                        echo '<input type="radio" id="size-' . $tamanho . '" name="size" class="size-input" />';
                        echo '<label for="size-' . $tamanho . '" class="size">' . $tamanho . '</label>';
                    } else {
                        echo '<label class="size unavailable">' . $tamanho . ' X</label>';
                    }
                }

                echo '</div>';
                echo '</div>';
            } else {
                echo "Nenhum tamanho encontrado para este produto.";
            }

            // Consultar e exibir cores
            $sql_cores = "
            SELECT c.cod_cor, c.nome_cor, IFNULL(pc.disponivel, FALSE) AS disponivel, c.imagem
            FROM cores c
            LEFT JOIN produtos_cores pc ON c.cod_cor = pc.cod_cor AND pc.cod_prod = $cod_prod
";

            $result_cores = $conn->query($sql_cores);

            // Exibição das cores
            if ($result_cores->num_rows > 0) {
                echo '<div class="color-options">';
                echo '<p class="color-options-title">Outras opções de cores:</p>';
                echo '<div class="other-colors">';

                while ($row = $result_cores->fetch_assoc()) {
                    $cor = $row['nome_cor'];
                    $disponivel = $row['disponivel'];
                    $imagem = $row['imagem'];

                    if ($disponivel) {
                        echo '<div class="product-color" style="background-image: url(' . $imagem . ');" title="' . $cor . '"></div>';
                    } else {
                        echo '<div class="product-color unavailable" title="' . $cor . ' X"></div>';
                    }
                }

                echo '</div>';
                echo '</div>';
            } else {
                echo "Nenhuma cor encontrada para este produto.";
            }

            // Fecha a conexão com o banco de dados
            $conn->close();
            ?>

            <div class="buy-buttons">
                <button>Comprar agora</button>
                <button>Adicionar ao Carrinho</button>
            </div>
        </aside>

    </section>
</main>