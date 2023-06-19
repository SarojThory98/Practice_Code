//js object are written in name:value pair
//types of object creation
//method1
const person1 = { fname: "saroj", lname: "thory", age: 20 };
console.log(person1);

//method2
const person2 = {}
person2.fname = "SAROJ", person2.lname = "Thory";
console.log(person2);

//method3
const person3 = new Object();
person3.fname = "saroj";
person3.lname = "thory";
console.log(person3);

//OBJECT PROPERTIES

//accessing js properties
/*
objName.property
objName["property"]
objName[expression]
*/

//add new properties to object
person3.age = "20";
console.log(person3);

//delete a property
delete person3.age; //or delete person3[age]
console.log(person3);

//nested objects
let obj1 = {
    k1: "v1", k2: "v2",
    k3: {
        k31: "v31",
        k32: "v32",
        k33: "v33"
    },
    k4: "v4"
}
console.log(obj1);
console.log(obj1.k3.k31);
//or
console.log(obj1.k3['k32']);
//or
console.log(obj1['k3']['k32']);

//values in array can be objects and values in objects can be arrays


//object methods
const obj2 = {
    key1: "val1", key2: "val2", key3: "val3", key4: function fun() {
        return this.key1 + this.key2 + this.key3;
    }
}
console.log(obj2.key4());

const obj3 = {
    key1: "val1", key2: "val2", key3: "val3", key4: function () {
        return (this.key1 + this.key2 + this.key3).toUpperCase();
    }
}
console.log(obj3.key4());