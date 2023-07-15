<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tags = [
            'laravel' => 'Laravel',
            'api' => 'API',
            'backend' => 'Backend',
            'vue' => 'Vue',
            'engineer' => 'Engineer',
        ];
        $randNum = rand(1, count($tags));
        $randArray = array_rand($tags, $randNum);
        if ($randNum === 1) {
            $randArray = [$randArray];
        }
        return [
            'title' => $this->faker->sentence(),
            'tags' => implode(',', $randArray),
            'company' => $this->faker->company(),
            'email' => $this->faker->companyEmail(),
            'website' => $this->faker->url(),
            'location' => $this->faker->city(),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
