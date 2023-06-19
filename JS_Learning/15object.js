const obj1 = {
    key1: "val1",
    key2: "val2",
    key3: "val3",
    key4: "val4"
};
console.log(obj1.key1);

const obj2 = {
    key1: "val1",
    key2: function () {
        return 2 * 3;
    }
};
console.log(obj2.key2);
const person = {
    fname: "saroj",
    lname: "thory",
    fullName: function fun() {
        return this.fname + " " + this.lname;
    }
};
console.log(person);
console.log(person.fullName());
console.log(person.fullName);

console.log(0 == 0);


