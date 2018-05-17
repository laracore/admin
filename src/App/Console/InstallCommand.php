<?php

namespace Laracore\Admin\App\Console;

use Illuminate\Console\Command;
use Laracore\Core\Framework\Commands\Install;

class InstallCommand extends Command
{
    /**
     *  install class.
     * @var object
     */
    protected $install;
    /**
     * The name and signature of the console command.
     *
     * @var string
     * @translator laravelacademy.org
     */
    protected $signature = 'laracore:admin:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'admin packages install';

    public function __construct(Install $install)
    {
        parent::__construct();
        $this->install = $install;
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info($this->install->migrate());
        $this->info($this->install->publish('admin:config'));
        $this->info($this->install->seed(\Laracore\Admin\Databases\seeds\AdminConfigTableSeeder::class));
    }
}
