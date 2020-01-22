<?php
require_once '.\vendor\autoload.php';

use \src\Customer;
use \src\Collection;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

echo "<h1>Dev-Pro.net</h1>";
echo "<h3>Sicom Junior PHP Developer.</h3>";
echo "<h3>Test task. </h3>";
echo "<h3>3.1 Collection </h3>";

$collestions = new Collection();

$apollo = new Customer("Apollo", 77);
$collestions->add($apollo, "apollo");
$collestions->add(new Customer("Steve", 44), "steve");
$collestions->add(new Customer("New Steve", 44), "newsteve");
$collestions->add(new Customer("Alex", 34), "alex");
$collestions->add(new Customer("Sava", 64));

foreach ($collestions->getObjectList() as $key => $item) {
    echo $item . "<br>";
}
$collestions->removeKey("steve");

foreach ($collestions->getObjectList() as $key => $item) {
    echo $item . "<br>";
}

echo $collestions->current() . "<br>";
echo "Hash code :" . $collestions->getHash($apollo) . "<br>";

