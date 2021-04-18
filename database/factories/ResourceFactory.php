<?php

namespace Database\Factories;

use App\Models\Resource;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ResourceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Resource::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'post_id' => $this->faker->numberBetween(1,10),
            'type' => 'photo',
            'path'=> Str::random(20),
            'social_network' => 'vk',
                        
        ];
    }
}
