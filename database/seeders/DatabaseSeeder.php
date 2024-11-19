<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Check;
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

        $service = Service::factory()->for($user)->create([
            'name' => 'Admin API',
            'url' => 'https://api.zxc.com/',
        ]);

        Check::factory()->for($service)->count(10)->create();
    }
}
