<?php
//$user_date_string = '2027-02-28';
$user_date_string = $_GET['dateOfBirth'];
$user_date = strtotime($user_date_string);
$user_date = getdate($user_date);
$current_time = getdate();
echo "Uzytkownik urodził się w: " . $user_date['weekday'] . "<br>";
echo "Użytkownik skończył: " . getUserYears($user_date, $current_time) . " lat.\n";


function getUserYears($birthDate, $current_time) {
    if ($birthDate['yday'] > $current_time['yday']) {
        return ($current_time['year'] - $birthDate['year']) - 1;
    }
    return $current_time['year'] - $birthDate['year'];
}
echo "Ilosc dni do urodzin to: " . getDaysToBirthday($user_date_string, date('m-d-Y'));

function getDaysToBirthday($birthDate, $currentDate) {
    $userBirthArray = explode("-", $birthDate);
    $userBirthArray[0] = date("Y");
    $currentDateArray = explode("-", $currentDate);
    /*for ($i = 0; $i < count($userBirthArray); $i++) {
        echo $userBirthArray[$i] . " ";
    }*/

    $birth = strtotime(implode("-", $userBirthArray));
    $current = strtotime(implode("-", $currentDateArray));
    /*echo "<br>";

    for ($i = 0; $i < count($currentDateArray); $i++) {
        echo $currentDateArray[$i] . " ";
    }*/

    $birthTime = mktime(0,0,0, $userBirthArray[1], $userBirthArray[2], $userBirthArray[0]);
    $localTime = mktime(0, 0, 0, $currentDateArray[0], $currentDateArray[1], $currentDateArray[2]);
    if ($birth > $current) {
        return abs(ceil($localTime - $birthTime) / 86400);
    } else {
        // Handle leap year
        $localTime = mktime(0, 0, 0, $currentDateArray[0], $currentDateArray[1], $currentDateArray[2] + 1);
        $year = $currentDateArray[2] + 1;
        if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
            if (new DateTime($userBirthArray[2] . "-" . $userBirthArray[1] . "-" . $userBirthArray[0]) >= new DateTime($year . "-02-29")) {
                return abs(ceil(($localTime - $birthTime) / 86400) + 1);
            }
            return abs(ceil(($localTime - $birthTime) / 86400));
        }
    }

}