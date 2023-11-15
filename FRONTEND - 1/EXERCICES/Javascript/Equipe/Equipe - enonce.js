// Voici un exemple un constructeur d'objets (member)  ( puis un constructeur permettant d'insérér les membres dans un objet team)
function member(id, name, grade) {
  this.id       = id;
  this.name     = name;
  this.grade    = grade;
  this.toString = function() {
    return "ID: "+this.id+", Name: "+this.name+", Grade: "+this.grade;
  }
}
 
function team() {
  this.members  = new Array();
  this.add      = function(member) {
    var index           = this.members.length;
    this.members[index] = member;
    return index;
  }
  this.toString = function() {
    return this.members.join("\n");
  }
}
 
var myTeam = new team();
 
myTeam.add(new member(42, "Alice", "ICT C"));
myTeam.add(new member(43, "Abdelhamid", "ICT C"));
myTeam.add(new member(44, "Baya", "ICT C"));
myTeam.add(new member(45, "Firmus", "ICT B"));
myTeam.add(new member(46, "Jean", "ICT C"));
myTeam.add(new member(47, "Badria", "ICT A"));
myTeam.add(new member(48, "Lalla", "ICT C"));
myTeam.add(new member(49, "Souleymane", "ICT B"));
 
console.log(myTeam); 