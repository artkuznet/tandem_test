<?php

declare(strict_types=1);

namespace Tests\Unit;

use App\Models\Person;
use PHPUnit\Framework\TestCase;

class PersonTest extends TestCase
{
    public function testAge(): void
    {
        // todo fix the test next year =)
        self::assertEquals((new Person(['birth_date' => '22-04-1993']))->age, 27);
        self::assertEquals((new Person(['birth_date' => '28-10-1998']))->age, 22);
        self::assertEquals((new Person(['birth_date' => '07-08-1961']))->age, 59);
    }
}