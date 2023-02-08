let express = require('express');
const path = require('path');
const urlencodedParser = bodyParser.urlencoded({ extended: false });

const indexRouter = require('./routers/index');
const loginRouter = require('./routers/login');

//載入express模組
const app = express();
app.use(express.json());

app.use('/', indexRouter);
app.use('/login', loginRouter);

app.set('views', path.join(__dirname, '/views'))
app.set('view engine', 'ejs');
// 使用express
app.get('/', function (req, res) {
  //使用index樣板，並可以帶入參數給樣板利用
  res.render('index');
});

app.get('/login', function (req, res) {
  //使用index樣板，並可以帶入參數給樣板利用
  res.render('login');
});


let port = 5000;
//設定port位置
app.listen(port);
  // 監聽 port