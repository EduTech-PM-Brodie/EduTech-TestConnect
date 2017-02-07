CREATE TABLE answer
(
	id_answer INT IDENTITY(1,1) PRIMARY KEY, --Int holds values -2,147,483,648-2,147,489,647
	is_correct CHAR(1) NOT NULL CHECK (is_correct IN('Y','N')),
	answer_string VARCHAR(4000) NOT NULL
)