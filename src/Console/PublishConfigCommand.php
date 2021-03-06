<?php

namespace SwaggerLume\Console;

use SwaggerLume\Console\Helpers\Publisher;
use Illuminate\Console\Command;

class PublishConfigCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'swagger-lume:publish-config';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish config';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function fire()
    {
        $this->info('Publish config files');

        (new Publisher($this))->publishFile(
            realpath(__DIR__.'/../../config/').'/swagger-lume.php',
            base_path('config'),
            'swagger-lume.php'
        );
    }
}
