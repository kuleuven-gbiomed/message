<?php

namespace Kuleuven\Gbiomed\Message;

/**
 * Interface StorableEvent
 *
 * Indicates that the event can be handled asynchronously eg. for event sourcing.
 *
 * @package Kuleuven\Gbiomed\Message
 */
interface StorableEvent extends Event, StorableMessage
{
}
