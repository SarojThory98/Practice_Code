const arr1 = ["1", "5", "2", "4"];
console.log(arr1.sort());
console.log(arr1.reverse()); //by default sort() sort values as string

const arr2 = [25, 100, 30, 10, 50, 300];
console.log(arr2.sort());//incorrect result
console.log(arr2.sort(function (a, b) { return (a - b) }));
console.log(arr2.sort(function () { return 0.5 - Math.random() }));
//max value
console.log(Math.max.apply(null, arr2));
console.log(Math.max(1, 2, 3));

//min value
console.log(Math.min.apply(null, arr2));
console.log(Math.min(1, 2, 3));

//max manually
function maxValue(arr) {
  let len = arr.length;
  let maxvar = -Infinity;
  while (len--) {
    if (arr[len] > maxvar) {
      maxvar = arr[len];
    }
  }
  return maxvar;
}
console.log(maxValue(arr2));