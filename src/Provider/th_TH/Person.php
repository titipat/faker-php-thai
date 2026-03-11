<?php

namespace Titipat\Faker\Provider\th_TH;

class Person extends \Faker\Provider\Person
{
    /**
     * Inspired by https://github.com/FakerPHP/Faker/blob/2.0/src/Provider/ar_SA/Person.php
     * The checksum is not calculated
     * 
     * @example 1234567890123
     */
    public static function nationalIdNumber()
    {
        return static::numerify('#############');
    }
}
