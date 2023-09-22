<?php

namespace Classes;

class C0L03Tools
{
    public function sendTimeColors(): array
    {
        return $timeBackgroundColors = [
            'Sunrise' => "#ff6700",
            'Midnight' => "#191970",
            'Day' => "#edd59e",
            'Midday' => "#ee5d6c",
            'Night' => "#6a0d83",
        ];
    }
}