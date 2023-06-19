/*
Displaying the Object Properties by name
Displaying the Object Properties in a Loop
Displaying the Object using Object.values()
Displaying the Object using JSON.stringify()
*/
const person = {
    fname: "saroj",
    lname: "thory",
    age: "20",
    city: "sikar"
}
console.log(person);
//by name
console.log(person.fname, person.lname, person.age, person.city);

//in loop
console.log("object values shown by loop:");
for (let x in person) {
    console.log(person[x]);
}

//using object.values()
console.log(Object.values(person));

//Using JSON.stringify(). It will convert in string
console.log(JSON.stringify(person));

//JSON.stringify() will not work on functions
const person1 = {
    name: "saroj thory", age: function () {
        return 30;
    }
}
console.log(JSON.stringify(person1));

const person2 = {
    name: "saroj thory", age: function () {
        return 30;
    }
}
person2.age = person2.age.toString();
console.log(JSON.stringify(person2));

//we can also stringify arrays


//JavaScript Accessors (Getters and Setters)
const person3 = {
    name: "saroj thory",
    language: "en",
    lang: "",
    get fun1() {
        return this.language;
    },
    get fun2() {
        return this.language.toUpperCase();
    },
    set fun3(lang1) {
        this.lang = lang1.toUpperCase;
    }
};
person3.fun3 = "en";
console.log("person3 language is:", person3.fun1);
console.log("person3 language is:", person3.fun2);
console.log("person3 language is:", Object.values(person3));