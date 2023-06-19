/*
String length
String slice()
String substring()
String substr()
String replace()
String replaceAll()
String toUpperCase()
String toLowerCase()
String concat()
String trim()
String trimStart()
String trimEnd()
String padStart()
String padEnd()
String charAt()
String charCodeAt()
String split()
*/


//string length
let lString = "this is string for calculating length";
console.log("length of string is:", lString.length);

//string slice
//slice(start,end)
let sliceString1 = "this is string for calculating length";
console.log("string slice:", sliceString1.slice(7, 20));
let sliceString2 = "this is string for calculating length";
console.log("string slice:", sliceString2.slice(7));
let sliceString3 = "this is string for calculating length";
console.log("string slice:", sliceString3.slice(-12));
let sliceString4 = "this is string for calculating length";
console.log("string slice:", sliceString4.slice(-12, -6));

//substring
//substring(start,end)
//The difference is that start and end values less than 0 are treated as 0 in substring()
let subString1 = "this is string for calculating length";
console.log("substring:", subString1.substring(7, 20));
let subString2 = "this is string for calculating length";
console.log("substring:", subString2.substring(7));
let subString3 = "this is string for calculating length";
console.log("substring:", subString3.substring(-12));
let subString4 = "this is string for calculating length";
console.log("substring:", subString4.substring(-12, -6));

//substr
//substr(start,length)
//The difference is that the second parameter specifies the length of the extracted part
let subStr1 = "this is string for calculating length";
console.log("substring:", subStr1.substr(7, 20));
let subStr2 = "this is string for calculating length";
console.log("substring:", subStr2.substr(7));
let subStr3 = "this is string for calculating length";
console.log("substring:", subStr3.substr(-12));
let subStr4 = "this is string for calculating length";
console.log("substring:", subStr4.substr(-12, -6));

//replace
let repString1 = "good morning!!";
console.log("replace string:", repString1.replace("morning", "afternoon"));
/*
The replace() method does not change the string it is called on.
The replace() method returns a new string.
The replace() method replaces only the first match
*/
let repString2 = "good morning!! good morning!!";
console.log("replace string:", repString2.replace("morning", "afternoon"));

//by default replace is case sensitive
let repString3 = "good morning!! good morning!!";
console.log("replace string:", repString3.replace("MORNING", "afternoon"));

//To replace case insensitive, use a regular expression with an /i flag(insensitive)
//regular expression are written without quotes
//It replaces only one match
let repString4 = "good morning!! good morning!!";
console.log("replace string:", repString4.replace(/MORNING/i, "afternoon"));
//to replace all matches
let repString5 = "good morning!! good morning!!";
console.log("replace string:", repString5.replace(/morning/g, "afternoon"));

//replaceAll()
let repAllString1 = "good morning!! good morning!!";
console.log("replace string:", repAllString1.replaceAll(/morning/g, "afternoon"));
let repAllString2 = "good morning!! good morning!!";
console.log("replace string:", repAllString2.replaceAll("morning", "afternoon"));

//uppercase, lowercase
//toUpperCase
let uprCaseString1 = "Hello world";
console.log("upper case string:", uprCaseString1.toUpperCase());
//toLowerCase
let lowerCaseString1 = "HELLO WORLD";
console.log("upper case string:", lowerCaseString1.toLowerCase());

//string concat
let str2 = "Hello";
console.log("concated string:", str2.concat(" world!!"));

//trim()
//The trim() method removes whitespace from both sides of a string
let trimString1 = "   Hello world!!   ";
console.log("actual lenth:", trimString1.length, "trim length:", trimString1.trim().length);

//trimStart()
//remove spaces only from start
let trimString2 = "   Hello world!!   ";
console.log("actual lenth:", trimString2.length, "trimStart length:", trimString2.trimStart().length);

//trimEnd()
//remove spaces only from end
let trimString3 = "    Hello world!!   ";
console.log("actual lenth:", trimString3.length, "trimEnd length:", trimString3.trimEnd().length);


//padStart(total_length(after padding),replacing_string)
//The padStart() method pads a string with another string.
let padString1 = "hello world!!";
console.log("padstart string:", padString1.padStart(18, "h"));
//to give padding a number
let padString2 = 5;
let padString3 = padString2.toString();
console.log("padstart string:", padString3.padStart(6, "h"));

//padEnd(total_length(after padding),replacing_string)
//The padEnd() method pads a string with another string.
let padString4 = "hello world!!";
console.log("padstart string:", padString4.padEnd(18, "h"));

//charAt()
//return character at specified length
let charString1 = "Hello world!!";
console.log("character:", charString1.charAt(3));
//another mothod
console.log("character:", charString1[3]);

//charCodeAt()
//returns UTF code of character at specified length
console.log("char code:", charString1.charCodeAt(3));

//split()
//A string can be converted to an array with the split() method
let splitString1 = "hello, world!!";
console.log("split string:", splitString1.split(","));
console.log("split string:", splitString1.split("!"));
console.log("split string:", splitString1.split("l"));
console.log("split string:", splitString1.split(""));
console.log("split string:", splitString1.split(" "));