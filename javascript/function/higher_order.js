const birthYear = [1975, 1997, 2002, 1995, 1985];

//Without Higher-order function
/*
const ages = [];
for(let i = 0; i < birthYear.length; i++) {
  let age = 2018 - birthYear[i];
  ages.push(age);
}
// prints [ 43, 21, 16, 23, 33 ]
console.log(ages);
*/

//With Higher-order function map
/*
const ages = birthYear.map (function(year){
	return 2019 - year;
});
*/

//We can make this even shorter using the arrow function syntax:
const ages = birthYear.map(year => 2018 - year);



// prints [ 43, 21, 16, 23, 33 ]
console.log(ages);