<?php
/*
Data types in SQL (Structured Query Language) are used to define the type of data that can be stored in a column of a table in a relational database. There are several data types in SQL, which can be divided into several categories, including:

Numeric data types: These data types are used to store numeric values such as integers, decimals, or floating-point numbers. Examples of numeric data types include INT, FLOAT, DECIMAL, and NUMERIC.

Character data types: These data types are used to store character strings such as names, addresses, or descriptions. Examples of character data types include CHAR, VARCHAR, and TEXT.

Date and time data types: These data types are used to store date and time values. Examples of date and time data types include DATE, TIME, TIMESTAMP, and DATETIME.

Boolean data type: This data type is used to store Boolean values, which can be either true or false. The Boolean data type in SQL is called BOOLEAN or BOOL.

Binary data types: These data types are used to store binary data such as images, audio, or video files. Examples of binary data types include BLOB and BYTEA.

Other data types: SQL also includes several other data types such as XML, JSON, and ARRAY, which are used to store specialized types of data.

Overall, data types in SQL are used to define the type of data that can be stored in a column of a table in a relational database. Choosing the appropriate data type for each column is important to ensure efficient storage and retrieval of data, as well as to maintain data integrity and consistency.
*/ 

/*
commonly used SQL data types with examples:

INT: The INT data type is used to store whole numbers (integers). For example, if we have a table for storing employee data, we might have a column for storing the employee ID, which would typically be an integer value. Example: employee_id INT.

FLOAT: The FLOAT data type is used to store decimal numbers. For example, if we have a table for storing product prices, we might have a column for storing the price of a product, which would typically be a decimal value. Example: price FLOAT.

DECIMAL/NUMERIC: The DECIMAL and NUMERIC data types are used to store decimal numbers with a fixed number of digits before and after the decimal point. For example, if we have a table for storing financial data, we might have a column for storing a monetary amount, which would typically require a fixed number of digits after the decimal point. Example: amount DECIMAL(10,2).

CHAR: The CHAR data type is used to store fixed-length character strings. For example, if we have a table for storing customer names, we might have a column for storing the customer's first name, which would typically be a fixed-length string. Example: first_name CHAR(20).

VARCHAR: The VARCHAR data type is used to store variable-length character strings. For example, if we have a table for storing customer addresses, we might have a column for storing the street address, which could vary in length. Example: street_address VARCHAR(50).

TEXT: The TEXT data type is used to store large blocks of text data, such as descriptions or comments. Example: comments TEXT.

DATE: The DATE data type is used to store date values. For example, if we have a table for storing customer orders, we might have a column for storing the order date. Example: order_date DATE.

TIME: The TIME data type is used to store time values. For example, if we have a table for storing employee schedules, we might have a column for storing the start time of an employee's shift. Example: start_time TIME.

TIMESTAMP/DATETIME: The TIMESTAMP and DATETIME data types are used to store both date and time values. For example, if we have a table for storing product inventory, we might have a column for storing the last time the inventory was updated. Example: last_updated TIMESTAMP.

These are some of the commonly used SQL data types with examples. It's important to choose the appropriate data type for each column based on the type of data being stored to ensure efficient storage and retrieval of data.
*/ 

// Ref : https: //www.w3schools.com/mysql/mysql_datatypes.asp