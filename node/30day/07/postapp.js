var express = require('express');
var app = express();
// 處理表單Post的請求
var bodyParser = require("body-parser");
app.use(bodyParser.urlencoded({ extended: false }));

app.get('/', function (req, res) {
  res.sendFile(__dirname + '/index.html');  //回應靜態文件
});
// __dirname，它是node.js關鍵字，用來返回目前這個.js檔的絕對路徑，後面附上 / 檔名
//submit-student-data = action後面的東西
app.post('/submit-student-data', function (req, res) {
  var name = req.body.firstName + ' ' + req.body.lastName;

  res.send(name + ' Submitted Successfully!');
});

var server = app.listen(5000, function () {
  console.log('Node server is running..');
});
