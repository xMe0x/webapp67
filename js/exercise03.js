const digitize = n => [...`${Math.abs(n)}`].map(i=>parseInt(i));
console.log(digitize(123))