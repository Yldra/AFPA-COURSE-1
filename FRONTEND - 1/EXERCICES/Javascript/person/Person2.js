class Person {
    constructor(lname,fname,age) {
        this.lname = lname;
        this.fname = fname;
        this.age = age;
    }

    present() {
        console.log("Hello " + this.lname + " " + this.fname)
    }

}

let p1 = new Person("Smith","John",55)
p1.present()


// passer en mode F12 dans le navigateur, puis aller sur console pour voir ce code s'exécuter