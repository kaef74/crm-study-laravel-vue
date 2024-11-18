<?php

declare(strict_types=1);

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Carbon\CarbonInterface;
use Illuminate\Database\Eloquent\Concerns\HasUlids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Collection;

/**
 * @property string $id
 * @property string $name
 * @property string $email
 * @property string|null $password
 * @property string|null $remember_token
 * @property null|CarbonInterface $email_verified_at
 * @property null|CarbonInterface $created_at
 * @property null|CarbonInterface $updated_at
 * @property Collection<Service> $services
 * @property Collection<Credential> $credentials
 */
final class User extends Authenticatable
{
    use HasFactory;
    use HasUlids;
    use Notifiable;
    use SoftDeletes;

    /** @var array<int,string> */
    protected $fillable = [
        'name',
        'email',
        'password',
        'remember_token',
        'email_verified_at',
    ];

    /** @var array<int,string> */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /** @return HasMany<Service> */
    public function services(): HasMany
    {
        return $this->hasMany(
            related: Service::class,
            foreignKey: 'user_id',
        );
    }

    /** @return HasMany<Credential> */
    public function credentials(): HasMany
    {
        return $this->hasMany(
            related: Credential::class,
            foreignKey: 'user_id',
        );
    }

    /** @return  array<string,string> */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
