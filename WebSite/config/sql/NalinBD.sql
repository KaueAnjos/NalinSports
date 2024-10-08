# drop database nalin_bd;

CREATE DATABASE IF NOT EXISTS nalin_bd;
USE nalin_bd;

-- Tabela de produtos
CREATE TABLE IF NOT EXISTS produtos (
    cod_prod INT PRIMARY KEY AUTO_INCREMENT,
    marca VARCHAR(50),
    tipo ENUM('Tênis', 'Camisas', 'Conjunto'),
    nome_produto VARCHAR(50),
    genero ENUM('Masculino', 'Feminino'),
    preco DECIMAL(10, 2),
    quantidade INT NOT NULL,
    acessos INT,
    limite_parcelas INT NOT NULL, # PRECISA?
    imagem VARCHAR(255) NOT NULL
);

-- Tabela de tamanhos
CREATE TABLE IF NOT EXISTS tamanhos (
    cod_tamanho INT PRIMARY KEY AUTO_INCREMENT,
    tamanho INT
);

-- Tabela para relacionar produtos e tamanhos disponíveis
CREATE TABLE IF NOT EXISTS produto_tamanhos (
	cod_prodtam INT PRIMARY KEY AUTO_INCREMENT,
    cod_prod INT,
    cod_tamanho INT,
    disponivel BOOLEAN,
    FOREIGN KEY (cod_prod) REFERENCES produtos(cod_prod),
    FOREIGN KEY (cod_tamanho) REFERENCES tamanhos(cod_tamanho)
);

-- Criação da tabela de cores
CREATE TABLE IF NOT EXISTS cores (
    cod_cor INT PRIMARY KEY AUTO_INCREMENT,
    nome_cor VARCHAR(50) NOT NULL,
    imagem VARCHAR(255) -- Adicione uma coluna para armazenar o caminho da imagem da cor, se necessário
);

-- Ajuste da tabela de produtos_cores
CREATE TABLE IF NOT EXISTS produtos_cores (
	cod_proCor INT PRIMARY KEY AUTO_INCREMENT,
    cod_prod INT,
    cod_cor INT,
    disponivel BOOLEAN,
    FOREIGN KEY (cod_prod) REFERENCES produtos(cod_prod),
    FOREIGN KEY (cod_cor) REFERENCES cores(cod_cor)
);

-- Tabela de categorias
CREATE TABLE IF NOT EXISTS categorias (
    cod_categoria INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50)
);

-- Tabela para relacionar produtos e categorias
CREATE TABLE IF NOT EXISTS produto_categoria (
	cod_proCat INT PRIMARY KEY AUTO_INCREMENT,
    cod_prod INT,
    cod_categoria INT,
    FOREIGN KEY (cod_prod) REFERENCES produtos(cod_prod),
    FOREIGN KEY (cod_categoria) REFERENCES categorias(cod_categoria)
);

-- Tabela de carrinho
CREATE TABLE IF NOT EXISTS carrinho (
    cod_carrinho INT PRIMARY KEY AUTO_INCREMENT,
    cod_prod INT,
    quantidade INT NOT NULL,
    FOREIGN KEY (cod_prod) REFERENCES produtos(cod_prod)
);

-- Tabela de favoritos
CREATE TABLE IF NOT EXISTS favoritos (
    cod_favorito INT PRIMARY KEY AUTO_INCREMENT,
    cod_prod INT,
    FOREIGN KEY (cod_prod) REFERENCES produtos(cod_prod)
);

-- Tabela de administração
CREATE TABLE IF NOT EXISTS adm (
    cod_adm INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(50),
    email VARCHAR(50),
    telefone VARCHAR(50)
);

-- Tabela de destaques (exemplo opcional, se precisar)
CREATE TABLE IF NOT EXISTS destaque (
    cod_prod INT PRIMARY KEY,
    qtdn_acessos INT NOT NULL,
    FOREIGN KEY (cod_prod) REFERENCES produtos(cod_prod)
);

-- teste tabela times
CREATE TABLE IF NOT EXISTS tb_times (
	cod_time INT PRIMARY KEY AUTO_INCREMENT,
	nome varchar(100),
	escudo varchar(100)
);

-- Ajuste da tabela de produtos_times
CREATE TABLE IF NOT EXISTS produtos_times (
	cod_proCor INT PRIMARY KEY AUTO_INCREMENT,
    cod_prod INT,
    cod_time INT,
    disponivel BOOLEAN,
    FOREIGN KEY (cod_prod) REFERENCES produtos(cod_prod),
    FOREIGN KEY (cod_time) REFERENCES tb_times(cod_time)
);