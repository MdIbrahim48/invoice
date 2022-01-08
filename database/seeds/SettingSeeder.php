<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'company_name' => 'birit',
            'logo' => 'logo.png',
            'email' => 'birit@gmail.com',
            'phone' => '01917364532',
            'mobile' => '01917364500',
            'address' => 'House#27, Sector#11, Uttara, Dhaka',
            'status' => 'Active',
            'created_by' => 'SuperAdmin',
        ]);
    }
}
