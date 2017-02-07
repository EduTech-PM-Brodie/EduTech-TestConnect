CREATE TABLE passwordResetQuestions
(
	id_password_reset_questions INT NOT NULL IDENTITY(1,1) PRIMARY KEY, --Int holds values -2,147,483,648-2,147,489,647
	question_number TINYINT NOT NULL CHECK (question_number IN('1','2','3','4','5')), --TinyInt holds values 0-255
	question_string VARCHAR(255) NOT NULL
)