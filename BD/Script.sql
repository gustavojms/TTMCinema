CREATE TABLE usuario (
id_usuario INT NOT NULL AUTO_INCREMENT,
nome varchar(45) NOT NULL,
nick varchar(10) NOT NULL,
email varchar(100) NOT NULL,
senha varchar(32) NOT NULL,
PRIMARY KEY (id_usuario)
);

CREATE TABLE obra (
id_obra INT NOT NULL AUTO_INCREMENT,
titulo varchar(45) NOT NULL,
ano_lancamento YEAR(4) NOT NULL,
classificacao_etaria INT NOT NULL,
tipo VARCHAR(5) NOT NULL,
nacionalidade VARCHAR(3) NOT NULL,
audio VARCHAR(5) NOT NULL,
legenda VARCHAR(5) NOT NULL,
id_usuario_obra INT NOT NULL,
PRIMARY KEY (id_obra),
FOREIGN KEY (id_usuario_obra) REFERENCES usuario (id_usuario)
);

CREATE TABLE comentario (
id_comentario INT NOT NULL AUTO_INCREMENT,
comentario VARCHAR(255) NOT NULL,
dataAtual DATETIME NOT NULL,
id_obra_cmt INT NOT NULL,
id_user_cmt INT NOT NULL,
PRIMARY KEY(id_comentario),
CONSTRAINT fk_obra_cmt FOREIGN KEY (id_obra_cmt) REFERENCES obra (id_obra),
CONSTRAINT fk_user_cmt FOREIGN KEY (id_user_cmt) REFERENCES usuario (id_usuario)
);

CREATE TABLE favorito (
id_user_fav INT NOT NULL,
id_obra_fav INT NOT NULL,
PRIMARY KEY (id_user_fav, id_obra_fav),
FOREIGN KEY (id_user_fav) REFERENCES usuario (id_usuario),
FOREIGN KEY (id_obra_fav) REFERENCES obra (id_obra)
);