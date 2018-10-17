<?php

use Illuminate\Database\Seeder;

class PostOfficeProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\PostOfficeProvider::class,50)->create();
    }
}
