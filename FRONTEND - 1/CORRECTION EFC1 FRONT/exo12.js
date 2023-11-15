let url = "animalController/modifier/1";
let elt = url.split('/');

let controller = elt[0];
let action = elt[1];
let argument = elt[2];

console.log(controller)
console.log(action)
console.log(argument)