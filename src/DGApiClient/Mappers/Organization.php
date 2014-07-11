<?php

namespace DGApiClient\Mappers;

class Organization extends Mapper
{
    /* @var int */
    public $id;

    /* @var string */
    public $name;

    /**
     * @param array $data
     * @param string $className
     * @return Organization
     * @throws \DGApiClient\Exceptions\Exception
     */
    public static function factory($data, $className = __CLASS__)
    {
        return parent::factory($data, $className);
    }
}