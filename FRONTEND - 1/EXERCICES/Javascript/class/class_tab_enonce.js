// instructions : rédiger les fonctions getLongueur() et item() pour qu'elles affichent les résultats attendus


class Tab {
    constructor(tableau) {
        this.tab = tableau
    }

    affiche() {
        console.log(this.tab)
    }

    getLongueur() {
        return this.tab.length
    }

    item() {
        return this.tab[x]
    }
}
// --- classe Tab créée

let T = new Tab([1,2,3,4])
T.affiche() // renvoie [1,2,3,4]
console.log(item(1)) // renvoie 2
console.log(item(76)) // erreur à éviter
console.log(item(-2)) // erreur à éviter
console.log(T.sum()) // renvoie 10


