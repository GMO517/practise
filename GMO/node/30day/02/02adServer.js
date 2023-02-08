var http = require('http');
var server = http.createServer(function (req, res) {
  // 這個例子裡，我們用req.url 確認request過來的url，再根據這些發送response。

  // 發送response，首先要先設定response header，用 writeHead() 方法；
  // 接著再寫回應的網頁body內容，用write()方法；
  // 最後，我們送出response，用 end() —這個不是結束喔！
  if (req.url == '/') {
    res.writeHead(200, { 'Content-Type': 'text/html' });
    res.write('<html><body>This is Home Page.</body></html>');
    res.end();
  } else if (req.url == '/student') {
    res.writeHead(200, { 'Content-Type': 'text/html' });
    res.write('<html><body>This is student Page.</body></html>');
    res.end();
  } else if (req.url == '/admin') {
    res.writeHead(200, { 'Content-Type': 'text/html' });
    res.write('<html><body>This is admin Page.</body></html>');
    res.end();
  } else
    res.end('Invalid Request!');

});

server.listen(5000);