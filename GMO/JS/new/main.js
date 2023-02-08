// alert("Hello" + "world");
console.log("字元數量".length);
console.log("選字串".charAt(0));
//括弧內是第幾個
console.log("hello world".replace("hello", "goodbye"));
//前面選要覆蓋的 後面寫要放上去的

console.log("hello world".toUpperCase());

var name = "AAA"; //全域變數
console.log(name);

let a = 1; //區域變數
console.log(a);

name = "BBB"; //可更改 這次不用var

console.log(name);

a = 1 + 1;
console.log(a);

const Pi = 3.14;
//常數 不能更改 constant variable 也是有作用域的問題
console.log(Pi);

//Pi = 3.1111; 會報錯
//console.log(Pi);

var x = 5;
x += 5;

console.log(x + 5);

var x;
x = "3" + "4";//字元連接 
console.log(x); //34

x = "3" + 4 + 5;//會輸出 345 只要有字元就會變成字元連接
console.log(x);

x = 3 + 4 + "5";//但吃順序
//7+5 會輸出75
console.log(x);

console.log(123 == "123"); // "123" "123" 會自動轉換
console.log(123 === "123"); // 123 "123" 不會自動轉換

console.log(1 == true);
console.log(1 === true); //同上 
