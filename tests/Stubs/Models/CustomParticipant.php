<?php

namespace Cmgmyr\Messenger\Tests\Stubs\Models;

use Cmgmyr\Messenger\Models\Participant;
use Cmgmyr\Messenger\Traits\HasUUID;

class CustomParticipant extends Participant
{
    use HasUUID;

    protected $table = 'custom_participants';
}
