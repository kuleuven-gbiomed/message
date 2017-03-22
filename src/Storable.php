<?php

namespace Kuleuven\Gbiomed\Message;

/**
 * Interface Storable
 *
 * Indicates that the object can be stored and used later without any lost in the functionality.
 *
 * @package Kuleuven\FileBundle\Command
 */
interface Storable extends ArraySerializable, ArrayUnserializable, Immutable
{
}
