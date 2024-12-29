<?php

namespace Database\Seeders;
use App\Models\Project;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->withPersonalTeam()->create();

        Role::create(['name' => 'admin']);

        User::factory()->withPersonalTeam()->create([
            'name' => 'Michl',
            'email' => 'm@mail.com',
            'password' => bcrypt('123123123'),
        ])->assignRole('admin');

        Project::factory()->count(100)->create();
    }
}
