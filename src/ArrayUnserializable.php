<?php

namespace Kuleuven\Gbiomed\Message;

use Kuleuven\Gbiomed\Message\Exception\InvalidSerializedDataException;

/**
 * Interface Unserializable
 *
 * Indicates that the implementing class knows how to unserialize data to a new object of the class.
 *
 * @package Kuleuven\Gbiomed\Message
 */
interface ArrayUnserializable
{

    /**
     * Universalizes an object of the implementing class based on the given data.
     *
     * Important! The method MUST return instance of a new object and not inject the data into an existing object!
     *
     * @param array $serializedData The array containing all required data for unserialization.
     *
     * @return object|static New object based on serialized data.
     *
     * @throws InvalidSerializedDataException When the given data makes it impossible to unserialize the object.
     */
    public static function unserialize(array $serializedData);

}
