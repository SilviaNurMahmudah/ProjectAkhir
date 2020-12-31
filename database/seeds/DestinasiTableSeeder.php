<?php

use Illuminate\Database\Seeder;

class DestinasiTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Destinasi::class, 10)->create();
    }
}
