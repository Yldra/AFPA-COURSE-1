
// On peut créer les objets ainsi, en déclarant
// un constructeur d'objet ainsi :
function Personne(nom,prenom,age) {
    this.lname = nom;
    this.fname = prenom;
    this.age = age;

    // methodes
    this.presente = function() {
        console.log("Hello, je m'appelle " + this.fname + " " + this.lname)
    }

    // depuis ES6 les fonctions peuvent s'écrire ainsi
    // on peut rajouter un argument comme pour les fonctions traditionnelles.
    // Cette notation s'appelle Arrow function ou fonction fléchée. (il n'y a pas "function" devant)
    this.presente2 = (mes) => { console.log ( mes + "je m'appelle " + this.fname + " " + this.lname) }
}

//operateur new :
// pour instancier des objets utiliser l'opérateur new
// avec le nom de la fonction et les arguments attendus :
let newPerson1 = new Personne('Smith','John',25)
let newPerson2 = new Personne('Autre','Personne',35)
newPerson1.presente()
newPerson2.presente2("Coucou, ")

// créer ce fichier et tester la création de Personnes



// passer en mode F12 dans le navigateur, puis aller sur console pour voir ce code s'exécuter
