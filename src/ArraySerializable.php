<?php

namespace Kuleuven\Gbiomed\Message;

/**
 * Interface Serializable
 *
 * Indicates that an object can be serialized.
 *
 * PHP provides two similar interfaces:
 *
 * @see     \Serializable
 * @see     \JsonSerializable
 *
 * Neither of them was used, because of certain quirks:
 *
 * The \Serializable interface breaks Interface Segregation Principle. No client should be forced to depend on methods
 * it does not use. The unserialize method is not always necessary @see Loggable. It also enforces specific format of
 * serialized data, while this interface does not concern itself with the specific format.
 *
 * The \JsonSerializable interface is certainly better designed, but again it hints on the specific format.
 * It is important to note though that the output of the @see ArraySerializable::serialize() method must work without
 * issues when piped to the @see \JsonSerializable::jsonSerialize() method.
 *
 * @package Kuleuven\Gbiomed\Message
 */
interface ArraySerializable
{

    /**
     * Serializes the object or part of it into an array of scalars or nested arrays containing scalars.
     *
     * Important! The resulting array specifically MUST NOT contain resources and objects.
     *
     * @return array The array of scalars containing the object data.
     */
    public function serialize();

}