var express = require('express');
var app = express();

// define routes here..
// app.listen() 建立了一個node.js web server，我們可以給一個 主機位置 及 port，設置方式跟 http.Server.listen() 一樣。

// 伺服器被成功啟動，但是卻出現 Cannot GET / 這是因為，我們還沒設定 路由，也沒render 任何的page。
// render = 渲染

var server = app.listen(5050, function () {
  console.log('Node server is running..');
});