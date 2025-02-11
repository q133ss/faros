<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Seo;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@email.net',
            'password' => Hash::make('password'),
            'role_id' => Role::where('name', 'admin')->pluck('id')->first()
        ]);

        $this->call(SeoSeeder::class);
        $this->call(AuthorsSeeder::class);
        $this->call(VideoSeeder::class);
        $this->call(SmiSeeder::class);
        $this->call(CaseSeeder::class);
        $this->call(ArticlesSeeder::class);
        $this->call(CaseSeoSeeder::class);
        $this->call(SmiSeoSeeder::class);
        $this->call(ServiceSeeder::class);
    }
}
