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

    item(x) {
        let position = this.tab[x]
        if (x < 0) {
        	return "Erreur - entrer un nombre > 0"
        } else if (x > this.tab.length - 1) {
        	return "Erreur - entrer un nombre < " + this.tab.length
        } else
        	return position;
    }
     
    sum() {
    		let S = 0;
        for (let i = 0 ; i < this.tab.length ; i++) {
        	S = S + this.tab[i];
        }
        return S;
		}
}
// --- classe Tab créée

let T = new Tab([1,2,3,4])
T.affiche() // renvoie [1,2,3,4]
console.log(T.getLongueur())
console.log(T.item(-2))
console.log(T.item(10))
console.log(T.item(2))
/* console.log(item(1)) // renvoie 2
console.log(item(76)) // erreur à éviter
console.log(item(-2)) // erreur à éviter */
console.log(T.sum()) // renvoie 10


