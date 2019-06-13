<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModelHolidayCalendar extends Model
{
    const CSV_URL = 'https://www8.cao.go.jp/chosei/shukujitsu/syukujitsu.csv';

    public static function updateHolidayDatabase()
    {
        $holidayCsvChunk = file_get_contents(self::CSV_URL);
        $holidayCsvChunk = mb_convert_encoding($holidayCsvChunk, 'UTF-8', 'SJIS');
        $holidayCsvChunk = str_replace(["\r\n", "\r"], "\n", $holidayCsvChunk);
        $list = explode("\n", $holidayCsvChunk);
        foreach ($list as $oneRow) {
            if (!empty($oneRow)) {
                list($date, $hname) = explode(',', $oneRow);
                if (strtotime($date)) {
                    if (empty(JpHoliday::where('holiday', $date)->first())) {
                        $jpHoliday = new JpHoliday;
                        $jpHoliday->holiday = $date;
                        $jpHoliday->hname = $hname;
                        $jpHoliday->save();
                    }
                }
            }
        }
    }
}
