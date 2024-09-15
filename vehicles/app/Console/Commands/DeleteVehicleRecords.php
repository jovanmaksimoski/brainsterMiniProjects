<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Vehicle;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class DeleteVehicleRecords extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'delete:vehicle-records';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Deletes vehicle records that are soft-deleted and those whose insurance has expired';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $now = Carbon::now();

        $softDeletedRecords = Vehicle::onlyTrashed()->get();
        $expiredRecords = Vehicle::where('insurance_date', '<', $now)->get();

        if (empty($expiredRecords) && empty($softDeletedRecords)) {
            $this->info('No records to delete');
        }

        foreach ($expiredRecords as $record) {
            $record->forceDelete();
        }

        foreach ($softDeletedRecords as $record) {
            $record->forceDelete();
        }

        $this->info('Soft-deleted and expired records deleted successfully');
    }

}
