DROP DATABASE IF EXISTS nalin_bd;
CREATE DATABASE nalin_bd;
USE nalin_bd;

-- Tabela de produtos
CREATE TABLE produtos (
    cod_prod INT PRIMARY KEY AUTO_INCREMENT,
    marca VARCHAR(50),
    tipo ENUM('Tênis', 'Camisas', 'Conjunto'),
    nome_produto VARCHAR(50),
    genero ENUM('Masculino', 'Feminino'),
    preco DECIMAL(10, 2),
    quantidade INT NOT NULL
);

-- Tabela de tamanhos
CREATE TABLE tamanhos (
    cod_tamanho INT PRIMARY KEY AUTO_INCREMENT,
    tamanho INT
);

-- Tabela para relacionar produtos e tamanhos disponíveis
CREATE TABLE produto_tamanhos (
    cod_prod INT,
    cod_tamanho INT,
    disponivel BOOLEAN,
    PRIMARY KEY (cod_prod, cod_tamanho),
    FOREIGN KEY (cod_prod) REFERENCES produtos(cod_prod),
    FOREIGN KEY (cod_tamanho) REFERENCES tamanhos(cod_tamanho)
);

-- Inserindo dados de teste
INSERT INTO produtos (marca, tipo, nome_produto, genero, preco, quantidade) VALUES
('Nike', 'Tênis', 'Air Max Plus', 'Masculino', 1299.99, 10);

INSERT INTO tamanhos (tamanho) VALUES (36), (37), (38), (39), (40), (41), (42), (43), (44), (45);

-- Relacionando produto com tamanhos disponíveis
INSERT INTO produto_tamanhos (cod_prod, cod_tamanho, disponivel) VALUES
(1, 1, TRUE),  -- Tamanho 36 disponível
(1, 2, TRUE), -- Tamanho 37 indisponível
(1, 3, TRUE),  -- Tamanho 38 disponível
(1, 4, TRUE),  -- Tamanho 39 disponível
(1, 5, FALSE), -- Tamanho 40 indisponível
(1, 6, TRUE),  -- Tamanho 41 disponível
(1, 7, TRUE),  -- Tamanho 42 disponível
(1, 8, TRUE),  -- Tamanho 43 disponível
(1, 9, FALSE), -- Tamanho 44 indisponível
(1, 10, TRUE); -- Tamanho 45 disponível


-- Criação da tabela de cores
CREATE TABLE cores (
    cod_cor INT PRIMARY KEY AUTO_INCREMENT,
    nome_cor VARCHAR(50) NOT NULL,
    imagem VARCHAR(255) -- Adicione uma coluna para armazenar o caminho da imagem da cor, se necessário
);

-- Ajuste da tabela de produtos_cores
CREATE TABLE produtos_cores (
    cod_prod INT,
    cod_cor INT,
    disponivel BOOLEAN,
    PRIMARY KEY (cod_prod, cod_cor),
    FOREIGN KEY (cod_prod) REFERENCES produtos(cod_prod),
    FOREIGN KEY (cod_cor) REFERENCES cores(cod_cor)
);

-- Inserindo dados de teste na tabela de cores
INSERT INTO cores (nome_cor, imagem) VALUES
('Preto', '/assets/img/colors/black.png'),
('Branco', '/assets/img/colors/white.png'),
('Azul', '/assets/img/colors/blue.png'),
('Vermelho', '/assets/img/colors/red.png');

-- Associando cores aos produtos
INSERT INTO produtos_cores (cod_prod, cod_cor, disponivel) VALUES
(1, 1, TRUE), -- Preto disponível
(1, 2, TRUE), -- Branco disponível
(1, 3, FALSE), -- Azul indisponível
(1, 4, TRUE); -- Vermelho disponível

-- Tabela de categorias
CREATE TABLE categorias (
    cod_categoria INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50)
);

-- Tabela para relacionar produtos e categorias
CREATE TABLE produto_categoria (
    cod_prod INT,
    cod_categoria INT,
    PRIMARY KEY (cod_prod, cod_categoria),
    FOREIGN KEY (cod_prod) REFERENCES produtos(cod_prod),
    FOREIGN KEY (cod_categoria) REFERENCES categorias(cod_categoria)
);

-- Tabela de carrinho
CREATE TABLE carrinho (
    cod_carrinho INT PRIMARY KEY AUTO_INCREMENT,
    cod_prod INT,
    quantidade INT NOT NULL,
    FOREIGN KEY (cod_prod) REFERENCES produtos(cod_prod)
);

-- Tabela de favoritos
CREATE TABLE favoritos (
    cod_favorito INT PRIMARY KEY AUTO_INCREMENT,
    cod_prod INT,
    FOREIGN KEY (cod_prod) REFERENCES produtos(cod_prod)
);

-- Tabela de administração
CREATE TABLE adm (
    cod_adm INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    email VARCHAR(50),
    senha VARCHAR(255)
);

INSERT INTO adm (nome, email, senha) VALUES
('Administrador', 'nalin@gmail.com', '$2y$10$XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX'); -- Coloque o hash gerado aqui


