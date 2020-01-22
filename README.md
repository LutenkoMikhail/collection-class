3.1 Collection
Write PHP class, which represent a Collection of data, where object is key (See
https://www.php.net/manual/ru/class.splobjectstorage.php
​
for example). Class should contain these
methods:
Method  Parameters  Return  Description
add  object $key
mixed $data = NULL
-
Adds an object inside the
storage, and optionally
associate it to some data.
remove  object $key  -  Removes the object from
the storage.
getHash  object $object  string  This method calculates an
identifier for the objects.
You should use any hash
function
current  object  Return last added object
getObjectList  array  Return list of all added
objects
check  object $object  boolean  Function should return true