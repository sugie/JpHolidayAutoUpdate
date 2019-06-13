<?php

namespace App\Console\Commands;

use App\ModelHolidayCalendar;
use Illuminate\Console\Command;

class update_holiday_database extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:update_holiday_database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '内閣府のCSVをダウンロードしてデータベースのJpHolidayテーブルを更新します。';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $this->line('update_holiday_database');
        ModelHolidayCalendar::updateHolidayDatabase();
    }
}
