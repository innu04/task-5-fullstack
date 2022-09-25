<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Articles;
use App\Models\Categories;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'user14',
            'email' => 'user14@gmail.com',
            'password' => bcrypt('inisandi123')
        ]);

        Categories::create([
            'name' => 'Bisnis',
            'user_id' => '14'
        ]);

        Articles::create([
            'title' => 'Penjualan Padi',
            'content' => 'Harga melonjak naik dibulan september',
            'image' => 'padi.jpg',
            'user_id' => '14',
            'category_id' => '7'
        ]);

        User::create([
            'name' => 'user15',
            'email' => 'user15@gmail.com',
            'password' => bcrypt('inisandi123')
        ]);

        Categories::create([
            'name' => 'Pendidikan',
            'user_id' => '15'
        ]);

        Articles::create([
            'title' => 'Pendidikan di papua',
            'content' => 'pendidikan dipapua sangat tertinggak jauh dibandingkan di pulau jawa',
            'image' => 'papua.jpg',
            'user_id' => '15',
            'category_id' => '8'
        ]);

        User::create([
            'name' => 'user16',
            'email' => 'user16@gmail.com',
            'password' => bcrypt('inisandi123')
        ]);

        Categories::create([
            'name' => 'transportasi',
            'user_id' => '16'
        ]);

        Articles::create([
            'title' => 'Transportasi kereta cepat',
            'content' => 'kereta cepat akan dibangun jakarta sampai bandung',
            'image' => 'kereta.jpg',
            'user_id' => '16',
            'category_id' => '9'
        ]);
    }
}
