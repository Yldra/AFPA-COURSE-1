
let journal = [
    {
    titre: "titre1"     ,
    events: ["work", "touched tree", "pizza", "running", "television"],
    },
    {
    titre: "titre2"     ,
    events: ["work", "ice cream", "cauliflower", "lasagna", "touched tree", "brushed teeth"],
    },
    {
    titre: "titre3"     ,
    events: ["weekend", "cycling", "break", "peanuts", "beer"],
    },
    {
    titre: "l'été"      ,
    events: ["weekend", "cycling", "break", "peanuts", "beer"],
    },
] ;

journal.forEach(function(elt) {
        document.write(`<h1> ${elt.titre} </h1>`)
        document.write("<ul>");
        elt.events.forEach(function(evenementt) {
                document.write(`<li> ${evenementt} </li>`)
        })
        document.write("</ul>");
})
