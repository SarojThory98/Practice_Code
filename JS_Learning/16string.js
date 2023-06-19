var fullname = "saroj thory";
console.log(fullname);

//we can use single or double quotes
var fullName = 'saroj thory';
console.log(fullname);

//can use quotes inside string
var fullName = "saroj'thory";
console.log(fullname);
var fullName = 'saroj"thory';
console.log(fullname);

//find length of string(use predefined length function)
let sLength = "this is the string for calculating length";
console.log("string length", sLength.length);

//Escape Character
/*
let escapeStr="this is first part of string"escapechar"this is second part of string";
//It will give error because of not  recognize " .
*/
/*
\'='
\"="
\\=\
*/
var escapeStr = "this is first part of string \"escapechar\" this is second part of string";
console.log(escapeStr);

var escapeStr = "this is first part of string \"\/escapechar\" this is second part of string";
console.log(escapeStr);

// backspace
var escapeStr = "this is first part of string \bescapechar this is second part of string";
console.log(escapeStr);

// form feed
var escapeStr = "this is first part of string \fescapechar this is second part of string";
console.log(escapeStr);

// new line
var escapeStr = "this is first part of string \nescapechar this is second part of string";
console.log(escapeStr);

// carriage return
var escapeStr = "this is first part of string \rescapechar this is second part of string";
console.log(escapeStr);

// horizontal tabulator
var escapeStr = "this is first part of string \tescapechar this is second part of string";
console.log(escapeStr);

// vartical tabulator 
var escapeStr = "this is first part of string \vescapechar this is second part of string";
console.log(escapeStr);

//Breaking Long Code Lines
var codeBreak = "this is code break \
practice line";
console.log(codeBreak); //it does allow space after /
//we cant break code by using /

//use + sign instead \ for code break
var codeBreak = "this is code break" +
    "practice line";
console.log(codeBreak);



//JS string as objects
let x = "saroj";
let y = new String("saroj");
console.log(y);
console.log(x == y);
console.log(x === y);
let z = new String("saroj");
console.log(z == y); //object will not be coompared it always return false


