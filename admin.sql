CREATE TABLE admin
(
	id INT PRIMARY KEY AUTO_INCREMENT,
	username VARCHAR(30) UNIQUE,
	passcode VARCHAR(30)
);