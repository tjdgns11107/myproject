<?php

use Illuminate\Database\Seeder;

class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $first = App\User::find(1);

        $first->seller()->create([
            'seller_id' => $first->id,
            'seller_name' => $first->name,
            'seller_phone' => $first->phone,
        ]);

        $second = App\User::find(3);

        $second->seller()->create([
            'seller_id' => $second->id,
            'seller_name' => $second->name,
            'seller_phone' => $second->phone,
        ]);
    }
}
