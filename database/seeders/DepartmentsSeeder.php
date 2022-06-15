<?php

namespace Database\Seeders;

use App\Models\Department;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $departments = [
            ['id' => 1, 'name' => 'Marketing Manager', 'Created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => 2, 'name' => 'Mobile Application Dev', 'Created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => 3, 'name' => 'Web Application Dev', 'Created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => 4, 'name' => 'System engineer', 'Created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => 5, 'name' => 'Graphic Designer', 'Created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ];

        $department = Department::insert($departments);
    }
}
