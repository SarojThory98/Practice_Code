let num1 = 123e5;
console.log(num1);
let num2 = 123e-5;
console.log(num2);
let num3 = 999999999999;
console.log(num3);
let num4 = 99999999999999999999999999; //correct display less or equal to 15 digit
console.log(num4);

let num5 = 99999999999999999999999999999999999999n;
console.log(num5);
//using bitint
let num6 = BigInt("9999999999999999999999999999");
console.log(num6);

var x = Number.MAX_SAFE_INTEGER;
console.log(x);
var y = Number.MIN_SAFE_INTEGER;
console.log(y);

//isInteger(),isSafeInteger()
console.log(Number.isInteger(10));
console.log(Number.isSafeInteger(10));
console.log(Number.isInteger(10.003));