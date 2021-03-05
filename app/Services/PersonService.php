<?php

declare(strict_types=1);

namespace App\Services;

use Illuminate\Database\Eloquent\{
    Collection,
    Relations\HasMany
};
use App\Models\Group;

class PersonService
{
    /**
     * @param int $group_id
     * @return Collection
     */
    public function getActivePersonsByGroup(int $group_id): Collection
    {
        /** @var Group $group */
        $group = Group::whereId($group_id)->notArchived()->with([
            'persons' => static function (HasMany $query) {
                $query->where('active', true);
            },
        ])->first();

        return null === $group ? new Collection() : $group->persons;
    }
}