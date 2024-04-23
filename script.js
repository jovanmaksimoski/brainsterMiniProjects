// 1. Use conditions to check if a given number is even. If so , print with
// console.log “ The Number (TheNumberYouWrote) is even ". If the
// number is not even, print " The Number (TheNumberYouWrote) is not
// even".

const checkNumber = (number) => {
  if (number % 2 === 0) {
    console.log("The number " + number + " is even.");
  } else {
    console.log("The number " + number + " is not even.");
  }
};

checkNumber(16);
checkNumber(53);

// 2. Check which numbers from 10 to 100 are even and divisible by 3. Print
// with console.log all those that meet these conditions.

const numbers = (numbers) => {
  for (let i = 10; i <= 100; i++) {
    if (i % 2 === 0 && i % 3 === 0) {
      console.log(i + " is even and divisible by 3.");
    }
  }
};
numbers();

// 3. From the given 3 numbers , find the smallest and largest, and check
// are they prime.
// Example:
// Number = 13;
// Number2 = 15;
// Number3 = 20;
// Smallest - 13 , Largest-20
// The smallest number 13 is prime , The largest number 20 is not prime.

let number1 = -10;
let number2 = 2;
let number3 = -33;

let smallest = Math.min(number1, number2, number3);
let largest = Math.max(number1, number2, number3);

const isPrime = (number) => {
  if (number <= 1) {
    return false;
  }
  for (let i = 2; i <= Math.sqrt(number); i++) {
    if (number % i === 0) {
      return false;
    }
  }
  return true;
};

if (isPrime(smallest)) {
  console.log("The smallest number " + smallest + " is prime.");
} else {
  console.log("The smallest number " + smallest + " is not prime.");
}

if (isPrime(largest)) {
  console.log("The largest number " + largest + " is prime.");
} else {
  console.log("The largest number " + largest + " is not prime.");
}
