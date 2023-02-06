<?php namespace App\Commands\Members;

use App\Commands\Command;
use App\Helpers\Users\ValueObjects\Business;
use App\Helpers\Users\User;
use Illuminate\Http\Request;

class ChangeBusiness extends Command {

    /**
     * @var User
     */
    public $user;

    /**
     * @var Business
     */
    public $business;

    /**
     * @var User
     */
    public $manager;

    /**
     * ChangeBusiness constructor.
     * @param User $user
     * @param User $manager
     * @param Business $business
     */
    function __construct(User $user, User $manager, Business $business)
    {
        $this->user = $user;
        $this->business = $business;
        $this->manager = $manager;
    }

    static function fromForm(Request $request, User $user)
    {
        $business = new Business(
            $request->get('company'),
            $request->get('profession'),
            $request->get('business_url')
        );

        return new static($user, $request->user(), $business);
    }
}