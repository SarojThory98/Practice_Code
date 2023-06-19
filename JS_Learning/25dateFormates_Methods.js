const d1 = new Date("2022");
console.log(d1);

//ISO date-time
const d2 = new Date("2022-11-14T12:43:10z");
console.log(d2);

const d3 = new Date("2022-11-14T12:43:10-06:30");
console.log(d3);

//Date methods
const date1 = new Date();
console.log(date1.getFullYear());
console.log(date1.getYear()); //incorrect not use this method
console.log(date1.getMonth());
console.log(date1.getDate());
console.log(date1.getDay());
console.log(date1.getHours());
console.log(date1.getMinutes());
console.log(date1.getSeconds());
console.log(date1.getMilliseconds());
console.log("time:", date1.getTime());
console.log(Date.now());

let d = new Date();
let diff = d.getTimezoneOffset();
console.log("timeZone difference in minutes:", diff);