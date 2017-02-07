CREATE TABLE referenceTest
(
	id_reference_test INT NOT NULL IDENTITY(1,1) PRIMARY KEY, --Int holds values -2,147,483,648-2,147,489,647
	test_version VARCHAR(2), --If null, this is the only version
	test_title VARCHAR(255) NOT NULL,
	published CHAR(1) NOT NULL CHECK (published IN('Y','N')),
	date_start DATE, --Store a date only. From January 1, 0001 to December 31, 9999
	time_start TIME, --Store a time only to an accurac of 100 nanoseconds
	time_to_take TIME,
	date_end DATE,
	time_end TIME,
	--fk_id_question INT FOREIGN KEY REFERENCES question(id_question)
)