let collection =[
    {piece: "Robe Classe",
    description: ["Noir","42","25€"]},
    {piece: "Pantalon Femme",
    description: ["Blanc","40","28€"]},
    {piece: "T-shirt Femme",
    description: ["Rose","38","35€"]},
];


collection.forEach( (elt) => {
    document.write("<h3>" + elt.piece + "</h3>");
    document.write("<ul>");
    elt.description.forEach( (detail) => {
        document.write("<li>" + detail + "</li>")
    })
    document.write("</ul>");
});