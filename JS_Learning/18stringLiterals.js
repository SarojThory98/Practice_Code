//we can use both single and double quotes inside string
//literals allows multiline string
//back-tick syntax
let str1 = `this is the str1`;
console.log(str1);
let str2 = `Hello "world's"!!`;
console.log(str2);
let str3 = `this is string3
it allows multiline string by literals`;
console.log(str3);

//Interpolation
//Template literals provide an easy way to interpolate variables and expressions into strings.

//variable-substitution
//Automatic replacing of variables with real values is called string interpolation.
let a = 5;
let str4 = `value of variable is: ${a}`;
console.log(str4);

//Expression substitution
let a1 = 4, b1 = 5;
let str5 = `multiplication of a1 and b1 is:${a1 * b1}`;
console.log(str5);