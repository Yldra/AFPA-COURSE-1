<?php

require_once 'Corps.php';
require_once 'Head.php';
require_once 'Tronc.php';
require_once 'Jambe.php';

echo "<pre>";
$jambe_brian = new Jambe('poilu');
$head_brian = new Head('marrons', 'depardieu', 'pulpeuse');
$tronc_brian = new Tronc('F');

// head - jambe - tronc
$brian = new Corps($head_brian, $jambe_brian, $tronc_brian);

$brian->getHead()->setEyeColor('purple');

print_r($jambe_brian);
print_r($head_brian);
print_r($tronc_brian);
print_r($brian);
