<?php
/*
In relational database management systems (RDBMS), connectivity and cardinality are used to describe the relationships between entities in a database.

Connectivity refers to the degree to which entities are connected or associated with each other. There are three types of connectivity:

One-to-One (1:1) Connectivity: In a one-to-one relationship, each entity in one table is associated with only one entity in the other table, and vice versa. For example, in a database for a company, each employee may have only one assigned office, and each office may be assigned to only one employee.

One-to-Many (1:M) Connectivity: In a one-to-many relationship, each entity in one table can be associated with multiple entities in the other table, but each entity in the other table can be associated with only one entity in the first table. For example, in a database for a company, each department may have multiple employees, but each employee can be assigned to only one department.

Many-to-Many (M:M) Connectivity: In a many-to-many relationship, each entity in one table can be associated with multiple entities in the other table, and vice versa. For example, in a database for a university, each student may be enrolled in multiple courses, and each course may have multiple students enrolled in it.

Cardinality refers to the number of instances of one entity that can be associated with instances of another entity in a relationship. There are two types of cardinality:

Minimum Cardinality: This refers to the minimum number of instances of an entity that must be associated with instances of another entity in a relationship. For example, in a one-to-many relationship between departments and employees, the minimum cardinality for the department entity is one, because every department must have at least one employee assigned to it.

Maximum Cardinality: This refers to the maximum number of instances of an entity that can be associated with instances of another entity in a relationship. For example, in a one-to-many relationship between departments and employees, the maximum cardinality for the employee entity is many, because each department can have multiple employees assigned to it.
*/ 