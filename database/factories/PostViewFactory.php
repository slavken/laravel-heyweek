<?php

namespace Database\Factories;

use App\Models\PostView;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostViewFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PostView::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'all' => 0,
            'today' => 0,
            'week' => 0,
        ];
    }
}
