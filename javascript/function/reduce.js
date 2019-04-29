//Let’s say we have to sum an array of numbers:

const arr = [5, 7, 1, 8, 4];

// Without Higher-order function

let sum = 0;
for(let i = 0; i < arr.length; i++) {
  sum = sum + arr[i];
}

// With Higher-order function reduce

const sum = arr.reduce(function(accumulator, currentValue) {
  return accumulator + currentValue;
});

// We can also provide an initial value 10 to this function:

const sum = arr.reduce(function(accumulator, currentValue) {
  return accumulator + currentValue;
}, 10);
// prints 35
console.log(sum);

// prints 25
console.log(sum);