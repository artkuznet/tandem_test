<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\{
    Group,
    Person
};
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run(): void
    {
        Group::factory(20)->create()->each(static function (Group $group) {
            $group->persons()->saveMany(Person::factory(50)->create(['group_id' => $group->id]));
        });
    }
}
