
// J'ai fait une fonction permettant de vérifier si on est en présence d'un numéro de téléphone à 10 chiffres commençant par 0
// return true si vrai, false sinon

function tel(numero) {
  let regex = new RegExp(/^0\d{9}$/);
  return regex.test(numero);
}