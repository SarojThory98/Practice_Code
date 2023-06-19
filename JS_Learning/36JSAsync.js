//callbacks
function myCal(disp, a, b) {
    let sum = a + b;
    disp(sum);
}
myCal(total, 3, 4);
function total(add) {
    console.log(add);
}

//Asynchronous
//Functions running in parallel with other functions are called asynchronous
setInterval(function () { console.log("hello world") }, 3000)
{
    let d = new Date();
    let x = d.getTime();
    console.log(x);
}

//async/await
async function myfun() {
    return ("hello");
}

function myfun1() {
    return Promise.resolve("hello");
}