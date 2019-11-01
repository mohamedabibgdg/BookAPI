<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(){

        factory(\App\Category::class,10)->create();
        $this->command->info('Category');
        factory(\App\Book::class,10)->create();
        $this->command->info('Book');
        factory(\App\Part::class,10)->create();
        $this->command->info('Part');

    }
}
