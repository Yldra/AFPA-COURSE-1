Gérer une classe en PHP qui permet de distinguer des personnes:

# Folder : c:/xampp/htdocs/php-objet/humain
# Files : 
# - person.php
# - index.php

Attributs et/ou propriétés :
- first_name
- last_name
- birth_date
- street_number
- street
- address_code
- city
- phone
- email

Créer un constructeur 
# Constructeur de la Class Address :
# public function __construct(int $sm, string $st, int $ac, string $c) {
        $this->street_number = $sm;
        $this->street = $st;
        $this->address_code = $ac;
        $this->city = $c;
    }

# Constructeur de la Class Identity :
# public function __construct(string $fn, string $ln, int $bd, int $ph, string $eml) {
        $this->first_name = $fn;
        $this->last_name = $ln;
        $this->birth_date = $bd;
        $this->phone = $ph;
        $this->email = $eml;
    }

Créer des Getters et des Setters
<!-- setters (renseigne) -->
# $identity1->setFirstName('Brian');
# $identity1->setLastName('Kergutul');
# $identity1->setBirthDate('03/09/1994');
# $identity1->setPhone('0666987096');
# $identity1->setEmail('bkergutul.contact@gmail.com');

<!-- getters (affiche) -->
# echo "Identity 1: <br>";
# echo $identity1->getFirstName()."<br>";
# echo $identity1->getLastName()."<br>";
# echo $identity1->getBirthDate()."<br>";
# echo $identity1->getPhone()."<br>";
# echo $identity1->getEmail()."<br>";

Créer quelques personnes dans index.php
# $identity1 = new Identity('Brian','Kergutul','03/09/1994','0666987096','bkergutul@gmail.com',$address1);
# $identity2 = new Identity('Darth','Maul','09/09/2009','0102030405','maul@gmail.com',$address2);
# $identity3 = new Identity('Obiwan','Kenobi','03/03/2003','1234567890','kenobi@gmail.com',$address3);
# $identity4 = new Identity('Anakin','Skywalker','01/01/2001','0123456789','vader@gmail.com',$address4);