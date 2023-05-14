<?php
/*
In SQL, "LIMIT" is a keyword used in a SELECT statement to restrict the number of rows returned by a query.

For example, if you had a table called "employees" with thousands of rows of data, and you only wanted to retrieve the first 10 rows, you would use the following SQL statement:


SELECT * FROM employees LIMIT 10;

This would return the first 10 rows from the "employees" table. If you wanted to retrieve the next 10 rows, you could use the OFFSET keyword to start the query at a certain row, like this:


SELECT * FROM employees LIMIT 10 OFFSET 10;

This would return rows 11-20 from the "employees" table.

You can also use the LIMIT keyword without the OFFSET keyword to return a specified number of rows starting from the first row of the query result. For example, if you wanted to retrieve only the top 5 highest-paid employees from the "employees" table, you could use the following SQL statement:


SELECT * FROM employees ORDER BY salary DESC LIMIT 5;

This would return the 5 employees with the highest salaries in the "employees" table, sorted in descending order by salary.
*/ 