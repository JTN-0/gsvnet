<?php namespace App\Commands\Forum;

use App\Commands\Command;

class DislikeReplyCommand extends Command {

    public $replyId;
    public $userId;

    function __construct($replyId, $userId)
    {
        $this->replyId = $replyId;
        $this->userId = $userId;
    }
}