<?php
/*
In SQL, "ORDER BY" is a clause used to sort the results of a query based on one or more columns of a table.

For example, let's say you have a table of customer data with columns for "name", "age", and "email". If you wanted to retrieve a list of all customers sorted by their age, you would use the following SQL statement:


SELECT name, age, email FROM customers ORDER BY age;

This would return a list of all customers, sorted by their age in ascending order. If you wanted to sort in descending order instead, you would add the keyword "DESC" after the column name, like this:


SELECT name, age, email FROM customers ORDER BY age DESC;

In addition to sorting by a single column, you can also sort by multiple columns by including additional column names separated by commas. For example, if you wanted to sort by age first and then by name, you would use the following SQL statement:


SELECT name, age, email FROM customers ORDER BY age, name;

This would return a list of all customers, sorted first by their age in ascending order and then by their name in ascending order.
*/ 