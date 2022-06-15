<?php

namespace Database\Factories;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $designation_and_department = rand(1,5);
        $phone_number = rand(5111111111,9999999999);
        return [

            
            'name' => $this->faker->name(),
            'Fk_department' => $designation_and_department,
            'Fk_designation' => $designation_and_department,
            'Phone_number' => $phone_number,
            'Created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        ];
        
        
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(function (array $attributes) {
            return [
                'email_verified_at' => null,
            ];
        });
    }
}
