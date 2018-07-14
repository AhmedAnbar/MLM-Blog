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
            'address' => "Egypt, Giza",
            'contact_number' => '010 1889 8522',
            'contact_email' => 'begnulinux@gmail.com'
        ]);
    }
}
