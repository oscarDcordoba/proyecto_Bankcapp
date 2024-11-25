<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(RolesSeeder ::class);

        User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>Hash::make('123456789'),
        ])->assignRole('admin');
        
        User::create([
            'name'=>'Svisor',
            'email'=>'Svisor@gmail.com',
            'password'=>Hash::make('123456789'),
        ])->assignRole('supervisor');

        User::create([
            'name'=>'cajero',
            'email'=>'cajero@gmail.com',
            'password'=>Hash::make('123456789'),
        ])->assignRole('cajero');

        User::create([
            'name'=>'cliente',
            'email'=>'cliente@gmail.com',
            'password'=>Hash::make('123456789'),
        ])->assignRole('cliente');


        

    }
}
