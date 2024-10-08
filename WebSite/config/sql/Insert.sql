use nalin_bd;

-- Inserindo dados de teste
INSERT INTO produtos (marca, tipo, nome_produto, genero, preco, quantidade, limite_parcelas, imagem) VALUES
('Nike', 'Tênis', 'Air Max Plus', 'Masculino', 1299.99, 10, 10, '/assets/img/tenis.png'),
('Adidas', 'Tênis', 'Sla qual', 'Feminino', 1599.99, 10, 10, '/assets/img/tenis.png'),
('Nike', 'Tênis', 'Air Max Plus', 'Masculino', 1299.99, 10, 10, '/assets/img/tenis.png'),
('Adidas', 'Tênis', 'Sla qual', 'Feminino', 1599.99, 10, 10, '/assets/img/tenis.png'),
('Nike', 'Tênis', 'Air Max Plus', 'Masculino', 1299.99, 10, 10, '/assets/img/tenis.png'),
('Adidas', 'Tênis', 'Sla qual', 'Feminino', 1599.99, 10, 10, '/assets/img/tenis.png');

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

-- Inserindo dados de teste na tabela de tb_times
INSERT INTO tb_times(nome, escudo) VALUES
('SaoPaulo', '/assets/img/teams/spfc.png'),
('Celtics', '/assets/img/teams/celtics.png'),
('Corinthans', '/assets/img/teams/sccp.png'),
('Santos', '/assets/img/teams/sfc.png');

-- Inserindo dados de teste na adm
INSERT adm(nome, email, telefone) VALUES('NalinSports adm', 'sla@gmail.com', '11 999999999');