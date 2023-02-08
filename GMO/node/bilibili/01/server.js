const http = require('http');
const url = require("url");
const queryString = require('querystring');
const server = http.createServer((req, res) => {
  const reqUrl = req.url;
  console.log(url.parse(reqUrl, true));
  //會變成id=2 , title = '這是文章標題' 在query裡
  // console.log(url.parse(reqUrl, true).query.title); //記得要放query
  const queryUrl = url.parse(reqUrl).query;
  console.log(queryString.parse(queryUrl).title);
  //與上面相同
  res.end;
});
server.listen(5000);