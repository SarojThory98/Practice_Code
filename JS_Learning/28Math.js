console.log("Euler's number", Math.E);
console.log("PI", Math.PI);
console.log("Root of 2", Math.SQRT2);
console.log("Root of 1/2", Math.SQRT1_2);


//number to integer
console.log(Math.round(4.5));
console.log(Math.ceil(4.5)); //returns upto the nearest integer
console.log(Math.floor(4.5)); //returns down nearest integer
console.log(Math.trunc(4.5)); //return only integer value
console.log(Math.sign(4.5));//positive=1, negative=-1, null=0

//pow(x,y)
console.log(Math.pow(4, 3));

//sqrt(x)
console.log(Math.sqrt(20));

//absolute positive
console.log(Math.abs(-4.5));

//sin,cos
console.log(Math.sin(45 * (Math.PI) / 180));
console.log(Math.cos(30 * (Math.PI) / 180));

//random
console.log("random value:", Math.random());
console.log("random value:", Math.floor(Math.random()));

//Boolean
console.log("boolean function:", Boolean(10 > 9));
//another method
console.log("boolean function:", 9 > 10);

console.log("boolean function:", Boolean(-0));
console.log("boolean function:", Boolean(""));

//nullish operator
/*
The ?? operator returns the first argument if it is not nullish (null or undefined).
Otherwise it returns the second argument.
*/
let firstName = null;
let lastName = "thory";
console.log("nullish operator:", (firstName ?? lastName));

//optional chaining operator
let firstName1 = null;
let lastName1 = "thory";
console.log("optional chaining operator:", (firstName1?.lastName1));