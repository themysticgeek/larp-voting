<?php

namespace Themysticgeek\LarpVoting;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use Themysticgeek\LarpVoting\Commands\LarpVotingCommand;

class LarpVotingServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('larp-voting')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_larp-voting_table')
            ->hasCommand(LarpVotingCommand::class);
    }
}
