<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
{
    /**
     * Define test car objects data structure
     *
     * @return array{model: string, description: string, price: float, milage: float}
     */
    public function definition(): array
    {
        $model = [
            'Ford Mustang',
            'Chevrolet Camaro',
            'Dodge Charger',
            'Tesla Model S',
            'BMW M3',
            'Audi R8',
            'Mercedes-Benz C-Class',
            'Toyota Supra',
            'Nissan GT-R',
            'Honda Civic',
            'Subaru WRX',
            'Lamborghini Huracán',
            'Ferrari 488',
            'Porsche 911',
            'McLaren 720S',
            'Aston Martin DB11',
            'Jaguar F-Type',
            'Mazda MX-5 Miata',
            'Volkswagen Golf GTI',
            'Hyundai Veloster N'
        ];    

        return [
            'model' => fake()->randomElement($model),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'price' => fake()->randomFloat(2,5000,20000),
            'mileage' => fake()->randomFloat(2,0,1000)
        ];
    }
}
