<?php

declare(strict_types=1);

namespace App\Models;

use Illuminate\Database\Eloquent\{
    Builder,
    Collection,
    Factories\HasFactory,
    Model,
    Relations\HasMany
};

/**
 * @property int $id
 * @property string $title
 * @property int $course
 * @property string $faculty
 * @property bool $archive
 * @property-read Collection $persons
 * @method static Builder|Group whereId($id)
 * @method static Builder|Group notArchived()
 */
class Group extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'group';
    /**
     * @var string[]
     */
    protected $fillable = [
        'title',
        'course',
        'faculty',
        'archive',
    ];

    /**
     * @param Builder $builder
     */
    public function scopeNotArchived(Builder $builder): void
    {
        $builder->where('archive', false);
    }

    /**
     * @return HasMany
     */
    public function persons(): HasMany
    {
        return $this->hasMany(Person::class);
    }
}