<?php
/*
In SQL, the "UPDATE" statement is used to modify existing data in a table. It's used to change the values in one or more columns of a specific row or set of rows in a table.

The basic syntax for "UPDATE" is:


UPDATE table_name
SET column1 = value1, column2 = value2, ...
WHERE condition;

Where "table_name" is the name of the table you want to update, "column1, column2, ..." are the names of the columns you want to update, and "value1, value2, ..." are the new values you want to set for those columns.

The "WHERE" clause specifies which rows to update based on a specific condition. For example, if you want to update the salary of an employee with ID 100, you can use the following syntax:


UPDATE employees
SET salary = 60000
WHERE employee_id = 100;

This will update the "salary" column of the "employees" table to 60000 for the employee with ID 100.

You can also update multiple columns at once:


UPDATE employees
SET salary = 60000, department_id = 3
WHERE employee_id = 100;

This will update the "salary" and "department_id" columns of the "employees" table to 60000 and 3, respectively, for the employee with ID 100.

Overall, the "UPDATE" statement is a powerful tool for modifying data in a table, and it's commonly used in various database applications.
*/ 
// Before update
// SET SQL_SAFE_MODE=0;
// After update
// SET SQL_SAFE_MODE=1;

/*
SQL_SAFE_MODE is a setting in MySQL that restricts certain potentially dangerous operations in order to prevent data loss or corruption. When this mode is enabled, certain SQL statements that could potentially cause problems will be disallowed or altered.

For example, in SQL_SAFE_MODE, certain operations such as deleting or updating multiple rows using a single statement without specifying a WHERE clause are not allowed. This is because these types of statements can have unintended consequences and potentially delete or modify large amounts of data unintentionally.

Enabling SQL_SAFE_MODE can be done by setting the sql_safe_updates system variable to 1. This variable can be set at the server level, the session level, or even within a specific SQL statement.

Overall, SQL_SAFE_MODE is a useful tool for preventing accidental data loss or corruption, but it should be used carefully and only when necessary, as it can also restrict certain legitimate operations.
*/ 