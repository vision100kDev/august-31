<?php

require_once ('Car.php');

$bmw2007 = new Car('bmw', 'Big Eye', 2007, 'AAAAA', 'BBB123', 'blue');
$bmw2008 = new Car('bmw', 'Big Eye', 2008, 'AAAAAcc', 'BBB12cccc3', 'black');
$audi2023 = new Car('audi', 'Latest', 2023, 'ASSSJ12', 'YHSSHH223', 'red');

echo $bmw2007->getType();
echo "<br/>";

$bmw2007->setType('BMW Series');

echo $bmw2007->getType();

?>

