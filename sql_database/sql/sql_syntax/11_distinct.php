<?php
/*
In SQL, "DISTINCT" is a keyword used in a SELECT statement to return only unique or distinct values for a specified column or set of columns.

For example, consider a table called "orders" that contains data about customer orders, including a column for "product_name". If you wanted to retrieve a list of all unique product names from the orders table, you would use the following SQL statement:


SELECT DISTINCT product_name FROM orders;

This would return a list of all distinct product names found in the orders table. If there were multiple orders for the same product, only one instance of that product name would be returned.

You can also use the DISTINCT keyword with multiple columns to return unique combinations of values across those columns. For example, if you wanted to retrieve a list of all unique combinations of product name and customer name from the orders table, you would use the following SQL statement:


SELECT DISTINCT product_name, customer_name FROM orders;

This would return a list of all distinct combinations of product name and customer name found in the orders table. If there were multiple orders for the same product and customer, only one instance of that combination would be returned.
*/ 