/**
Some important resource links:
1. cheat sheet
https://gist.github.com/codeSTACKr/53fd03c7f75d40d07797b8e4e47d78ec?permalink_comment_id=4099801&fbclid=IwAR26sb4qNuaOsRnRGAcRcrOqkYtQ3ENue5npufCxfeBIEWEpVvS8dMf6PHc

2. Cheat sheet
https://www.interviewbit.com/mongodb-cheat-sheet/?fbclid=IwAR1F3Ozw8uQWuexDc0gkqLpAjxy5diyHdYaNCRRJ5zZrDBouW-aUR2jylWA

Download and installation
3.https://www.mongodb.com/try/download/database-tools?fbclid=IwAR38WlfmtsXwxuu6xHq56BtRow5Rp5iXH319YfrCZHVwPKD79MM-qIb_ULQ

4. https://www.mongodb.com/products/shell?fbclid=IwAR2sI0kbw-GhQAm8Mr0Fermn76INt_4wama-wKwxDkoKOy2mrid_AYIE37k


5.https://www.mongodb.com/try/download/community?fbclid=IwAR26sb4qNuaOsRnRGAcRcrOqkYtQ3ENue5npufCxfeBIEWEpVvS8dMf6PHc

6. Mongosh Installation
https://www.mongodb.com/docs/mongodb-shell/install/#std-label-mdb-shell-install

6.  MongoDB Shell (mongosh) documentation
https://www.mongodb.com/docs/mongodb-shell/
7. Mongosh crud operation
https://www.mongodb.com/docs/mongodb-shell/crud/#std-label-mdb-shell-crud
8. For reading about Mongodb
https://www.tutorialspoint.com/questions/category/mongodb
9. Mongodb docs driver
https://www.mongodb.com/docs/mongodb-shell/crud/#std-label-mdb-shell-crud
10. Mongodb getting started
https://www.mongodb.com/docs/manual/tutorial/getting-started/
11. Mongodb methods
https://www.mongodb.com/docs/mongodb-shell/reference/methods/
12. Mongo Import
https://www.mongodb.com/docs/database-tools/mongoimport/


*/

/**
Important Commands
1. Check mongodb Version
db.version()

2. Show Current Database
db

3. Show All Databases
show dbs

4. Create Or Switch Database
use blog

5. Drop Database
db.dropDatabase()

6. Create Collection
db.createCollection('posts')

7. Show Collections
show collections

8.Insert Document
db.posts.insertOne({
  title: 'Post 1',
  body: 'Body of post.',
  category: 'News',
  likes: 1,
  tags: ['news', 'events'],
  date: Date()
})


9.Insert Multiple Documents
db.posts.insertMany([
  {
    title: 'Post 2',
    body: 'Body of post.',
    category: 'Event',
    likes: 2,
    tags: ['news', 'events'],
    date: Date()
  },
  {
    title: 'Post 3',
    body: 'Body of post.',
    category: 'Tech',
    likes: 3,
    tags: ['news', 'events'],
    date: Date()
  },
  {
    title: 'Post 4',
    body: 'Body of post.',
    category: 'Event',
    likes: 4,
    tags: ['news', 'events'],
    date: Date()
  },
  {
    title: 'Post 5',
    body: 'Body of post.',
    category: 'News',
    likes: 5,
    tags: ['news', 'events'],
    date: Date()
  }
])
db.posts.insertMany([{},{},{}],{ordered:false}) // Note: data inserted though there are some errors in in individual data

10.Find All Documents
db.posts.find()

11. Find Documents with Query
const query={ category: 'News' }
// const query={ category: 'News' }
// db.posts.find(query)
// db.posts.find({ category: 'News' })

12.Sort Documents
Ascending
db.posts.find().sort({ title: 1 })

Descending
db.posts.find().sort({ title: -1 })

13.Count Documents
db.posts.find().count()
db.posts.find({ category: 'news' }).count()

14.Limit Documents
db.posts.find().limit(2)

15.Chaining
db.posts.find().limit(2).sort({ title: 1 })

16.Find One Document
db.posts.findOne()
db.posts.findOne({ likes: { $gt: 3 } })

17.Update Document
db.posts.updateOne({ title: 'Post 1' },
{
  $set: {
    category: 'Tech',
    likes:2
  }
})
// problem
// db.posts.update({ title: 'Post 1' },
// {
//   $set: {
//     category: 'sports',
//     likes:2
//   }
// })

18.Update Document or Insert if not Found
db.posts.updateOne({ title: 'Post 6' },
{
  $set: {
    title: 'Post 6',
    body: 'Body of post.',
    category: 'News'
  }
},
{
  upsert: true
})

19.Increment Field ($inc)
db.posts.updateOne({ title: 'Post 1' },
{
  $inc: {
    likes: 2
  }
})

20.Update Multiple Documents
db.posts.updateMany({}, {
  $inc: {
    likes: 10
  }
})

21.Rename Field
db.posts.updateOne({ title: 'Post 2' },
{
  $rename: {
    likes: 'views'
  }
})
22. Delete a Document
db.posts.deleteOne({ title: 'Post 3' })

23.Delete Multiple Documents
db.posts.deleteMany({ category: 'Tech' })

24.Greater & Less Than
db.posts.find({ views: { $gt: 2 } })
db.posts.find({ views: { $gte: 7 } })
db.posts.find({ views: { $lt: 7 } })
db.posts.find({ views: { $lte: 7 } })

*/
/**
 * Master MongoDB Development for Web & Mobile Apps. CRUD Operations, Indexes, Aggregation Framework - All about MongoDB!- Udemy Course
 * Academind by Maximilian Schwarzmüller
 * 
 * You can use printjson() method to print to console an object in a MongoDB script. The syntax is as follows −
printjson({yourFieldName”:yourValue”,........N});
 * 
 * 1.db.posts.find().toArray().pretty()
 * 2.db.posts.find().forEach(post=>printjson(post))
 * 3.db.posts.find().forEach(post=>printjson(post.title))
 * 4.db.posts.find().forEach(post=>printjson(`${post.title} is posted`))
 * 
 * 
 * 5.printjson({"UserId":101,"UserName":"John","UserCoreSuject":["Java","MongoDB","MySQL","SQL Server"]});
 * The following is the output −

{
   "UserId" : 101,
   "UserName" : "John",
   "UserCoreSuject" : [
      "Java",
      "MongoDB",
      "MySQL",
      "SQL Server"
   ]
}
 * 

You can use another query −

> print ( JSON.stringify( {"UserId":101,"UserName":"John","UserCoreSuject":["Java","MongoDB","MySQL","SQL Server"]} ));
The following is the output −

{"UserId":101,"UserName":"John","UserCoreSuject":["Java","MongoDB","MySQL","
 * 
 * 
 * */

/**
 * Accessing structured data
 * db.flightdata.find({"status.description":"on-time"}).pretty()
 * db.flightdata.find({"status.details.responsible":"Max Schwarzmilar"})
 * 
*/

/**
 * Import Data to database
 * Steps:
 * 1. exit from mongosh
 * 2.open gitbash where the json file located
 * 3. mongoimport tv-shows.json -d tvshows -c movies --jsonArray --drop // this will import tv-shows.json file to movies collection in the tvshows database 
 * 
 * mongoimport -d cars -c carList --drop --jsonArray
 * 
 * 
 * 
 * 
 * */ 