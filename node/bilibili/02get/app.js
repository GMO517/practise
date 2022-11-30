const http = require('http');
const url = require("url");
const server = http.createServer((req, res) => {
  res.writeHead(200, { "Content-Type": "text/html;charset=utf8" }); //記得要寫不然會亂碼
  const reqUrl = req.url;
  // console.log(url.parse(reqUrl, true).query.userName); //123
  // console.log(url.parse(reqUrl, true).query.passWord); //456
  const userData = url.parse(reqUrl, true).query;
  console.log(userData.userName, userData.passWord);

  res.end("帳號:" + userData.userName + "密碼" + userData.passWord);
});
server.listen(5000);