// Faire apparaître la carte de visite quand on clique sur l'icone contact :

document.getElementById('contact').addEventListener('click', afficheCarteVisite)

function afficheCarteVisite() {
    document.getElementById('carteVisite').style.display = 'none'
}

