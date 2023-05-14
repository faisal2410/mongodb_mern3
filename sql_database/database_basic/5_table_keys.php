<?php
/*
In a database, a table is a collection of related data organized into rows and columns. Tables are the fundamental structure used to store and manage data in a relational database. The data in a table is typically related to a specific topic or entity, such as customers, products, or orders.

Keys are an important concept in a database, as they help to uniquely identify records within a table and establish relationships between tables. There are two main types of keys in a database:

Primary key: A primary key is a field or set of fields in a table that uniquely identifies each record in that table. A primary key is used as a reference point for establishing relationships with other tables in the database. Each table can have only one primary key, and it must be unique and not null for each record in the table.

Foreign key: A foreign key is a field in a table that refers to the primary key of another table. It is used to establish a relationship between two tables, where the foreign key in one table references the primary key in another table. This allows data to be shared and related across multiple tables, and ensures data consistency and accuracy.

In summary, tables are the primary structure used to store and manage data in a database, while keys are used to uniquely identify records within a table and establish relationships between tables. Primary keys are used to uniquely identify records within a table, while foreign keys are used to establish relationships with other tables in the database.

*/ 

/*
A composite primary key is a combination of two or more fields in a database table that together uniquely identify each record in the table. A composite primary key is used when a single field cannot uniquely identify each record in a table, but a combination of fields can.

For example, consider a table that stores information about employees in a company. If we have two employees with the same name, we cannot use the employee name as the primary key for the table. Instead, we might use a combination of fields, such as employee ID and department ID, as the composite primary key. Together, these two fields would uniquely identify each employee in the table, as each employee would have a unique combination of employee ID and department ID.

A composite primary key is created by specifying two or more fields as the primary key when creating a table in a database. The fields must be chosen carefully to ensure that they together uniquely identify each record in the table. When querying data from a table with a composite primary key, we must include all the fields in the primary key in our queries to uniquely identify the records we want to retrieve.

In summary, a composite primary key is a combination of two or more fields in a database table that together uniquely identify each record in the table. This is used when a single field cannot uniquely identify each record in the table, but a combination of fields can.

*/ 