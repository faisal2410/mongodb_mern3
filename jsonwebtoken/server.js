const express = require('express');
const helmet = require('helmet');
const jwt = require('jsonwebtoken');
const app = express();


const secretKey = 'your-secret-key';

app.use(express.static("public"));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(helmet());

// Middleware to verify JWT token
const verifyToken = (req, res, next) => {
    const token = req.headers['authorization'];

    if (!token) {
        return res.status(401).json({ message: 'No token provided.' });
    }

    jwt.verify(token,secretKey, (err, decoded) => {
        if (err) {
            return res.status(500).json({ message: 'Failed to authenticate token.' });
        }

        // Save the decoded token payload in the request object for further use
        req.user = decoded;
        next();
    });
};


// Endpoint to generate a JWT token
app.get('/login', (req, res) => {
    // In a real application, you would perform authentication here
    const user = { id: 1, username: 'Faisal ahmed',test:"We love jsonwebtoken" };

    // Generate a JWT token with the user payload
    const token = jwt.sign(user, secretKey, { expiresIn: 3600 });

    res.json({ token });
});

// Protected endpoint
app.get('/protected', verifyToken, (req, res) => {
    res.json({ message: 'Protected endpoint reached!', user: req.user });
});

app.listen(8000, () => {
    console.log("The server is running successfully");
})