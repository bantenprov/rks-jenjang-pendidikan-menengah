<?php namespace Bantenprov\RKSJenPenMgh\Console\Commands;

use Illuminate\Console\Command;

/**
 * The RKSJenPenMghCommand class.
 *
 * @package Bantenprov\RKSJenPenMgh
 * @author  bantenprov <developer.bantenprov@gmail.com>
 */
class RKSJenPenMghCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'bantenprov:rks-jen-pen-mgh';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Demo command for Bantenprov\RKSJenPenMgh package';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->info('Welcome to command for Bantenprov\RKSJenPenMgh package');
    }
}
