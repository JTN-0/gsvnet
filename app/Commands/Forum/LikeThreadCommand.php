<?php

namespace App\Commands\Forum;

use App\Commands\Command;

class LikeThreadCommand extends Command
{
    public $threadId;

    public $userId;

    public function __construct($threadId, $userId)
    {
        $this->threadId = $threadId;
        $this->userId = $userId;
    }
}
