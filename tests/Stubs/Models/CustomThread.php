<?php

namespace Cmgmyr\Messenger\Tests\Stubs\Models;

use Cmgmyr\Messenger\Models\Thread;
use Cmgmyr\Messenger\Traits\HasUUID;

class CustomThread extends Thread
{
    use HasUUID;

    protected $table = 'custom_threads';
}
