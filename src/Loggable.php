<?php

namespace Kuleuven\Gbiomed\Message;

/**
 * Interface Loggable
 *
 * Indicates that an object is intended to be logged - serialized and stored, but without regard for the full original
 * functionality ie. it can, but does not need to be unserializable.
 *
 * @package Kuleuven\Gbiomed\Message
 */
interface Loggable extends ArraySerializable
{
}
