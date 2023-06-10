<?php

namespace Database\Seeders;

use App\Models\SubjectModel;
use App\Utilities\Constants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subjects = Constants::SUBJECT;

        foreach ($subjects as $subject) {
            SubjectModel::insert([
                'subject_name' => $subject['name'],
            ]);
        }
    }
}
