<?php

use App\SourceStatus;
use Illuminate\Database\Seeder;

class SourceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <=5 ; $i++) {
            $status = '';
            if ($i == 0) {
                $status = 'Recieved';
            }
            elseif ($i == 1) {
                $status = 'Pending';
            }elseif($i == 2){
                $status = 'Cancelled';
            }elseif($i == 3){
                $status = 'Refunded';
            }elseif($i == 4){
                $status = 'Shipment';
            }else{
                $status = 'Delivered';
            }
            SourceStatus::create([
                'source_status' => $status,
            ]);
        }
    }
}
