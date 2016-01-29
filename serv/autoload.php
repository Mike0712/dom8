<?php
function __autoload($className)
{
    $classNameParts = explode('\\', $className);
    unset($classNameParts[0]);
    $className = implode('/', $classNameParts);
    require __DIR__ . '/../classes/' . $className . '.php';
}