function Person(name, age, city) {
  this.p_name = name,
    this.p_age = age,
    this.p_city = city,
    this.p_gender = "female";
}
const obj1 = new Person("saroj", 20, "city");
console.log(obj1);