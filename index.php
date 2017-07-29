<?php
/**
 * Created by PhpStorm.
 * User: victor
 * Date: 27.07.17
 * Time: 20:12
 */

require __DIR__.'/vendor/autoload.php';

$object2 = new \Vicdev882\Persons\Victor();
echo DateTime::ISO8601;
echo $object2->sayGoodBye();