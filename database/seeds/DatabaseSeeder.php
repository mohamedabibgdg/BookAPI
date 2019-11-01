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

        factory(\App\Category::class,20)->create()->each(function ($category){
            $this->command->info('Category Name '.$category->name);
            $category->books()->saveMany(factory(\App\Book::class,5)->create()->each(function ($book){
                $this->command->info('Book Name '.$book->name);
                $book->parts()->saveMany(factory(\App\Part::class,5)->make());
                $this->command->info('Parts');
            }))->make();
        });
//        $this->command->info('Category');
//        factory(\App\Book::class,50)->create();
//        $this->command->info('Book');
//        factory(\App\Part::class,50)->create();
//        $this->command->info('Part');
        $this->command->info('Hacked completed successfully ♥.');

    }
}
