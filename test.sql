CREATE TABLE test
(
	id_test INT NOT NULL IDENTITY(1,1) PRIMARY KEY, --Int holds values -2,147,483,648-2,147,489,647
	points_earned TINYINT, --TinyInt holds values 0-255
	points_total TINYINT,
	taken CHAR(1) NOT NULL CHECK (taken IN('Y','N')),
	graded CHAR(1) NOT NULL CHECK (graded IN('Y','N')),
	grade DECIMAL(6,3), --EX. 100.000
	grade_viewed CHAR(1) NOT NULL CHECK (grade_viewed IN('Y','N')),
	is_available CHAR(1) NOT NULL CHECK (is_available IN('Y','N')),
	--fk_id_reference_test INT FOREIGN KEY REFERENCES referenceTest(id_reference_test)
)