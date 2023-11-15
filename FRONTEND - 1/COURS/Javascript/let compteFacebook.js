let compteFacebook = {
    amis: {
        'Luke Skywalker': true,
        'Dark Vador': false,
    },
    groupes: {
        maitresJedi: {
            titre: 'les maitres Jedi',
            membres: [ 'Yoda', 'Obi wan']
        },
        lolcats:  {
            titre: 'les mips',
            membres: [ 'Patrick', 'Luc']
        }
    }
}

console.log(compteFacebook.groupes.lolcats.membres[0])

for (let i in compteFacebook.groupes) {
    console.log(i)
}