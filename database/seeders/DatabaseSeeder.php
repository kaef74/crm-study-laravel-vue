<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;

final class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Nikita Sudnishnikov',
            'email' => '289zxc@gmail.com',
        ]);

        Service::factory()->for($user)->count(1_000)->create();
    }
}
