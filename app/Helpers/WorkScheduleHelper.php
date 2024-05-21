<?php

namespace App\Helpers;

use Carbon\Carbon;

class WorkScheduleHelper
{
    public static function generateWorkSchedule()
    {
        $schedule = [];
        $currentDate = Carbon::now();
        for ($i = 0; $i < 30; $i++) {
            $date = $currentDate->copy()->addDays($i);
            for ($hour = 9; $hour <= 18; $hour++) {
                if ($hour == 12) continue; // Skip lunch hour
                $schedule[] = $date->format('Y-m-d') . ' ' . str_pad($hour, 2, '0', STR_PAD_LEFT) . ':00:00';
            }
        }
        return $schedule;
    }

    public static function isWorkHour(Carbon $dateTime)
    {
        $hour = $dateTime->format('H');
        return ($hour >= 9 && $hour < 12) || ($hour >= 13 && $hour < 18);
    }
}
