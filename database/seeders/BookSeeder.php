<?php

namespace Database\Seeders;

use Database\Factories\BookFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{

    public function run()
    {
        $fact = new BookFactory();
        $fact->count(20)
            ->create();
    }
}
