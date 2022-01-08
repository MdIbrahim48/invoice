<?php

use App\ShipmentStatus;
use Illuminate\Database\Seeder;

class ShipmentSeeder extends Seeder
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
            ShipmentStatus::create([
                'shipment_status' => $status,
            ]);
        }
    }
}
