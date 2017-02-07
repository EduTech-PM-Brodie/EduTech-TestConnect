CREATE TABLE question
(
	id_question INT NOT NULL IDENTITY(1,1) PRIMARY KEY, --Int holds values -2,147,483,648-2,147,489,647
	question_type VARCHAR(2) NOT NULL CHECK (question_type IN('MTF','TF','MC','MA','SA','E')),
	question_string VARCHAR(255),
	student_answer VARCHAR(4000),
	point_value DECIMAL(5,3) NOT NULL,
	point_value_earned DECIMAL(5,3),
	is_gradable CHAR(1) NOT NULL CHECK (is_gradable IN('Y','N')),
	is_graded CHAR(1) NOT NULL CHECK (is_graded IN('Y','N')),
	is_review CHAR(1) NOT NULL CHECK (is_review IN('Y','N')),
	--fk_id_answer_id INT FOREIGN KEY REFERENCES answer(id_answer)
)