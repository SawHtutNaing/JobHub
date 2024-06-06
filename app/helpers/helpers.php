<?php

use Carbon\Carbon;

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
