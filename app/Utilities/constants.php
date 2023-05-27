<?php

namespace App\Utilities;

class Constants
{

    // Mata Pelajaran
    const SUBJECT = [
        'Physics' => [
            'name' => 'Physics',
            'label' => 'Fisika',
            'color' => 'primary'
        ],
        'Biology' => [
            'name' => 'Biology',
            'label' => 'Biologi',
            'color' => 'info'
        ],
    ];

    // Jurusan
    const DEPARTMENT = [
        'Computer' => [
            'name' => 'Computer',
            'label' => 'Komputer',
            'color' => 'success'
        ],
        'Engine' => [
            'name' => 'Engine',
            'label' => 'Permesinan',
            'color' => 'info'
        ],
    ];

    // Tingkat Kelas
    const GRADE = [
        'X' => [
            'name' => 'X',
            'label' => 'X',
            'color' => 'success'
        ],
        'XI' => [
            'name' => 'XI',
            'label' => 'XI',
            'color' => 'info'
        ],
        'XII' => [
            'name' => 'XII',
            'label' => 'XII',
            'color' => 'secondary'
        ],
    ];
}