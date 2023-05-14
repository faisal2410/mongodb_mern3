/**
 * Mongodb Query and Projections operators
 * https://www.mongodb.com/docs/manual/reference/operator/query/
 * 
 * Query and Projections Operations
 * https://www.mongodb.com/docs/manual/tutorial/query-documents/
 * 
 *  
 * 
 * 
 * */
/**
 * Important Commands:
 * 1.db.movies.find({"rating.average":{$gt:7}})
 * 2.db.movies.find({genres:"Drama"}).pretty()  // includes drama in the array
 * 3.db.movies.find({genres:["Drama"]}).pretty() //exact equality that is only drama is included in the array
 * 4.db.movies.find({runtime:{$in:[30,42]}}).pretty()
 * 5.db.movies.find({runtime:{$nin:[30,42]}}).pretty()
 * 6.db.movies.find({"rating.average":{$lt:5}}).count()
 * 
 * Logical Operators:
 * 
 * 7.db.movies.find({$or:[{"rating.average":{$lt:5}},{"rating.average":{$gt:9}}]}).pretty()
 * 8.db.movies.find({$nor:[{"rating.average":{$lt:5}},{"rating.average":{$gt:9}}]}).pretty()
 * 9.db.movies.find({$and:[{"rating.average":{$gt:9}},{genres:"Drama"}]}).pretty()
 * 10.db.movies.find({{"rating.average":{$gt:9}},{genres:"Drama"}}).pretty()
 * 11.db.users.find({age:{$exits:true}}).pretty()  // looking for the document which have age property
 * 
 * Element Operators
 * 
 * 12. db.users.find({age:{$exits:false}}).pretty()
 * 13.db.users.find({age:{$exits:true,$ne:null}}).pretty()
 * 14.db.users.find({phone:$type:"number"}).pretty()
 * 15.db.users.find({phone:$type:["double","string"]}).pretty()
 * 
 * Evaluation Operators
 * 
 * 16. db.movies.find({summary:$regex:/musical/}).pretty()
 * 17.db.sales.find({$expr:{$gt:["$volume","$target"]}}).pretty() // looking for the documents in which volume is grater than target
 * 18. db.sales.find({$expr:{$gt:[{$cond:{if:$gte:["$volume",190]},then:{$subtract:["$volume",10]},else:"$volume"}},"$target"]}}).pretty()
 * 
 * Querying in the array
 * 
 * 19.db.users.find({"hobbies.title":"Sports"}).pretty() //Quering array data. searching in hobbbies array which is an array of objects where title  field value is Sports.
 * 20.db.users.find({hobbies:{$size:3}}).pretty() //searching documents which have hobbies array and the length of the array is 3
 * 
 * 21.db.moviestart.find({genre:{$all:["action","thriller"]}})  //all the elements in genre array which have "action" and "thriller" element
 * 
 * 22. db.users.find({hobbies:{$elemMatch:{title:"Sports",frequency:{$gte:3}}}}) //querying documents in hobbies array which have value "Sports" in the title property and grater than 3 in the frequency property
 * 
 * 
 * Understanding cursor
 * Important Link: Keyword - Iterate a cursor in the mongo shell
 * Iterate a Cursor in mongosh
 /
 https://www.mongodb.com/docs/manual/tutorial/iterate-a-cursor/#:~:text=In%20mongosh%20%2C%20when%20you%20assign,cursor%20does%20not%20automatically%20iterate.&text=You%20can%20use%20the%20cursor,var%20myCursor%20%3D%20db.

 Helpful Articles/ Docs:

 More on find(): https://docs.mongodb.com/manual/reference/method/db.collection.find/

More on Cursors: https://docs.mongodb.com/manual/tutorial/iterate-a-cursor/

Query Operator Reference: https://docs.mongodb.com/manual/reference/operator/query/

https://www.mongodb.com/docs/manual/reference/operator/aggregation/project/
 
 
 /
 * 23.db.movies.find().next()
 * 24. const dataCursor=db.movies.find()
 * dataCursor.next()
 * dataCursor.forEach(doc=>{printjson(doc)})
 * dataCursor.hasNext()
 * 
 * db.movies.find().sort({"rating.average":1}).pretty() // sorting ascending
 * db.movies.find().sort({"rating.average":-1}).pretty() // sorting descending
 * db.movies.find().sort({"rating.average":1}).skip(10).pretty() // skipping first 10
 * db.movies.find().sort({"rating.average":1}).skip(10).limit().pretty(10) // limit 10
 * */ 
/**
 * Understanding Projection
 * db.movies.find({},{name:1,genres:1,runtime:1,rating:1}).pretty()
 * db.movies.find({},{name:1,genres:1,runtime:1,rating:1,_id:0}).pretty()
 * db.movies.find({},{name:1,genres:1,runtime:1,"rating.average":1,_id:0}).pretty()
 * db.movies.find({},{name:1,genres:1,runtime:1,"rating.average":1,"schedule.time":1,_id:0}).pretty()
 * 
 * 
 * Using Projection in Arrays
 * 
 * db.movies.find({genres:"Drama"},{"genres.$":1}).pretty()
 * db.movies.find({genres:"Drama"},{genres:{$elemMatch:{$eq:"Horror"}}}).pretty()
 * db.movies.find({"rating.average":{$gt:9}},{genres:{$slice:2},name:1}).pretty()
 * db.movies.find({"rating.average":{$gt:9}},{genres:{$slice:[1,2]},name:1}).pretty()
 * 
 * 
 * 
 * */ 
