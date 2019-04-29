/*
Let’s say we have an array which contains objects with name and age properties. 
We want to create an array that contains only the persons with full age (age greater than or equal to 18).
*/

const persons = [
  { name: 'Peter', age: 16 },
  { name: 'Mark', age: 18 },
  { name: 'John', age: 27 },
  { name: 'Jane', age: 14 },
  { name: 'Tony', age: 24},
];

//Without Higher-order function

const fullAge = [];
for(let i = 0; i < persons.length; i++) {
  if(persons[i].age >= 18) {
    fullAge.push(persons[i]);
  }
}

//With Higher-order function filter
const fullAge = persons.filter(person => person.age >= 18);

console.log(fullAge);