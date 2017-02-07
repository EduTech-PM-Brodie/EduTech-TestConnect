CREATE TABLE course
(
	id_course INT NOT NULL IDENTITY(1,1) PRIMARY KEY, --Int holds values -2,147,483,648-2,147,489,647
	section TINYINT, --If null, then it is the only section
	course_num TINYINT NOT NULL, --TinyInt holds values 0-255
	course_title VARCHAR(255) NOT NULL,
	--fk_id_reference_test INT REFERENCES referenceTest(id_reference_test),
	--fk_id_course_enrollment INT REFERENCES courseEnrollment(id_course_enrollment)
)