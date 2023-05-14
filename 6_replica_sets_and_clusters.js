/*
Replica Sets and Clusters are two key features of MongoDB that help ensure high availability, scalability, and reliability of data. Let's take a closer look at each of these features:

Replica Sets: A replica set is a group of MongoDB servers that work together to provide high availability and automatic failover. In a replica set, one server is designated as the primary server, while the others are secondary servers. The primary server handles all write operations and also replicates data to the secondary servers. If the primary server fails, one of the secondary servers is automatically promoted to become the new primary server.
Here's an example of a replica set with three servers:


Primary Server
     |
     v
Secondary Server 1
     |
     v
Secondary Server 2
In this example, the primary server handles all write operations and replicates data to the secondary servers. If the primary server fails, one of the secondary servers is automatically promoted to become the new primary server.

Clusters: A cluster is a group of MongoDB servers that work together to provide horizontal scalability and automatic sharding. In a cluster, data is partitioned and distributed across multiple servers, allowing you to scale out your database horizontally as your data grows.
There are two types of clusters in MongoDB: sharded clusters and replica set clusters. Sharded clusters distribute data across multiple servers using a process called sharding, while replica set clusters provide high availability and automatic failover using replica sets.

Here's an example of a sharded cluster with three shards:


Shard 1       Shard 2       Shard 3
   |             |             |
   v             v             v
Replica Set 1  Replica Set 2  Replica Set 3
   |             |             |
   v             v             v
Primary Server  Primary Server  Primary Server
In this example, the data is partitioned across three shards, each of which is a replica set consisting of multiple servers. The primary server in each replica set handles write operations and replicates data to the secondary servers. If one of the shards fails, the remaining shards can continue to serve requests.

Overall, replica sets and clusters are powerful features of MongoDB that allow you to scale out your database horizontally, ensure high availability, and provide automatic failover in the event of server failures. By using these features, you can build highly scalable and reliable applications that can handle large volumes of data and high levels of traffic.







*/ 