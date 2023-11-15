let journal = [
    {
    titre: "titre1",
    events: ["work", "touched tree", "pizza", "running", "television"],
    },
    {titre: "titre2",
    events: ["work", "ice cream", "cauliflower", "lasagna", "touched tree", "brushed teeth"],
    },
    {titre: "titre3",
    events: ["weekend", "cycling", "break", "peanuts", "beer"],
    },
]
let journal = [
    {
    titre: "titre1",
    events: ["work", "touched tree", "pizza", "running", "television"],
    },
    {titre: "titre2",
    events: ["work", "ice cream", "cauliflower", "lasagna", "touched tree", "brushed teeth"],
    },
    {titre: "titre3",
    events: ["wweekend", "cycling", "break", "peanuts", "beer"],
    },
]

let journal1 = {
    titre: "titre1",
    events: ["work", "touched tree", "pizza", "running", "television"],
    }

let journal2 = {
    titre: "titre2",
    events: ["work", "ice cream", "cauliflower", "lasagna", "touched tree", "brushed teeth"],
}

let journal3 = {
    titre: "titre3",
    events: ["weekend", "cycling", "break", "peanuts", "beer"],
}

let journalTab = [journal1, journal2, journal3]
/* parcourir cet objet avec la fonction forEach et crée une page html avec document.write*/

console.log(journal)
console.log(journal[01].titre)
journal.forEach ((v) => {console.log(v)})
journalTab.forEach ((p) => {console.log(p.titre)})
journalTab.events.forEach ((p) => {console.log(p.events)})
journalTab.forEach ((p) => {document.write("<h1>p.titre</h1>")})
/* journal.events.forEach ((v) => {console.log(v)}) */


/* journal.forEach ( (v,i) => console.log(v,i)) */

/* <h1>titre1</h1>
<ul>
    <li>work</li>
    <li>touch tree</li>
    <li>pizza</li>
    <li>running</li>
    <li>television</li>
</ul>

<h1>titre2</h1> ...etc... */

/* parcourir cet objet avec la fonction forEach et crée une page html avec document.write*/

journal.forEach ( (v) => {console.log(v)})

<h1>titre1</h1>
<ul>
    <li>work</li>
    <li>touch tree</li>
    <li>pizza</li>
    <li>running</li>
    <li>television</li>
</ul>

<h1>titre2</h1> ...etc...