<?php

namespace Database\Factories;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    protected $model= Customer::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $persianfaker= \Faker\Factory::create('fa_IR');
        return [
            'name'=>$persianfaker->name(),
            'family'=>$persianfaker->lastName(),
            'number'=>$persianfaker->buildingNumber(),
            'password'=>$persianfaker->password(),
            'url'=> 'https://loremflickr.com/750/550?random=' . rand(1,99),
            'descroption'=>$persianfaker->realText(),
        ];
    }
}
