CREATE TABLE userAccount
(
	id_user_account INT NOT NULL IDENTITY(1,1) PRIMARY KEY, --Int holds values -2,147,483,648-2,147,489,647
	user_login_name VARCHAR(255) NOT NULL,
	user_password VARCHAR(50) NOT NULL,
	user_account_type CHAR(1) NOT NULL CHECK (user_account_type IN('A','S','P')),
	email VARCHAR(255) NOT NULL,
	phone_num TINYINT NOT NULL, --TinyInt holds values 0-255
	user_address VARCHAR(255) NOT NULL,
	gender VARCHAR(6) NOT NULL CHECK (gender IN('MALE','FEMALE','MAN','WOMAN')),
	f_name VARCHAR(255) NOT NULL,
	l_name VARCHAR(255) NOT NULL,
	classification VARCHAR(10), --STUDENTS ONLY
	--fk_id_course INT FOREIGN KEY REFERENCES course(id_course),
	--fk_id_password_reset INT FOREIGN KEY REFERENCES passwordReset(id_password_reset),
	--fk_id_test INT FOREIGN KEY REFERENCES test(id_test)
)