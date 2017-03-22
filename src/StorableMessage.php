<?php

namespace Kuleuven\Gbiomed\Message;

/**
 * Interface StorableMessage
 *
 * Indicates that the message can be handled asynchronously.
 *
 * @package Kuleuven\Gbiomed\Message
 */
interface StorableMessage extends Message, Storable
{
}
