<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class biodatastableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $bio = [
        ['id' => 1, 'name' => 'lira rahmawati', 'bornDate' => '2004-02-17', 'gender' => 'perempuan', 'addres' => 'kp.ciodeng', 'religion' => 'islam', 'age' => 17, 'hobby' => 'makan'],
        ['id' => 2, 'name' => 'sisi', 'bornDate' => '2005-03-18', 'gender' => 'perempuan', 'addres' => 'jl.sukamenak', 'religion' => 'kristen', 'age' => 15, 'hobby' => 'minum'],
        ['id' => 3, 'name' => 'susi', 'bornDate' => '2001-04-19', 'gender' => 'perempuan', 'addres' => 'cibaduyut', 'religion' => 'konghucu', 'age' => 20, 'hobby' => 'tidur'],
        ['id' => 4, 'name' => 'sasa', 'bornDate' => '2002-05-12', 'gender' => 'perempuan', 'addres' => 'situ terate', 'religion' => 'buddha', 'age' => 19, 'hobby' => 'baca'],
        ['id' => 5, 'name' => 'sasi', 'bornDate' => '2003-06-11', 'gender' => 'perempuan', 'addres' => 'bahuan', 'religion' => 'atheis', 'age' => 18, 'hobby' => 'nyanyi'],
        ];
    }
}
