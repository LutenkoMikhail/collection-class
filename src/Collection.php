<?php


namespace src;


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

    public function removeKey($key)
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


    public function check(object $key): bool
    {
    }

    public function remove(object $key)
    {
    }
}