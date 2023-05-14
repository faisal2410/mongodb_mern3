<?php
/*
In SQL, the RENAME statement is used to change the name of an existing table or column in a database. The basic syntax for renaming a table in SQL is as follows:


ALTER TABLE current_table_name RENAME TO new_table_name;

Here, current_table_name is the name of the table you want to rename, and new_table_name is the new name you want to give to the table.

For example, suppose we have a table named employees in our database and we want to rename it to staff. We can use the following SQL statement:

ALTER TABLE employees RENAME TO staff;

or

rename table employees to persons;

Similarly, we can also rename a column in a table using the following syntax:


ALTER TABLE table_name RENAME COLUMN current_column_name TO new_column_name;

Here, table_name is the name of the table that contains the column you want to rename, current_column_name is the name of the column you want to rename, and new_column_name is the new name you want to give to the column.

For example, suppose we have a table named employees with a column named emp_id, and we want to rename it to employee_id. We can use the following SQL statement:


ALTER TABLE employees RENAME COLUMN emp_id TO employee_id;

*/ 