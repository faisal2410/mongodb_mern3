<?php
/*
In SQL, there are several arithmetic operators that can be used in SELECT statements to perform mathematical operations on numeric data. These operators include:

Addition (+): Used to add two or more numeric values. For example, if you had a table called "sales" with columns for "revenue" and "expenses", you could use the following SQL statement to calculate the profit for each sale:

SELECT revenue - expenses AS profit FROM sales;

Subtraction (-): Used to subtract one numeric value from another. For example, if you had a table called "inventory" with columns for "quantity" and "sold", you could use the following SQL statement to calculate the remaining inventory after sales:

SELECT quantity - sold AS remaining FROM inventory;

Multiplication (*): Used to multiply two or more numeric values. For example, if you had a table called "prices" with columns for "unit_price" and "quantity", you could use the following SQL statement to calculate the total price for each item:

SELECT unit_price * quantity AS total_price FROM prices;

Division (/): Used to divide one numeric value by another. For example, if you had a table called "grades" with columns for "score" and "total_points", you could use the following SQL statement to calculate the percentage for each grade:

SELECT (score / total_points) * 100 AS percentage FROM grades;

Modulus (%): Used to return the remainder after division. For example, if you wanted to check if a number is even or odd, you could use the modulus operator. If the result is 0, the number is even. If the result is 1, the number is odd. For example:

SELECT 5 % 2; -- Returns 1
SELECT 6 % 2; -- Returns 0

These arithmetic operators can be used with numeric data types such as INT, BIGINT, FLOAT, and DECIMAL.
*/ 