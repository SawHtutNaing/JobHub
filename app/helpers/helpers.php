<?php

use Carbon\Carbon;

use function PHPUnit\Framework\returnSelf;

if (!function_exists('getDayLeft')) {
    function getDayLeft(string $date): int
    {
        $targetDate = Carbon::parse($date);

        // Get today's date
        $today = Carbon::today();

        // Calculate the difference in days
        return $today->diffInDays($targetDate, false);
    };
}


if (!function_exists('getPostedDate')) {
    function getPostedDate($para)
    {
        $dateInputFormat = ['today', 'any_date', 'last-3-days', 'last-7-day'];
  
    }
}
