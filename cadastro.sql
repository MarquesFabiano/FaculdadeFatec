CREATE DATABASE QualidadeSono

CREATE TABLE cadastro (
id INT NOT NULL AUTO_INCREMENT,
nome VARCHAR(50) NOT NULL,
data_nascimento DATE NOT NULL,
cpf VARCHAR(11) NOT NULL,
email VARCHAR(80) NOT NULL,
senha VARCHAR(255) NOT NULL,
PRIMARY KEY (id)
);

DELIMITER //
CREATE TRIGGER encrypt_password
BEFORE INSERT ON cadastro
FOR EACH ROW
BEGIN
  SET NEW.senha = SHA2(NEW.senha, 256);
END //
DELIMITER
cadastro