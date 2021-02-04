<?php

namespace Database\Factories;

use App\Models\ItemValue;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ItemValueFactory extends Factory
{
    protected $model = ItemValue::class;

    public function definition(): array
    {
        return [
            'type' => ItemValue::TEXT_TYPE,
            'value' => $this->faker->firstName,
        ];
    }

    public function imageType()
    {
        return $this->state(function ($attributes) {
            return [
                'type' => ItemValue::IMAGE_TYPE,
                'value' => $this->faker->imageUrl(),
            ];
        });
    }

    public function videoType()
    {
        return $this->state(function ($attributes) {
            return [
                'type' => ItemValue::VIDEO_TYPE,
                'value' => $this->faker->imageUrl(),
            ];
        });
    }
}
