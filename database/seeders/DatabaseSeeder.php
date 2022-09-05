<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'personal_number'   =>  '61625',
            'title'             =>  'Guru.',
            'last_name'         =>  'Klika',
            'first_name'        =>  'Miroslav',
            'email'             =>  'klika@khn.cz',
            'password'          =>  Hash::make('12345678')
        ]);

        User::factory(300)->create();
    }
}
