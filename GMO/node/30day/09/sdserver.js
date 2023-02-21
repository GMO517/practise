var express = require('express');
var app = express();
//用app.use() 去掛載這個中介軟體方法。
//setting middleware
// app.use(express.static(__dirname + '/public')); 
//Serves resources from public folder

app.use('/hello', express.static(__dirname + '/public'));

var server = app.listen(5050);