<?php

namespace Database\Factories;

use App\Models\ItemValue;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class ItemValueFactory extends Factory
{
    protected $model = ItemValue::class;

    protected $names = [
        'Jerome',
        'Julia v.W.',
        'Drop',
        'Emely',
        'Magnus',
        'Benny',
        'Lena',
        'Werner',
        'Timo',
        'Maren',
        'Saskia',
        'Jana',
        'Georg',
        'Sandra & Janine',
        'Leonie',
        'Katrin',
        'Daniel',
        'Thommy',
        'Anna-Lena',
        'Charlotte',
        'Djana',
        'Michael G.',
        'Simon',
        'Hermann',
        'Michelle',
        'Aki',
        'Herbert',
        'Adam',
        'Caroline',
        'Mara',
    ];

    public function definition(): array
    {
        return [
            'type' => ItemValue::TEXT_TYPE,
            'value' => Arr::random($this->names),
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
