<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Tạo user mẫu (có thể giữ nguyên hoặc bỏ nếu không dùng)
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        // Gọi seeder cho bảng courses
        $this->call(CourseSeeder::class);
    }
}
