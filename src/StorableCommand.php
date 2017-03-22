<?php

namespace Kuleuven\Gbiomed\Message;

/**
 * Interface StorableCommand
 *
 * Indicates that the command can be handled asynchronously.
 *
 * @package Kuleuven\Gbiomed\Message
 */
interface StorableCommand extends Command, StorableMessage
{
}
