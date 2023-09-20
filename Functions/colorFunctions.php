<?php
date_default_timezone_set("Europe/Amsterdam");
    //General note: for some reason the date()'s hours seem to be 2 hours behind

    //Changes the Body's BackgroundColor depending on the time of day
    //This version would've decided it between sunrise, day, sunset and night time
    /*    function decideBackgroundColor($currentTime) {
            $date = date("d-m-Y");
            $sun_info = date_sun_info(strtotime($date), 52.1326, 5.2913);
            print_r($sun_info);
        }*/

    //Changes the Body's BackgroundColor depending on the time of day
    //This version simply has specific times it changes the backgroundcolor
    function decideBackgroundColor($timeBackgroundColors) {
        $time = date("H");
        if ($time > 23 || $time < 6) {
            return $timeBackgroundColors['Midnight'];
        }
        if ($time > 5 && $time < 12) {
            return $timeBackgroundColors['Day'];
        }
        if ($time > 11 && $time < 18) {
            return $timeBackgroundColors['Midday'];
        }
        if ($time > 17 && $time < 24) {
            return $timeBackgroundColors['Night'];
        }
        return $timeBackgroundColors['Night'];
    }
