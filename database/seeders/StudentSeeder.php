<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\student;
class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = collect([
            [
                'name'=>'abcd',
                'email'=>'abcd@gmail.com',
            ],
            [
                'name'=>'cbd',
                'email'=>'cbd@gmail.com',
            ],
            [
                'name'=>'eiort',
                'email'=>'eiort@gmail.com',
            ]
        ]);

        $students->each(function ($student) {
            student::insert($student);
        });

        // student::create([
        //     'name'=>'abcd',
        //     'email'=>'abcd@gmail.com',
        //     'city'=>'Dhaka',
        //     'contactNo'=>1234545
        // ]);
    }
}