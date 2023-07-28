<?php

namespace App\PropertyContains;

trait PropertyContainerTrait
{
    private array $data = [];

    public function setProperty($property, $value)
    {
        $this->data[$property] = $value;
    }

    public function getProperty($property)
    {
        return $this->data[$property] ?? null;
    }

    public function deleteProperty($property)
    {
        if (!isset($this->data[$property])) {
            return;
        }

        unset($this->data[$property]);
    }
}
