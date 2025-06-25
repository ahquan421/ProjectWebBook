<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as FakerFactory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $faker = FakerFactory::create('vi_VN');

        return [
            'masach'      => 'MS' . fake()->unique()->numerify('###'),
            'tensach'     => fake()->sentence(3),
            'tacgia'      => fake()->name(),
            'nxb'         => fake()->company(),
            'theloai'     => fake()->randomElement(['Văn học', 'Khoa học', 'Giáo dục', 'Kỹ năng']),
            'giatien'     => fake()->numberBetween(50000, 500000),
            'soluong'     => fake()->numberBetween(1, 100),
            'trongluong'  => fake()->numberBetween(200, 1500),
            'sotrang'     => fake()->numberBetween(50, 1000),
            'ngonngu'     => fake()->randomElement(['Tiếng Việt', 'Tiếng Anh', 'Tiếng Pháp']),
            'anhminhhoa' => 'images/' . collect([
                '3_nguoi_thay_vi_dai.webp',
                '25xuhuong.jpg',
                '1749699893.jpg',
                '1749700412.jpg',
                '1749700716.webp',
                '1749793393.jpg',
                '1749793534.jpg',
                '1749796799.webp',
                '1749796891.jpg',
                '1750016993.png',
                '1750017051.png',
                '1750407545.jpg',
                'bongsenvang.webp',
            ])->random(),
            'mota'        => fake()->sentence(50),
        ];
    }
}
