CREATE TABLE usuarios (
    id INT NOT NULL AUTO_INCREMENT,
    nome VARCHAR(130) NOT NULL,
    cpf VARCHAR(11) NOT NULL,
    email VARCHAR(130) NOT NULL,
    endereco VARCHAR(130) NOT NULL,
    cidade VARCHAR(130) NOT NULL,
    estado VARCHAR(130) NOT NULL,
    senha VARCHAR(130) NOT NULL,
    PRIMARY KEY (ID);

)