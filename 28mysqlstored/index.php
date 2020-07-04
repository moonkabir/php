<!-- mysql stored procedure by a function -->
DELIMITER $$
CREATE PROCEDURE get_all_students()
BEGIN
SELECT * FROM students ORDER BY class,section,roll;
END $$
DELIMITER ;
<!-- call function -->
CALL get_all_students()
<!-- parameter function -->
DELIMITER $$
CREATE PROCEDURE get_all_students_by_class(IN C INT)
BEGIN
	SELECT * FROM students WHERE class=C  ORDER BY section,roll;
END $$
DELIMITER ;
<!-- call function -->
CALL get_all_students(3)
<!-- all procudure status check -->
SHOW PROCEDURE status;
<!-- delete er jonno procedure  -->
drop procedure get_all_students_by_class()
<!-- variable joma kore result output hisabe ber kore ane mysql diye-->
<!-- variable joma kore result output hisabe ber kore ane php diye -->