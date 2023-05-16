const express = require('express');
const helmet = require('helmet');
const cookieParser = require('cookie-parser');
const app = express();
const router = require("./router");
const productRouter=require("./productRouter")
// const userRouter = require("./userRouter");


app.use(express.static("public"));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(helmet());
app.use(cookieParser());



app.use("/", router);
app.use("/product", productRouter);

// app.use("/", router);
// app.use("/user", userRouter);

app.get('/set-cookie', (req, res) => {
    res.cookie('myCookie', 'hello world', { maxAge: 900000, httpOnly: true });
    res.cookie('test', 'ostad', { maxAge: 900000, httpOnly: true });
    res.send('Cookie set!');
});


app.get('/get-cookie', (req, res) => {
    const myCookieValue = req.cookies.myCookie;
    const testValue = req.cookies.test;
    res.send(`Cookie value: ${myCookieValue} and test value: ${testValue}` );
});








app.listen(8000, () => {
    console.log("The server is running successfully");
})