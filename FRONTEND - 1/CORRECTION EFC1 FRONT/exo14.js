function bissextile(annee) {
    if ((annee % 4 == 0 && annee % 100 !== 0) || annee % 400 === 0) {
        console.log(annee + " est une année bissextile.")
        // je n'ai pas fait de "return true", car j'ai choisi à la place d'afficher le résultat directement dans la console
        // mais de manière générale, il vaut mieux faire un "return" (par exemple, si on veut pouvoir réutiliser le résultat dans une autre fonction)
    } else {
        console.log(annee + " n'est pas une année bissextile.")
        // même remarque que ci-dessus (console.log à la place du "return false" )
    }
}
    
// Test :
// bissextile(2023)
