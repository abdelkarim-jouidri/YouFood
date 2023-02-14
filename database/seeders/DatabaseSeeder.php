<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Listing;
use App\Models\Plate;
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
        \App\Models\User::factory(10)->create();

        // Listing::create([
        //     'title'=>'someTilte',
        //     'tags'=>'laravel , javascript',
        //     'company'=>'Acme Corp',
        //     'location'=>'Boston, MA',
        //     'email'=>'email@email.com',
        //     'website'=>'https://www.acme.com',
        //     'description'=>'LOREM IPSUM NISPUM'
        // ]);
        // Listing::create([
        //     'title'=>'Another someTilte',
        //     'tags'=>'symfony , javascript',
        //     'company'=>'random Corp',
        //     'location'=>'ohio, MA',
        //     'email'=>'email@email.com',
        //     'website'=>'https://www.rnad.com',
        //     'description'=>'LOREM IPSUM NISPUM'
        // ]);
        // Listing::factory(6)->create();
        Plate::factory(6)->create();
    }
}
