<?php require 'done-controller.php' ?>

<!DOCTYPE html>

<html lang='en'>

<head>
    <title>E2.P3.SHCantrell</title>
    <meta charset='utf-8'>
    <link rel='stylesheet' type='text/css' href='horoscope.css'>
    <link href="https://fonts.googleapis.com/css?family=Autour+One|Open+Sans&display=swap" rel="stylesheet">
</head>

<body id='horoscopePage'>

    <article>

        <?php if ($inputValidated == true) { ?><!-- if the day and month entered are valid, continue with the following operations -->
            <img alt='Horoscope sign of respective birthday.' src='<?php echo ($signs[$inputResult]['image']); ?>'><!-- call the image of respective horoscope sign -->
            <?php if (($firstLetterOfSign == 'a') and ($userName == true)) { ?><!-- if user provided their name and the horoscope sign starts with a vowel letter -->
                <h2><?php echo ($userName . ', with a birthday of '. $moFullName . ' ' . $day . ', ' . '<br>' . 'you are an ' . $youArePhrase . '!'); ?></h2>
            <?php } ?>
            <?php if (($firstLetterOfSign != 'a') and ($userName == true)) { ?><!-- if user provided their name and the horoscope sign starts with a consonant letter -->
                <h2><?php echo ($userName . ', with a birthday of '. $moFullName . ' ' . $day . ', ' . '<br>' . 'you are a ' . $youArePhrase . '!'); ?> </h2>
            <?php } ?>
            <?php if (($firstLetterOfSign == 'a') and ($userName == null)) { ?><!-- if user did not provide their name and the horoscope sign starts with a vowel letter -->
                <h2><?php echo ('Having a birthday of '. $moFullName . ' ' . $day . ', ' . '<br>' . 'you are an ' . $youArePhrase . '!'); ?> </h2>
            <?php } ?>
            <?php if (($firstLetterOfSign != 'a') and ($userName == null)) { ?><!-- if user did not provide their name and the horoscope sign starts with a consonant letter -->
                <h2><?php echo ('Having a birthday of '. $moFullName . ' ' . $day . ', ' . '<br>' . 'you are a ' . $youArePhrase . '!'); ?> </h2>
            <?php } ?>

            <p><?php echo ('(' . $signs[$inputResult]['dates'] . ')'); ?> </p><!-- display the respective horoscope's date range -->
            <p><?php echo ($signs[$inputResult]['prediction']); ?></p><!-- display the respective horoscope's forecast -->
            <button onclick="window.location.href='index.php';">View Another Horoscope Forecast</button>    
            
            <section>
                <p>Forecasts by Alina Rubi, PMAFA |</p>
                <p>source: <a href='https://www.astrologers.com/sun-signs/' target='_blank'>American Federation of Astrologers</a></p>
            </section>
        <?php } ?>

        <?php if (($inputValidated == null) and ($noValueEntered == false)) { ?><!-- display message if the day value is higher than respective month chosen | "$noValueEntered == false" prevents the next message from appearing simultaneously -->
            <p><?php echo ('There are only ' . $convertedDay . ' days in ' . $moFullName . '.'); ?> </p>
            <button onclick="window.location.href='index.php';">Please Try Again!</button>
        <?php } ?>

        <?php if ($noValueEntered == true) { ?><!-- display message when values are not chosen in either the month or day fields -->
            <p><?php echo ('Please provide both a month and a day.'); ?></p>
            <button onclick="window.location.href='index.php';">Go Back to Form</button>
        <?php } ?>

    </article>

</body>

</html>
