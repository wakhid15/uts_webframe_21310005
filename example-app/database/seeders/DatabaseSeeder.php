<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
                'title' => 'judul post pertama Ludien',
                'slug' => 'judul-post-pertama',
                'author' => 'Ludien',
                'body' => ' Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fuga ea illo labore pariatur expedita aspernatur unde maiores obcaecati quia laboriosam. ',
            ],
            [
                'title' => 'judul post kedua iffa',
                'slug' => 'judul-post-pertama',
                'author' => 'iffa',
                'body' => ' Lorem ipsum dolor sit amet consectetur, adipisicing elit. Aliquid laudantium illum inventore vitae? Earum doloremque nihil, quidem laudantium sapiente itaque. ',
        ]);
    }
}
