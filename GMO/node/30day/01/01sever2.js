var http = require('http'); // 1 - 載入 Node.js 原生模組 http

var server = http.createServer(function (req, res) {   // 2 - 建立server

  // 在此處理 客戶端向 http server 發送過來的 req。

});
// req = request  可以用來得到一些http server發過來的請求 
// ex url/http header /data
//res = response 送出回應給http送來的請求
server.listen(5000);
//3 - 進入此網站的監聽 port, 就是 localhost:xxxx 的 xxxx

console.log('Node.js web server at port 5000 is running..')