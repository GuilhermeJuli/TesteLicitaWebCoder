
CREATE DATABASE IF NOT EXISTS TestLicitaNetCoder;
USE TestLicitaNetCoder;


CREATE TABLE IF NOT EXISTS cities (
    cod_cidade INT AUTO_INCREMENT PRIMARY KEY,
    nome_cidade VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS brands (
    cod_marca INT AUTO_INCREMENT PRIMARY KEY,
    nome_marca VARCHAR(255) NOT NULL,
    fabricante VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE IF NOT EXISTS products (
    cod_produto INT AUTO_INCREMENT PRIMARY KEY,
    nome_produto VARCHAR(255) NOT NULL,
    valor_produto FLOAT NOT NULL,
    marca_produto INT,
    estoque FLOAT NOT NULL,
    cidade_id INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    FOREIGN KEY (marca_produto) REFERENCES brands(cod_marca) ON DELETE CASCADE,
    FOREIGN KEY (cidade_id) REFERENCES cities(cod_cidade)
);


INSERT INTO cities (nome_cidade) VALUES
('Cidade A'),
('Cidade B'),
('Cidade C'),
('Cidade D'),
('Cidade E');

INSERT INTO brands (nome_marca, fabricante) VALUES
('Marca A', 'Fabricante A'),
('Marca B', 'Fabricante B'),
('Marca C', 'Fabricante C');


INSERT INTO products (nome_produto, valor_produto, marca_produto, estoque, cidade_id) VALUES
('Produto 1', 10.00, 1, 100, 1),
('Produto 2', 20.00, 2, 200, 2),
('Produto 3', 30.00, 3, 300, 3),
('Produto 4', 40.00, 1, 400, 4),
('Produto 5', 50.00, 2, 500, 5);
