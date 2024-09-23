<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use DB;

class UpdateStatistics extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:statistics';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $Statistics = DB::table('statistics')->orderBy('id','DESC')->first();
        $disbursed = $Statistics->disbursed+1; $repeat = $Statistics->repeat+1; $branches = $Statistics->branches+1; $clients = $Statistics->clients+1;
        $updateStatistis = array(
            // 'branches' => $branches,
            'disbursed' => $disbursed,
            'clients' => $clients,
            'repeat' => $repeat,
        );
        DB::table('statistics')->update($updateStatistis);
    }
}
