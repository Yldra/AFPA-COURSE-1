// début objet
const chevy01 = {
    make: 'Chevy',
    model: 'Bel Air',
    year: 1957,
    color: 'red',
    passengers: 2,
    convertible: false, 
    mileage: 1021,
    started: false,
    fuel: 0,
    drive: function() {
        return "Vroum la chevy01"
    },
    presenter: function(b) {
        // document.write(b+" presentation de la chevy " + this.model )
        return b+"présentation de la Chevy " + this.model + ". " + this.drive()
    },
    demarrer: function() {
        // ne demarrer que si il y a du fuel
        // sinon mettre du fuel dans le reservoir avec une fonction
    },
    remplirReservoir: function() {

    }
}
//fin objet

document.write("<h1>Chevy01</h1>")
document.write(chevy01.make)
document.write("<br>")

let z = chevy01.presenter("Bonjour, ")
document.write(z)
document.write("<br>")

y = chevy01.demarrer()
document.write(y)
