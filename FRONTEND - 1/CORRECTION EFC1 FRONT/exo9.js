// IIFES
// execution immediate de fonction anonyme déclarée et définie 
// el l'entourant de parenthèse et ajoutant l'execution de cette 
// fonction par ().


// pas IIFES
function affiche(mot) {
 console.log(mot)
}
affiche(mot)

// IIFES 
(function() {
  console.log('NOW');
})();

// IIFES avec param.
(function(mot) {
  console.log(mot);
})('NOW');

