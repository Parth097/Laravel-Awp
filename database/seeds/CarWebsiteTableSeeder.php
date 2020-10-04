<?php

use App\CarWebsiteModel;
use Illuminate\Database\Seeder;

class CarWebsiteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory (CarWebsiteModel::class, 8) -> create ();
    }
}
