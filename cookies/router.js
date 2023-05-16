const express = require('express');
let router = express.Router();

router.get("/", (req, res,next) => {
    res.json({
        msg: "Home page"
    })

})



module.exports = router;







// const express = require('express');
// let router = express.Router();

// router.get("/", (req, res,next) => {
//     res.json({
//         msg: "Router Works"
//     })
// })

// module.exports = router;