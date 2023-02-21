let express = require('express');
const router = express.Router();

router.get('/', function (req, res) {
  res.render('login');
})

router.post('/main', function (req, res, next) {
  // res.end('1111');
  console.log(req.body);
  // console.log(req.body.userName);
  // console.log(req.body.userPassword);
})

module.exports = router;