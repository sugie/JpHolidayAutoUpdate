<?php

namespace App;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;


class ModelHolidayCalendarTest extends TestCase
{
    public function testUpdateHolidayDatabase()
    {
        ModelHolidayCalendar::updateHolidayDatabase();
        $this->assertDatabaseHas('jp_holidays', ['holiday' => '2020-11-23']);
    }
}
