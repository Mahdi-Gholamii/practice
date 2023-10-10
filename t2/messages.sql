CREATE TABLE messages(
	id int PRIMARY KEY AUTO_INCREMENT,
	user_id int NOT NULL,
	send_at int NOT NULL,
	content text NOT NULL,
	updated_at int NOT NULL,
	sender_id int NOT NULL,
	is_deleted BOOLEAN NOT NULL,
	status text NOT NULL,
	/* FOREIGN KEY (user_id) REFERENCES users(id) */
);

INSERT INTO messages (user_id, send_at, content, updated_at, sender_id, is_deleted, status)
VALUES (252, 140205251235, 'hi iam from Iran', 140205271625, 1657, FALSE ,'seen');
