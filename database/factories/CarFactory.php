<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Car;
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
        $carModels = [
            'Ford Mustang',
            'Ford F-150',
            'Chevrolet Camaro',
            'Chevrolet Corvette',
            'Dodge Charger',
            'Dodge Challenger',
            'Tesla Model S',
            'Tesla Model 3',
            'BMW M3',
            'BMW X5',
            'Audi R8',
            'Audi A4',
            'Mercedes-Benz C-Class',
            'Mercedes-Benz E-Class',
            'Toyota Supra',
            'Toyota Camry',
            'Nissan GT-R',
            'Nissan 370Z',
            'Honda Civic',
            'Honda Accord',
            'Subaru WRX',
            'Subaru Outback',
            'Lamborghini Huracán',
            'Lamborghini Aventador',
            'Ferrari 488',
            'Ferrari F8 Tributo',
            'Porsche 911',
            'Porsche Cayman',
            'McLaren 720S',
            'McLaren 570S',
            'Aston Martin DB11',
            'Aston Martin Vantage',
            'Jaguar F-Type',
            'Jaguar XE',
            'Mazda MX-5 Miata',
            'Mazda 3',
            'Volkswagen Golf GTI',
            'Volkswagen Jetta',
            'Hyundai Veloster N',
            'Hyundai Elantra N'
        ]; 

        return [
            'model' => $this->faker->randomElement($carModels),
            'description' => 'Lorem ipsum dolor sit amet',
            'price' => $this->faker->randomFloat(2,5000,20000),
            'mileage' => $this->faker->randomFloat(2,0,1000)
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (Car $car){
            // Attach brand to the car after creating
            $brand = Brand::inRandomOrder()->first();
            if($brand){
                $car->brands()->attach($brand->brand_id);
            }
        });
    }
}
