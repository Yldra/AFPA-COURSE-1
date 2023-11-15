function multiplyBy(number) {
  let closedVar = number;
  return function (x) {
    return x * closedVar;
  };
}

function multiplyBy(number) {
  let closedVar = number;
  return function (x) {
    return x * closedVar;
  };
}

let m2 = multiplyBy(2);
console.log(m2);

console.log(m2(433));

let m4 = multiplyBy(4);

console.log(m4(6));
