<?php

namespace Themysticgeek\LarpVoting;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Themysticgeek\LarpVoting\LarpVoting
 */
class LarpVotingFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'larp-voting';
    }
}
