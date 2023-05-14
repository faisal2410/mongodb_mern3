<?php
/*
In SQL, the "DELETE" statement is used to delete one or more rows from a table. It's used to remove data from a table that is no longer needed or is incorrect.

The basic syntax for "DELETE" is:

DELETE FROM table_name
WHERE condition;

Where "table_name" is the name of the table you want to delete data from, and "condition" is the criteria for selecting the rows to be deleted.

For example, if you want to delete a row from the "employees" table with the employee ID of 100, you can use the following syntax:


DELETE FROM employees
WHERE employee_id = 100;

This will delete the row from the "employees" table where the employee ID is 100.

You can also use the "DELETE" statement to delete multiple rows at once by specifying a more complex condition. For example, if you want to delete all employees in the "sales" department, you can use the following syntax:


DELETE FROM employees
WHERE department = 'sales';

This will delete all rows from the "employees" table where the department is "sales".

It's important to use the "DELETE" statement with caution, as it permanently removes data from a table and it cannot be undone. It's recommended that you make a backup of the data before deleting it to avoid accidental loss of important data.
*/ 