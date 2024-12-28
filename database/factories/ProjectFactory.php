<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
{
    protected $model = \App\Models\Project::class;

    public function definition()
    {
        return [
            'name' => $this->faker->company(),
            'slug' => Str::slug($this->faker->unique()->company()),
            'description' => $this->faker->realText(673),
            'url' => $this->faker->url(),
            'user_id' => 1,
        ];
    }
}
