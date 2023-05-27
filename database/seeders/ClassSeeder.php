<?php

namespace Database\Seeders;

use App\Models\ClassModel;
use App\Utilities\Constants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // jurusan
        $departments = Constants::DEPARTMENT;
        $grades = Constants::GRADE;

        foreach ($grades as $grade) {
            foreach ($departments as $department) {
                ClassModel::insert([
                    'name' => "{$grade['name']} {$department['name']}",
                ]);
            }
        }
    }
}