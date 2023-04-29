<?php


namespace App\Utils;

use DateInterval;
use DatePeriod;
use DateTime;

class HolidayCounter
{
    // provide the dates in "Y-m-d" format
    public static function getEndDate(string $startDate, string $endDate, array $holidays, bool $sundays = true)
    {

        if ($sundays) {
            $start = new DateTime($startDate);
            $end = new DateTime($endDate);

            while ($start <= $end) {
                if ($start->format('w') == 0) {
                    array_push($holidays, $start->format('Y-m-d'));
                }

                $start->modify('+1 day');
            }
        }

        $period = new DatePeriod(
            new DateTime($startDate),
            new DateInterval('P1D'),
            new DateTime($endDate)
        );

        $dates = [];

        foreach ($period as $key => $value) {
            array_push($dates, $value->format('Y-m-d'));
        }

        $daysToAdd = count(array_intersect($dates, $holidays));

        $startDate = $endDate;
        $endDate = date('Y-m-d', strtotime($startDate . ' +' . $daysToAdd . ' day'));

        if ($daysToAdd > 0) {
            return HolidayCounter::getEndDate($startDate, $endDate, $holidays, $sundays);
        } elseif ($sundays && date('w', strtotime($endDate)) == 0) {
            return HolidayCounter::getEndDate($startDate, date('Y-m-d', strtotime($endDate . ' +1 day')), $holidays, $sundays);
        } else {
            return $endDate;
        }
    }
    
}
