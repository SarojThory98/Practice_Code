const arr1 = [1, 2, 3, 4, 5, 6];
function fun(val, index, array) {
    console.log(val);
}
arr1.forEach(fun);

//map()
function fun(val, index, array) {
    console.log(val * 2);
}
arr1.map(fun);

//filter()
function fun(val, index, array) {
    return val > 3;
}
console.log(arr1.filter(fun));

//reduce()
function fun(val, index, array) {
    return val;
}
console.log(arr1.reduce(fun));

//reduceRight()
function fun(val, index, array) {
    return val;
}
console.log(arr1.reduceRight(fun));

//every()
function fun(val, index, array) {
    return val > 3;
}
let x = arr1.every(fun);
console.log("every method");
console.log(x);

//some()
function fun(val, index, array) {
    return val > 3;
}
let y = arr1.some(fun);
console.log("some method");
console.log(y);

//find()
function fun(val, index, array) {
    return val > 3;
}
console.log("find method");
console.log(arr1.find(fun));
