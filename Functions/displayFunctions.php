<?php
    //Displays the Portfolio owner's known Coding Languages.
    function displayCodingLanguages($knowledgeLanguages) {
        $a = 0;
        $string = '';
        foreach ($knowledgeLanguages as $knownLanguage) {
            if ($a > 3) {
                $string.= "<br>";
                $a = 0;
            }
            $string.= "$knownLanguage | ";
            $a++;
        }
        return $string;
    }

    //Displays the Portfolio owner's known Frameworks and Libraries.
    function displayFrameworks($knowledgeFrameworks) {
        $b = 0;
        $string = '';
        foreach ($knowledgeFrameworks as $knownFramework) {
            if ($b > 3) {
                $string.= "<br>";
                $b = 0;
            }
            $string.= "$knownFramework | ";
            $b++;
        }
        return $string;
    }

    //Displays the Portfolio owner's known Languages.
    function displayLanguages($actualLanguages) {
        $c = 0;
        $string = '';
        foreach ($actualLanguages as $language) {
            if ($c > 3) {
                $string.= "<br>";
                $c = 0;
            }
            $string.= "$language | ";
            $c++;
        }
        return $string;
    }

    //Displays the Portfolio owner's hobbies.
    function displayHobbies($hobbies) {
        $d = 0;
        $string = '';
        foreach ($hobbies as $hobby) {
            if ($d > 3) {
                $string.= "<br>";
                $d = 0;
            }
            $string.= "$hobby | ";
            $d++;
        }
        return $string;
    }

    //Displays the Portfolio owner's graduations.
    function displayGraduations($graduations) {
        $string = '';
        foreach ($graduations as $graduation) {
            $string.= "$graduation <br> ";
        }
        return $string;
    }