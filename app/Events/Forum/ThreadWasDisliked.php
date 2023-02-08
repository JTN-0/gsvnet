<?php

namespace App\Events\Forum;

use App\Events\Event;
use Illuminate\Queue\SerializesModels;

class ThreadWasDisliked extends Event
{
    use SerializesModels;

    public $threadId;

    public $userId;

    public function __construct($threadId, $userId)
    {
        $this->threadId = $threadId;
        $this->userId = $userId;
    }
}
