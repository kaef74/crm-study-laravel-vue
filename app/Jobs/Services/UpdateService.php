<?php

declare(strict_types=1);

namespace App\Jobs\Services;

use App\Http\Payloads\V1\CreateService;
use App\Models\Service;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Database\DatabaseManager;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Foundation\Queue\Queueable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Throwable;

final class UpdateService implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    public function __construct(
        public readonly CreateService $payload,
        private readonly Service $service,
    ) {}

    /**
     * @throws Throwable
     */
    public function handle(DatabaseManager $database): void
    {
        $database->transaction(
            callback: fn () => $this->service->update(
                attributes: $this->payload->toArray()
            ),
            attempts: 3,
        );
    }
}