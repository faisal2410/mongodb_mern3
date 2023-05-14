<?php
/*
The CREATE TABLE statement in SQL is used to create a new table in a database. The basic syntax for creating a table is as follows:

CREATE TABLE table_name (
   column1 datatype constraint,
   column2 datatype constraint,
   column3 datatype constraint,
   ...
   PRIMARY KEY (one or more columns)
);

Here's an explanation of each part of the CREATE TABLE statement, along with an example:

CREATE TABLE: This keyword is used to indicate that you want to create a new table in the database.

table_name: This is the name that you want to give to the new table.

column1, column2, column3, ...: These are the names of the columns that you want to create in the new table.

datatype: This is the data type that you want to assign to each column. Some common data types include INT, VARCHAR, DATE, and FLOAT.

constraint: This is an optional parameter that you can use to specify constraints for the columns, such as NOT NULL or UNIQUE.

PRIMARY KEY: This keyword is used to specify the primary key for the table. The primary key is a column or set of columns that uniquely identify each row in the table.

Here's an example of how to use the CREATE TABLE statement to create a new table called "customers":


CREATE TABLE customers (
   id INT NOT NULL PRIMARY KEY,
   first_name VARCHAR(50),
   last_name VARCHAR(50),
   email VARCHAR(100) UNIQUE,
   phone_number VARCHAR(20)
);
In this example, we're creating a table called "customers" with four columns: "id", "first_name", "last_name", "email", and "phone_number". The "id" column is set as the primary key, and the "email" column is set as a unique constraint.

*/ 