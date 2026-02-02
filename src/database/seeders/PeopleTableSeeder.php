<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $param = ['name' => 'taro', 'mail' => 'taro@yamada', 'age' => 12];
        DB::table('people')->insert($param);
        
        $param = ['name' => 'hanako', 'mail' => 'hanako@flower', 'age' => 16];
        DB::table('people')->insert($param);

        $param = ['name' => 'jiro', 'mail' => 'jiro@tokyo', 'age' => 20];
        DB::table('people')->insert($param);
    }
}
