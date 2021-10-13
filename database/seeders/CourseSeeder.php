<?php

namespace Database\Seeders;

use App\Models\Course;
use Illuminate\Database\Seeder;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Str;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // manual
        // DB::table('courses')->insert([
        //     'slug' => Str::random(15),
        //     'duration_minutes' => 120,
        //     'user_id' => 1
        // ]);

        // using factories
        Course::factory(3)->create();
    }
}
