const animals = [
  { name: "cat", size: "little", weight: 5 },
  { name: "puppy", size: "little", weight: 10 },
  { name: "lion", size: "medium", weight: 150 },
  { name: "elephant", size: "big", weight: 5000 }
];

let noms_animaux = [];

// Question 1 : script avec la fonction for() :
for (let i = 0; i < animals.length; i++) {
  noms_animaux.push(animals[i].name);
}

// Question 2 : script avec la fonction foreach() :
animals.forEach((animal) => noms_animaux.push(animal.name));

// Question 3 : script avec la fonction map() :
noms_animaux = animals.map(function(animal) {
  return animal.name;
});


let petits_animaux = [];

// Question 4 : script avec une boucle for :
for (let i = 0; i < animals.length; i++) {
  if (animals[i].size === "little") {
    petits_animaux.push(animals[i]);
  }
}

// Question 5 : script avec filter :
petits_animaux = animals.filter(function(animal) {
  return animal.size === "little";
});
