try {
    alertt("welcome in js world!!");
}
catch (err1) {
    console.log(err1.message);
}

//try-throw-catch
let x = 2;
try {
    if (x > 2) {
        throw "number is gt 2";
    }
    else if (x == 2) {
        throw "number is 2";
    }
    else {
        throw "number is ls 2";
    }
}
catch (err2) {
    console.log(err2.message);
}
