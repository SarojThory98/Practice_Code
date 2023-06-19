const arr1 = [1, 2, 3, 4, 5];
console.log(arr1);

const arr2 = ["element1", "element2", "element3", "element4"];
console.log(arr2);

const arr3 = [];
arr3[0] = 20, arr3[1] = 30;
console.log(arr3);

const arr4 = new Array(); //not  preferable
arr4[0] = 10, arr4[2] = 30;
console.log(arr4);

const arr5 = ["element2", "element1", 1, 2, 0];
console.log(arr5);
console.log(typeof arr5);
console.log(arr5.length);
console.log(arr5.sort());

//adding array elements
arr5.push(22);
console.log(arr5);
//another method
arr5[arr5.length] = "element3";
console.log(arr5);

//sometimes object array generate unexpected result
const arr6 = new Array(33, 20);
console.log(arr6);
const arr7 = new Array(33);
console.log(arr7);

//typeof returns object insted of array
//solution1
console.log(Array.isArray(arr5));
//solution2
console.log(arr5 instanceof Array);
