<?php

namespace App\Helpers\Senates;

use Illuminate\Database\Eloquent\Model;
use Laracasts\Presenter\PresentableTrait;

class Senate extends Model
{
    use PresentableTrait;

    protected $guarded = [];

    public static $rules = [];

    public $presenter = 'App\Helpers\Senates\SenatePresenter';

    public function members()
    {
        return $this->belongsToMany('App\Helpers\Users\User', 'user_senate')
            ->withPivot('function')->orderBy('function', 'ASC');
    }
}
