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

//        self::seedUser();
        self::seedCopyBook();
        self::seedLendings();

    }

    public function seedUser() {
        $bcrypt = bcrypt('daw2021GF');

    //    DB::table('users')->truncate();
        DB::table('users')->insert([
            'name' => 'alberto',
            'secondName' => 'Gandoy Florido',
            'email' => 'admin@biblioteca.com',
            'password' => $bcrypt,
        ]);
    }

    public function seedCopyBook() {

        DB::table('copy_books')->insert([
            'title' => 'La cenicienta',
            'author' => 'María Benitez Fuentes',
            'editorial' => 'Anaya',
        ]);
    }

    public function seedLendings() {

        DB::table('lendings')->insert([
            'user_id' => 1,
            'copy_book_id' => 2,
            'lendingDate' => '2021-02-05'
        ]);
    }
}
