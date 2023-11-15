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
        return ("Vroum la chevy01")    
    },
    presenter: function() {
        document.write("[Fonction presenter :] Présentation de la chevy " + this.model) //this se rapporte à cet objet dans lequel on est
    },
    presenter2: function(b) {
        document.write("[Fonction presenter 2 :]" + b + "présentation de la chevy " + this.model)
    },
    presenter3: function(b) {
        return b+"présentation de la chevy " + this.model
    },
    presenter4: function(b) {
        return b+"présentation de la chevy " + this.model + " " + this.drive()
    },
    demarrer: function() {
        //ne démarrer que s'il y a du fuel
        //sinon mettre du fuel dans le réservoir avec une fonction

        // if (this.fuel > 0) {
        //     this.started=true;
        //     return "Je démarre";
        // } else {
        //     this.remplirReservoir();
        //     this.started=true;
        //     return "Je démarre";
        // }

        if (this.fuel == 0) {
            this.remplirReservoir();
        }
        this.started=true;
        return "Je démarre avec " + this.fuel + " litres";          
    },
    remplirReservoir: function() {
        return this.fuel = 100;        
    },
    stop: function() {
        this.started=false;
        return "Je m'arrête";
        
    },
}
// fin objet

document.write("<h1>Chevy01</h1>")
document.write(chevy01.make)
document.write("<br>")

//chevy01.drive(); // lancer en mode F12 pour voir "Vroum la voiture" (sinon, document.write(chevy01.drive) à la place de console.log dans drive pour le voir sans passer par F12)

chevy01.presenter()
document.write("<br>")
chevy01.presenter2('bonjour')
document.write("<br>")
let z = chevy01.presenter3('Bonjour, ')
document.write(z)
document.write("<br>")
let y = chevy01.presenter4('Bonjour, ')
document.write(y)
document.write("<br>")

document.write(chevy01.demarrer())
document.write("<br>")
document.write("started = " + chevy01.started + " (carburant disponible : " + chevy01.fuel + " litres)")
document.write("<br>")

let x = chevy01.stop()
document.write(x)
document.write("<br>")
document.write("started = " + chevy01.started)



