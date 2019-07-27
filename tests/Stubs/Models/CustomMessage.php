<?php

namespace Cmgmyr\Messenger\Tests\Stubs\Models;

use Cmgmyr\Messenger\Models\Message;
use Cmgmyr\Messenger\Traits\HasUUID;

class CustomMessage extends Message
{
    use HasUUID;

    protected $table = 'custom_messages';
}
