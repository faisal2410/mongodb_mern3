<?php
/*
In SQL, logical operators are used to combine multiple conditions in WHERE clauses of SELECT statements to return a Boolean result (TRUE or FALSE). These operators include:

AND: Used to combine two or more conditions where both must be true for the overall condition to be true. For example, if you had a table called "orders" with columns for "order_date" and "order_total", you could use the following SQL statement to retrieve all records for orders with a total greater than $100 and placed after January 1st, 2022:

SELECT * FROM orders WHERE order_total > 100 AND order_date > '2022-01-01';

OR: Used to combine two or more conditions where either one must be true for the overall condition to be true. For example, if you had a table called "employees" with columns for "title" and "salary", you could use the following SQL statement to retrieve all records for employees with a title of "Manager" or a salary greater than $100,000:

SELECT * FROM employees WHERE title = 'Manager' OR salary > 100000;

NOT: Used to negate a condition, where the overall condition is true if the negated condition is false. For example, if you had a table called "students" with columns for "grade" and "attendance", you could use the following SQL statement to retrieve all records for students who did not attend school and received a failing grade:

SELECT * FROM students WHERE NOT attendance = 'Present' AND grade < 60;

These logical operators can be used to combine multiple conditions in WHERE clauses of SELECT statements, allowing for more complex and specific queries.
*/ 