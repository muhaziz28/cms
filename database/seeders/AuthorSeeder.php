<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            ['name' => 'John Doe', 'email' => 'johndoe@email.com'],
            ['name' => 'Jane Smith', 'email' => 'janesmith@email.com'],
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
