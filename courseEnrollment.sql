CREATE TABLE courseEnrollment
(
	id_course_enrollment INT IDENTITY(1,1) PRIMARY KEY, --Int holds values -2,147,483,648-2,147,489,647
	--fk_id_user_account INT FOREIGN KEY REFERENCES userAccount(id_user_account)
)