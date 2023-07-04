<?php

namespace App\Console\Commands;

use App\Facades\CommandService;
use Illuminate\Console\Command;

class OrderReport extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'print:report {path}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $path = $this->argument('path');
        if (CommandService::reportOrder($path)) {
            $this->info('File was successfully added');
        }
    }
}
