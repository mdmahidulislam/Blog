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
        \App\Setting::create ([


        	'site_name' => "Laravel's Blog",

        	'address' => 'Banasree, rampura, Dhaka',

        	'contact_number' => '80002500',

        	'contact_email' => 'info@laravel_blog.com'

        ]);
    }
}
