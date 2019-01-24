<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Setting::create([
        	'site_name' => "Laravel's Blog",
        	'address' => 'Mandaluyong',
        	'contact_number' => '535 30 79',
        	'contact_email' => 'info@mail.com'
        ]);	
    }
}
