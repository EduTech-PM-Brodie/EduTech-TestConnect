CREATE TABLE passwordReset
(
	id_password_reset INT NOT NULL IDENTITY(1,1) PRIMARY KEY, --Int holds values -2,147,483,648-2,147,489,647
	answer VARCHAR(255) NOT NULL,
	--fk_id_password_reset_questions INT FOREIGN KEY REFERENCES passwordResetQuestions(id_password_reset_questions)
)