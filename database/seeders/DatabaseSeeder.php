<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Item;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            Item::create([
                'name' => 'Barang ' . $i,
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus asperiores voluptatum dolorum illum officia dignissimos sequi qui sed nemo similique.',
                'price' => rand(10, 100) * 1000,
                'stock' => rand(1, 50),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        User::create([
            'name' => 'Easy Data',
            'nik' => '123',
            'email' => 'easydata2302@gmail.com',
            'password' => bcrypt('Easy_data23'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'fernandico',
            'nik' => '123',
            'email' => 'fernandico.geovardo01@gmail.com',
            'password' => bcrypt('123'),
            'role' => 'user'
        ]);
    }
}
