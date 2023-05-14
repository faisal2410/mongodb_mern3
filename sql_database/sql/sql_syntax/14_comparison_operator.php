<?php
/*
In SQL, comparison operators are used in WHERE clauses of SELECT statements to compare two values and return a Boolean result (TRUE or FALSE). These operators include:

Equal to (=): Used to compare two values for equality. For example, if you had a table called "students" with columns for "first_name" and "last_name", you could use the following SQL statement to retrieve all records for students with the first name "John":

SELECT * FROM students WHERE first_name = 'John';

Not equal to (<> or !=): Used to compare two values for inequality. For example, if you had a table called "employees" with columns for "salary" and "department", you could use the following SQL statement to retrieve all records for employees who do not work in the "Sales" department:

SELECT * FROM employees WHERE department <> 'Sales';

Greater than (>), greater than or equal to (>=), less than (<), and less than or equal to (<=): Used to compare two values for relative size. For example, if you had a table called "inventory" with columns for "quantity" and "reorder_point", you could use the following SQL statement to retrieve all records for items that need to be restocked:

SELECT * FROM inventory WHERE quantity < reorder_point;

IN: Used to compare a value against a list of possible values. For example, if you had a table called "customers" with a column for "state", you could use the following SQL statement to retrieve all records for customers in California, New York, or Texas:

SELECT * FROM customers WHERE state IN ('California', 'New York', 'Texas');

LIKE: Used to compare a value against a pattern using wildcard characters. For example, if you had a table called "products" with a column for "name", you could use the following SQL statement to retrieve all records for products with names that start with "apple":

SELECT * FROM products WHERE name LIKE 'apple%';

These comparison operators can be used with various data types such as INT, VARCHAR, DATE, and BOOLEAN to compare values in WHERE clauses of SELECT statements.
*/ 