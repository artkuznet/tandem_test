<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\{
    Factories\HasFactory,
    Model,
    Relations\BelongsTo
};
use Carbon\Carbon;

/**
 * @property int $id
 * @property string $last_name
 * @property string $first_name
 * @property string $middle_name
 * @property string $birth_date
 * @property bool $active
 * @property-read int $age
 */
class Person extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'person';
    /**
     * @var string[]
     */
    protected $fillable = [
        'last_name',
        'first_name',
        'middle_name',
        'birth_date',
        'active',
    ];
    /**
     * @var string[]
     */
    protected $appends = [
        'age',
    ];

    /**
     * @return int
     */
    public function getAgeAttribute(): int
    {
        return Carbon::parse($this->birth_date)->age;
    }

    /**
     * @return BelongsTo
     */
    public function group(): BelongsTo
    {
        return $this->belongsTo(Group::class);
    }
}