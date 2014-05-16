CREATE TABLE user(
	id INTEGER AUTO_INCREMENT PRIMARY KEY,
	nickname VARCHAR(10) NOT NULL,
	email VARCHAR(200) NOT NULL,
	password VARCHAR(40) NOT NULL,
	picture VARCHAR(200)
);

CREATE TABLE message(
	id INTEGER AUTO_INCREMENT PRIMARY KEY,
	id_user_request INTEGER NOT NULL,
	id_user_response INTEGER NOT NULL,
	message TEXT NOT NULL,
	created_at TIMESTAMP NOT NULL,
	FOREIGN KEY(id_user_request) REFERENCES user(id),
	FOREIGN KEY(id_user_response) REFERENCES user(id)
);

INSERT INTO user(nickname, email, password, picture) values('waldisney', 'wal@teste.com','123456','http://www.sagradasmissoes.com.br/wp-content/uploads/2011/08/pato.jpg');
INSERT INTO user(nickname, email, password, picture) values('joana', 'jojo@teste.com','123456','http://www.sagradasmissoes.com.br/wp-content/uploads/2011/08/pato.jpg');
INSERT INTO user(nickname, email, password, picture) values('ana', 'ana@teste.com','123456','http://www.sagradasmissoes.com.br/wp-content/uploads/2011/08/pato.jpg');