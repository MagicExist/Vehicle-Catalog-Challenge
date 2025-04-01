<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define test brand objects data structure
     *
     * @return array{name: string}
     */
    public function definition(): array
    {
        $carBrands = [
            'Ford',
            'Ford',
            'Chevrolet',
            'Chevrolet',
            'Dodge',
            'Dodge',
            'Tesla',
            'Tesla',
            'BMW',
            'BMW',
            'Audi',
            'Audi',
            'Mercedes-Benz',
            'Mercedes-Benz',
            'Toyota',
            'Toyota',
            'Nissan',
            'Nissan',
            'Honda',
            'Honda',
            'Subaru',
            'Subaru',
            'Lamborghini',
            'Lamborghini',
            'Ferrari',
            'Ferrari',
            'Porsche',
            'Porsche',
            'McLaren',
            'McLaren',
            'Aston Martin',
            'Aston Martin',
            'Jaguar',
            'Jaguar',
            'Mazda',
            'Mazda',
            'Volkswagen',
            'Volkswagen',
            'Hyundai',
            'Hyundai'
        ];

        return [
            'name' => $this->faker->randomElement($carBrands)
        ];
    }
}
