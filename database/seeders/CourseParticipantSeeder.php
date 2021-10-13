<?php

namespace Database\Seeders;

use App\Models\CourseParticipant;
use Illuminate\Database\Seeder;

class CourseParticipantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CourseParticipant::factory(20)->create();
    }
}
