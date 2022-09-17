<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::create([
            'id' => 1,
            'name' => 'Cardinal Cod',
            'email' => 'car@gmail.com',
            'balance' => '5000',
        ]);

        Customer::create([
            'id' => 2,
            'name' => 'Yamour Ouz',
            'email' => 'yam@gmail.com',
            'balance' => '745215',
        ]);
        Customer::create([
            'id' => 3,
            'name' => 'William Wolay',
            'email' => 'william@gmail.com',
            'balance' => '156320',
        ]);
        Customer::create([
            'id' => 4,
            'name' => 'Alex Many Karttunen',
            'email' => 'alex@gmail.com',
            'balance' => '1000',
        ]);
        Customer::create([
            'id' => 5,
            'name' => 'Keskuskatu Karttunen',
            'email' => 'kes@gmail.com',
            'balance' => '400',
        ]);

        Customer::create([
            'id' => 6,
            'name' => 'Matti Karttunen',
            'email' => 'mat@gmail.com',
            'balance' => '5000',
        ]);
        Customer::create([
            'id' => 7,
            'name' => 'Wilman Kala',
            'email' => 'will@gmail.com',
            'balance' => '700000',
        ]);

        Customer::create([
            'id' => 8,
            'name' => 'Karl Jablonski',
            'email' => 'kar@gmail.com',
            'balance' => '80000',
        ]);
        Customer::create([
            'id' => 9,
            'name' => 'White Clover Markets',
            'email' => 'whi@gmail.com',
            'balance' => '10000',
        ]);
        Customer::create([
            'id' => 10,
            'name' => 'Wolski Zbyszek',
            'email' => 'wol@gmail.com',
            'balance' => '100000',
        ]);


    }
}
