<?php


namespace src;


use Exception;

class Collection
{
    private $items = array();

    public function add(object $key, $data = NULL)
    {
        if ($data == null) {
            $this->items[] = $key;
        } else {
            if (isset($this->items[$data])) {
                throw new Exception ("Key  $data already in use.");
            } else {
                $this->items[$data] = $key;
            }
        }
    }

    public function remove($key)
    {
        if (isset($this->items[$key])) {
            unset($this->items[$key]);
        } else {
            throw new Exception("Invalid key $key.");
        }
    }

    public function getObjectList(): array
    {
        return $this->items;
    }

    public function getHash(object $key): string
    {
        return spl_object_hash($key);
    }

    public function current(): object
    {
        return end($this->items);
    }


    public function check($key): bool
    {
        return isset($this->items[$key]);
    }


    static public function removeAll(object $collection)
    {
        foreach (array_keys($collection->getObjectList()) as $key) {
            $collection->remove($key);
        }
    }
}