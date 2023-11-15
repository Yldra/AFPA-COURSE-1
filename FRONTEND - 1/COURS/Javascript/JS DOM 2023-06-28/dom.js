

// Donne-moi la référence sur l'objet div ayant l'id overview.
let overview = document.getElementById('overview');
// overview.innerText = "UN AUTRE TEXTE"

// Fait les changements au bout de 3 (puis 6) secondes :
// setTimeout(function(){overview.innerText = "<b>Un autre texte</b>"},3000)
// 3000 : 3000 ms avant que ça s'affiche
// Avec innerText, le texte n'est pas interprété : les balises sont lues commme du texte
// Pour avoir une interprétation, il faut utiliser innerHTML :
// setTimeout(function(){overview.innerHTML = "<b>Un autre texte</b>"},6000)

// Ecoute l'évènement click sur le bouton OK :

let boutonGO = document.getElementById('go')
// Ajout d'un écouteur d'évènement :
// 1er argument de addEventListener = event , 2ème la fonction sera exécutée :
// boutonGO.addEventListener('click', function(){ alert("click sur bouton GO")})
boutonGO.addEventListener('click', function(){ overview.innerHTML = "<b>Click sur bouton GO</b>" })

// Donne-moi les éléments appartenant à la classe article :
let lesArticles = document.getElementsByClassName('article') // Ne pas oublier le "s" dans getElements (car il y a plusieurs éléments ici). (Ca va ramener un tableau, car il y a plusieurs éléments)
console.log(lesArticles)

let verts = document.getElementsByClassName('vert')
let rouges = document.getElementsByClassName('rouge')
// Donne un objet de type HTMLCollection (parcours avec for...of) :
for (let i of verts) {
    // console.log(i)
    i.classList.add('newvert') // il vaut mieux utilser cette méthode avec les classes, plutôt qu'avec les styles comme ci-dessous
    // i.style.color = 'green'
    // i.style.backgroundColor = 'yellow'
}
for (let i of rouges) {
    // console.log(i)
    i.classList.add('newrouge')
    // i.style.color = 'red'
}

// Sélection par élément HTML :
// let lesp = document.getElementsByTagName('p')
// for (let elt of lesp) {
//     elt.classList.add('bord')
    // Créer un sélecteur .bord { border: 1px solid black ;}
    // dans le CSS.

// (Création d'une fonction qui sera utilisée pour être déclenchée lorsqu'un évènement se produira (cf click sur boutton ci-après) :)
function border1() {
    let lesp = document.getElementsByTagName('p')
    for (let elt of lesp) {
        elt.classList.add('bord')
    }
}

// On récupère l'ID de l'élément (getElementById) et on lui ajoute un événement (addEventListener)
// (ici, quand il y a l'évènement click, on appelle la fonction border qui ajoute un bord (défini dans le CSS) aux paragraphes lesp)
document.getElementById('border').addEventListener('click', border1)

// element.classList.add("my-class");

// Enlever le bord en cliquant sur :
function removeBord() {
    let lesp = document.getElementsByTagName('p')
    for (let elt of lesp) {
        elt.classList.remove('bord')
    }
}

document.getElementById('removeBorder').addEventListener('click', removeBord)


// Si on veut un seul boutton qui met / enlève la bordure :
let leborder = false;
let lesp = document.getElementsByTagName('p')
function border() {
    if (leborder == false) { // on aurait aussi pu mettre if (!border)
        leborder = true
        for (let elt of lesp) {
            elt.classList.add('bord')
        }
    } else {
        leborder = false
        for (let elt of lesp) {
            elt.classList.remove('bord')    
        }
        
    }
}

document.getElementById('borderOnOff').addEventListener('click', border)