var fs = require('fs');

// fs.writeFile(filename, data[, options], callback)
// 可以寫入檔案。

// 參數：
// ● fileName: 檔案的完整路徑及檔名，格式字串。
// ● data: 要寫入的檔案內容。
// ● options: options 可能是一個物件或字串，包含"編碼"及"flag"。這裡預設的編碼是 utf8, flag是 “w"。
// ● call back: 只帶一個錯誤參數err的function，當我們執行writeFile完成時, 要做的事。例如: 寫入成功的訊息顯示；失敗時，丟出err。

var data = fs.readFileSync('dummyfile.txt', 'utf8');
console.log(data);