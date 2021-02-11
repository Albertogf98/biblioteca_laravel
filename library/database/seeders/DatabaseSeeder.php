<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        // \App\Models\User::factory(10)->create();

    //  self::seedUser();
      //self::seedBooks();
      self::seedBookUser();

    }

    public function seedUser() {
        $bcrypt = bcrypt('daw2021GF');

        DB::table('users')->insert([
            /*'name' => 'alberto',
            'secondName' => 'Gandoy Florido',
            'email' => 'admin@biblioteca.com',
            'password' => $bcrypt,*/
            'name' => 'belén',
            'secondName' => 'Jimenez Ranchal',
            'email' => 'bjiran@biblioteca.com',
            'password' => $bcrypt,
        ]);
    }

    public function seedBooks() {

        DB::table('books')->insert([
            'title' => 'El Alquimista',
            'author' => 'Paulo Coelho',
            'editorial' => 'Moebius',
        ]);
    }

    public function seedBookUser() {
        $currentDate = now();
        DB::table('book_user')->insert([
            'user_id' => 2,
            'book_id' => 5,
            'lendingDate' => $currentDate,
        ]);
    }
}
