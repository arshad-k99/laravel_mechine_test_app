<?php

namespace Database\Seeders;

use App\Models\Designation;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DesignationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $designations = [
            ['id' => 1, 'name' => 'Sales and Marketing', 'Created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => 2, 'name' => 'Mobile Application Development', 'Created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => 3, 'name' => 'Web Application Development', 'Created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => 4, 'name' => 'IT engineering and engineering management', 'Created_at' => Carbon::now()->format('Y-m-d H:i:s')],
            ['id' => 5, 'name' => 'Graphic Designing', 'Created_at' => Carbon::now()->format('Y-m-d H:i:s')],
        ];

        $designation = Designation::insert($designations);
    }
}
