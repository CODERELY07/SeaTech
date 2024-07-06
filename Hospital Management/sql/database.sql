--Create database
SeaTechHospitalManagement
--Create Table
CREATE TABLE users(
	id INT AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL,
    phone INT(11) NOT NULL,
    position VARCHAR(50) NOT NULL,
    password VARCHAR(100) NOT NULL
);

