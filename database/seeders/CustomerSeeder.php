<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 10; $i++) {
            $faker = Faker::create();
            $customer = new Customer;
            $customer->name = $faker->name;
            $customer->email = $faker->email;
            $customer->phone = "1234567890"; // Example phone number
            $customer->address = $faker->address;
            $customer->dob = $faker->date();
            $customer->state = $faker->state;
            $customer->country = $faker->country;
            $customer->gender = "M";
            $customer->password = $faker->password;
            $customer->save();
        }
    }
}
