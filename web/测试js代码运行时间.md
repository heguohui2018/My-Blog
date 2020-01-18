# 测试js代码运行时间

测试方法是:
	一段代码的开始位置添加`console.time('label')`,在代码结束位置添加
	`console.time('label')`

需要注意：
	两个位置的label需要保持一致

示例:

	计算add函数运行时间

```js
	console.time("add函数运行时间");
	let add = function(a,b){
		alert(a+b);
	}
	add(3,4);
	console.timeEnd("add函数运行时间");
```
==================================================================


	测试一个 myBook函数

```js
	console.time("myBook函数运行时间");
	let myBook = function(a,b){
		alert(a+b);
	}
	myBook("This is a book","color:red");
	console.timeEnd("myBook函数运行时间");
```
