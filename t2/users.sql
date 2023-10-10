CREATE TABLE users(

	id int PRIMARY KEY AUTO_INCREMENT,
	name text NOT NULL,
	family text NOT NULL,
	email text NOT NULL,
	password int NOT NULL,
	role text NOT NULL,
	age int NOT NULL,
	gender text NULL,
	phone int NOT NULL,
	profile_picture text NOT NULL,
	is_active BOOLEAN NOT NULL,
	last_login int NOT NULL
);

INSERT INTO users (name, family, email, password ,role ,age ,gender ,phone , profile_picture ,is_active ,last_login)
VALUES ('Mahdi', 'Gholami', 'mahdi.gholami.16....@gmail.com', 12345678, 'ADMIN', 19, NULL, 09123456789, 'https://pic....com/image1', TRUE, 140206281013);
