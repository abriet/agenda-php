CREATE TABLE tb_agenda(
	id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(150) NOT NULL,
    tel VARCHAR(50) NOT NULL,
    assunto VARCHAR(200),
    data_agendada DATE NOT NULL,
    hora_agendada TIME NOT NULL
);
