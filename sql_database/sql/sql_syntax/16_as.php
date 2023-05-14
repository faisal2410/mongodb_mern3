<?php
/*
In SQL, the AS keyword is used to rename a column or table in a query result. It is often used to make the output more readable or to avoid naming conflicts when combining columns or tables.

When used with a column, the AS keyword is followed by the new name for the column. For example, if you had a table called "customers" with columns for "first_name" and "last_name", you could use the following SQL statement to retrieve a list of customers with a full name column:


SELECT first_name, last_name, CONCAT(first_name, ' ', last_name) AS full_name
FROM customers;

In this example, the CONCAT function is used to combine the "first_name" and "last_name" columns into a single column called "full_name". The AS keyword is used to give this new column a more descriptive name.

When used with a table, the AS keyword is followed by the new name for the table. For example, if you wanted to join two tables called "orders" and "customers", you could use the following SQL statement:


SELECT *
FROM orders
JOIN customers AS c
ON orders.customer_id = c.customer_id;

In this example, the AS keyword is used to rename the "customers" table as "c". This allows you to reference the "customers" table by a shorter name in the JOIN condition.

Overall, the AS keyword in SQL is used to rename columns or tables in a query result to make it more readable or to avoid naming conflicts.
*/ 