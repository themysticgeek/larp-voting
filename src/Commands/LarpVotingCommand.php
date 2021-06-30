<?php

namespace Themysticgeek\LarpVoting\Commands;

use Illuminate\Console\Command;

class LarpVotingCommand extends Command
{
    public $signature = 'larp-voting';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}
