<?php 

session_start();

$monthInfo = [// key is shortened for efficient coding / index[1] assigns the maximum number of days per respective months
    'jan' => ['January', 31],
    'feb' => ['February', 28],
    'mar' => ['March', 31],
    'apr' => ['April', 30],
    'may' => ['May', 31],
    'jun' => ['June', 30],
    'jul' => ['July', 31],
    'aug' => ['August', 31],
    'sep' => ['September', 30],
    'oct' => ['October', 31],
    'nov' => ['November', 30],
    'dec' => ['December', 31]
];

$userName = $_POST['userName'];
$day = $_POST['day'];
$inputMonth = $_POST['inputMonth'];

/*  
if the day entered is lower than the number of days of the corresponding entered month, continue with the following operations.
"$day != null" overrides input attribute "min=1", which automatically assigns $day = 1, though it is not displayed.
*/
if (($day <= $monthInfo[$inputMonth][1]) and ($day != null)) {
    if ( ($inputMonth == 'jan' and $day >= 20) or ($inputMonth == 'feb' and $day <= 19) ) {//set the range of each sign's dates
        $inputValidated = true;
        $inputResult = 'aquarius';//assign the horoscope sign to the input that was made
    }
    elseif ( ($inputMonth == 'feb' and $day >= 20) or ($inputMonth == 'mar' and $day <= 20) ) {
        $inputValidated = true;
        $inputResult = 'pisces';
    }
    elseif ( ($inputMonth == 'mar' and $day >= 21) or ($inputMonth == 'apr' and $day <= 20) ) {
        $inputValidated = true;
        $inputResult = 'aries';
    }
    elseif ( ($inputMonth == 'apr' and $day >= 21) or ($inputMonth == 'may' and $day <= 21) ) {
        $inputValidated = true;
        $inputResult = 'taurus';
    }
    elseif ( ($inputMonth == 'may' and $day >= 22) or ($inputMonth == 'jun' and $day <= 21) ) {
        $inputValidated = true;
        $inputResult = 'gemini';
    }
    elseif ( ($inputMonth == 'jun' and $day >= 22) or ($inputMonth == 'jul' and $day <= 22) ) {
        $inputValidated = true;
        $inputResult = 'cancer';
    }
    elseif ( ($inputMonth == 'jul' and $day >= 23) or ($inputMonth == 'aug' and $day <= 22) ) {
        $inputValidated = true;
        $inputResult = 'leo';
    }
    elseif ( ($inputMonth == 'aug' and $day >= 23) or ($inputMonth == 'sep' and $day <= 22) ) {
        $inputValidated = true;
        $inputResult = 'virgo';
    }
    elseif ( ($inputMonth == 'sep' and $day >= 23) or ($inputMonth == 'oct' and $day <= 22) ) {
        $inputValidated = true;
        $inputResult = 'libra';
    }
    elseif ( ($inputMonth == 'oct' and $day >= 23) or ($inputMonth == 'nov' and $day <= 21) ) {
        $inputValidated = true;
        $inputResult = 'scorpio';
    }
    elseif ( ($inputMonth == 'nov' and $day >= 22) or ($inputMonth == 'dec' and $day <= 21) ) {
        $inputValidated = true;
        $inputResult = 'sagittarius';
    }
    elseif ( ($inputMonth == 'dec' and $day >= 22) or ($inputMonth == 'jan' and $day <= 19) ) {
        $inputValidated = true;
        $inputResult = 'capricorn';
    }
} else {
    $inputValidated = false;//if the day entered is higher than the number of days of the corresponding entered month, the day entered is not valid
}

if (($day == null) or ($inputMonth == null)) {//identify when no values are chosen in either the month or day fields
    $noValueEntered = true;
} else {
    $noValueEntered = false;
}

$daysInMo = $monthInfo[$inputMonth][1];//after the above operations are complete, extract the highest number of days that chosen month can have
$moFullName = $monthInfo[$inputMonth][0];//after the above operations are complete, extract the chosen month's fully spelt out name

$_SESSION['inputValidated'] = $inputValidated;
$_SESSION['inputResult'] = $inputResult;
$_SESSION['daysInMo'] = $daysInMo;
$_SESSION['moFullName'] = $moFullName;
$_SESSION['day'] = $day;
$_SESSION['userName'] = $userName;
$_SESSION['noValueEntered'] = $noValueEntered;

header('Location: done.php');
