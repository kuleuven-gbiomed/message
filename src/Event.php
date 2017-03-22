<?php

namespace Kuleuven\Gbiomed\Message;

/**
 * Interface Event
 *
 * Indicates that the object conveys message about past event.
 *
 * Important! Past event can not change therefore the object MUST be immutable.
 *
 * @package Kuleuven\Gbiomed\Message
 */
interface Event extends Message, Immutable
{
}
