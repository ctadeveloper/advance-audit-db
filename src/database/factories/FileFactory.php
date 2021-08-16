<?php

namespace Database\Factories;

use App\Models\File;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = File::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'office' => $this->faker->numberBetween(1,10),
            'department' => $this->faker->numberBetween(1,10),
            'sub_department' => $this->faker->numberBetween(1,10),
            'file_no' => $this->faker->sentence(),
            'accounting_year' => $this->faker->sentence(),
            'audit_report' => $this->faker->sentence(),
            'final_account' => $this->faker->sentence(),
            'pac_status' => $this->faker->numberBetween(1,10),
            'pac_committe' => $this->faker->numberBetween(1,10),
            'branch' =>'south',
            'start_date' => $this->faker->date(),
            'complete_date' => $this->faker->date(),
            'submission_date' => $this->faker->date(),
            'remarks' => $this->faker->sentence(),
            'complete_status' => '1',
            'user_id' => function(){
                return User::all()->random(); 
            }
        ];
    }
}
