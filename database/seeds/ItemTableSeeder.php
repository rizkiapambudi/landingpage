<?php

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Item::updateOrCreate(
            ['id' => 1],
            [
                'code' => 'A',
                'name' => '14.900'
            ]
        );

        Item::updateOrCreate(
            ['id' => 2],
            [
                'code' => 'B',
                'name' => '23.450'
            ]
        );

        Item::updateOrCreate(
            ['id' => 3],
            [
                'code' => 'C',
                'name' => '38.900'
            ]
        );

        Item::updateOrCreate(
            ['id' => 4],
            [
                'code' => 'D',
                'name' => '65.900'
            ]
        );


    }
}
