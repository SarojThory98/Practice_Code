const d1 = Date()
console.log(d1);
const d2 = new Date("2022-12-16");
console.log(d2);

/*
new Date()
new Date(date string)
new Date(year,month)
new Date(year,month,day)
new Date(year,month,day,hours)
new Date(year,month,day,hours,minutes)
new Date(year,month,day,hours,minutes,seconds)
new Date(year,month,day,hours,minutes,seconds,ms)
new Date(milliseconds)
*/
const d3 = new Date("december 14, 2022 12:02:50");
console.log(d3.toString());

const d4 = new Date(2022, 12, 14, 12, 10, 50, 20);
console.log(d4.toString());

const d5 = new Date(2022);//it will be treated as miliseconds
console.log(d5);

//One and two digit years will be interpreted as 19xx
const d6 = new Date(22, 11, 14);
console.log(d6);

const d7 = new Date(-2022); //minus miliseconds
console.log(d7.toDateString());

const d8 = new Date(2022, 11, 14);
console.log(d8.toUTCString());

const d9 = new Date(2022, 11, 14);
console.log(d9.toISOString());
