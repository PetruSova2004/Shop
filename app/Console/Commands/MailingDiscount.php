<?php

namespace App\Console\Commands;

use App\Facades\CommandService;
use App\Models\User;
use Illuminate\Console\Command;

class MailingDiscount extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mailing-discount';

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
        CommandService::mailUsers();
    }
}
