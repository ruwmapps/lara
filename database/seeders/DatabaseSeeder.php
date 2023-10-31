<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Quatrtext;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $user = \App\Models\User::factory()->create([
             'name' => 'admin',
             'email' => 'admin@lara.com',
             'password' => '12345678',
         ]);
        $i=1;
        do{

            Quatrtext::factory()->create([
                'user_id' => $user->id,
                'serial' => $i,
                'quatrtext' => fake()->text('30') . '</br>'
                    . fake()->text('30') . '</br>'
                    . fake()->text('30') . '</br>'
                    . fake()->text('30'),
            ]);
            ++$i;
        }while($i < 4);
    }
}
