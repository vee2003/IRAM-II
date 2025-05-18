<?php
namespace Database\Factories;

use App\Models\EventPost;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EventPostFactory extends Factory
{
    protected $model = EventPost::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(),
            'user_id' => User::factory(), // Associate with a user
        ];
    }
}