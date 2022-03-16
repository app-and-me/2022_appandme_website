mysql> create table submit(
    -> name varchar(30),
    -> student_id int(20),
    -> five varchar(20),
    -> motive varchar(255),
    -> phone varchar(30),
    -> primary key(student_id)
    -> );
Query OK, 0 rows affected, 1 warning (0.08 sec)

mysql> desc submit;
+------------+--------------+------+-----+---------+-------+
| Field      | Type         | Null | Key | Default | Extra |
+------------+--------------+------+-----+---------+-------+
| name       | varchar(30)  | YES  |     | NULL    |       |
| student_id | int          | NO   | PRI | NULL    |       |
| five       | varchar(20)  | YES  |     | NULL    |       |
| motive     | varchar(255) | YES  |     | NULL    |       |
| phone      | varchar(30)  | YES  |     | NULL    |       |
+------------+--------------+------+-----+---------+-------+
5 rows in set (0.00 sec)