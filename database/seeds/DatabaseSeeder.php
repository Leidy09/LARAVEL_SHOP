<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(ClientsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(ItemsTableSeeder::class);
        $this->call(OrdersTableSeeder::class);
        $this->call(phayMethodsTableSeeder::class);
        $this->call(PostOfficeProvidersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(SalesTableSeeder::class);
        $this->call(TypeDocumetTableSeeder::class);
        $this->call(UsersTableSeeder::class);




    }
}
