<?php
require_once '.\vendor\autoload.php';

use \src\Customer, \src\Collection;

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

echo "<h1>Dev-Pro.net</h1>";
echo "<h3>Sicom Junior PHP Developer.</h3>";
echo "<h3>Test task. </h3>";
echo "<h3>3.1 Collection </h3>";

$collestions = new Collection();
$apollo = new Customer("Apollo", 77);
$sigma = new Customer("Sigma", 12);

$collestions->add($apollo, "apollo");
$collestions->add(new Customer("Steve", 44), "steve");
$collestions->add(new Customer("New Steve", 44), "newsteve");
$collestions->add(new Customer("Alex", 34), "alex");
$collestions->add(new Customer("Sava", 64), "sava");


echo 'Collection  : ' . PHP_EOL;
foreach ($collestions->getObjectList() as $key => $item) {
    echo $item . PHP_EOL;
}

$collestions->remove("steve");

echo 'Collection  :  ' . PHP_EOL;
foreach ($collestions->getObjectList() as $key => $item) {
    echo $item . PHP_EOL;
}

echo 'Last added object :' . $collestions->current() . PHP_EOL;
echo 'Object :' . $apollo . '  Hash code : ' . $collestions->getHash($apollo) . PHP_EOL;

echo 'Object :' . $apollo . PHP_EOL;
if ($collestions->check("apollo") === true) {
    echo 'Exists in the collection.' . PHP_EOL;
}

echo 'Object :' . $sigma . PHP_EOL;
if ($collestions->check("sigma") !== true) {
    echo 'Does not exist in the collection.' . PHP_EOL;
}

Collection::removeAll($collestions);
echo 'All items in the collection have been deleted.' . PHP_EOL;
echo 'The number of items in the collection : '.count($collestions->getObjectList()).PHP_EOL;

echo 'Collection  :  ' . PHP_EOL;
if (count($collestions->getObjectList()) !== 0) {
    foreach ($collestions->getObjectList() as $key => $item) {
        echo $item . PHP_EOL;
    }
} else {
    echo 'There are no items in the collection.' . PHP_EOL;
}

/* T.E comments:
 * 1.1 Why weren't the methods check and removeAll implemented?
 * 1.2 Duplicated method remove, I saw you did removeKey, then the remove method is superfluous.
 */
