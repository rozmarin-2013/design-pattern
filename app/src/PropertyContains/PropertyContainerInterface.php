<?php

namespace App\PropertyContains;

interface PropertyContainerInterface
{
    function setProperty($propertyName, $value);
    function getProperty($propertyName);
    function deleteProperty($propertyName);
}