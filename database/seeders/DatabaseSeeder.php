<?php

namespace Database\Seeders;
use DB;
use Str;
use Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = \App\Models\User::factory(10)->create();

        $skills = \App\Models\Skill::factory(10)->create();

        //$department = \App\Models\Department::factory(10)->create();

        //$vacation = \App\Models\Vacation::factory(10)->create();

        $this->call([
            UserSeeder::class,
            SkillSeeder::class,
            DepartmentSeeder::class,
            VacationSeeder::class,
        ]);
    }
}
