let arr1 = [1, 2, 3, 4, 5, 6];
let sum = 0;
for (let i = 0; i < arr1.length; i++) {
  sum += arr1[i];
}
console.log("sum of array:", sum);

let sum1;
for (let i = 0, sum1 = 0; i < arr1.length; i++) {
  sum1 += arr1[i];
}
console.log("sum of array:", sum); //we can also omit expression2 but we have to put break condtion otherwise loop will never end

//for in loop
//The JavaScript for in statement loops through the properties of an Object
let obj1 = { key1: "val1", key2: "va2", key3: "val3", key4: "val4" };
let concats = "";
for (let x in obj1) {
  concats += obj1[x];
}
console.log("concatination of obj", concats);

let arr2 = [1, 89, 24, 456, 45];
let sum2 = 0;
for (let x in arr2) {
  sum2 += arr2[x];
}
console.log("sum of arr2 is:", sum2);

//for-of
//The JavaScript for of statement loops through the values of an iterable object.
//It works on arrays, strings, maps etc.
let arr3 = [1, 2, 23, 567];
let sum3 = 0;
for (let x of arr3) {
  sum3 += x;
}
console.log("sum of arr3 is:", sum3);

//for-of in string

let str1 = "asdfghsxdcfgb";
for (let x of str1) {
  console.log(x);
}