<?php
/*
In SQL, a "constraint" is a rule or restriction that is applied to a table column, to ensure the accuracy, integrity and consistency of the data in the database. Constraints can be used to restrict what data can be inserted or updated in a table, to enforce referential integrity between tables, or to ensure that certain data values meet specific criteria.

The most commonly used constraints in SQL are:

NOT NULL Constraint: This constraint is used to ensure that a column cannot have null values. The syntax is:


column_name data_type NOT NULL;

UNIQUE Constraint: This constraint is used to ensure that each row in a column has a unique value. The syntax is:


column_name data_type UNIQUE;

PRIMARY KEY Constraint: This constraint is used to uniquely identify each row in a table. The syntax is:


column_name data_type PRIMARY KEY;

FOREIGN KEY Constraint: This constraint is used to establish a relationship between two tables. It ensures that the values in a column of one table correspond to the values in a column of another table. The syntax is:


column_name data_type REFERENCES table_name(column_name);

CHECK Constraint: This constraint is used to ensure that the values in a column meet specific criteria. The syntax is:


column_name data_type CHECK (condition);

Constraints can be defined when a table is created, or they can be added later using the ALTER TABLE statement. They are an important tool for maintaining the quality of data in a database and ensuring that it remains accurate and consistent over time.
*/ 