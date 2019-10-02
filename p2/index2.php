<?php require 'index-controller2.php' ?>

<!doctyp html>
<html lang='en'>

<head>

    <title>Mixing Primary Colors</title>
    <meta charset='utf-8'>
    <style>
        body {
            width: 50%;
            margin: 3em auto 0 auto;
            font-family: Calibri, sans-serif;
        }
        h1 {
            font-size: 3em;
            margin: 0 0 1em 0;
        }
        article div:first-child {
            width: 60%;
            height: 18em;
            float: left;
            display: block;
        }
        article p:first-child {
            width: 80%;
            font-size: 1.5em;
        }
        section {
            width: 40%;
            height: 20em;
            float: left;
            display: block;
            padding: 0 2.5em 0 0;
            margin: -1em 0 0 0;
        }
        h3 {
            clear: both;
            margin: 0 0 0 0;
            padding: 0;
         }
         div:last-of-type  p {
            padding: 0 1em 0 0;
            margin: -1em 0 1em 0;
            clear: both;
         }
         div:last-of-type {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(5, 20%);
            grid-template-rows: repeat(20, 1fr);
            grid-auto-flow: column;
            grid-row-start: 1;
            grid-column-start: 1;
            margin-top: 4em;
             }
    </style>

</head>

<body>
    <header>
        <h1>Mixing Primary Colors</h1>
    </header>

    <section>
        <h2>Mechanics:</h2>
            <ul>
                <li>Using primary colors of red, blue, or yellow, make two separate and random selections from the three colors.</li>
                <li>Based on the two colors chosen, what secondary color would result, if mixed?</li>
                <li>Repeat the two above steps 50 times.</li>
                <li>Out of the 50 iterations, determine which secondary color was mixed the most.</li>
                <li>If the two random primary colors selected are the same, they do not have a resulting secondary color and are not considered in the ending tally.</li>
            </ul>
    </section>

    <article>
        <h2>Results:</h2>

        <div>
            <?php rsort($totalCounts); ?>
            <?php foreach ($totalCounts as $position => [$counts, $name]) { ?>
                <?php if (($totalCounts[0][0] > $totalCounts[1][0]) and ($totalCounts[0][0] > $totalCounts [2][0])) { ?>
                    <p><?php echo ('The secondary color that was mixed the most was ' . $name . ', at ' . $counts . ' counts.' ); ?></p>
                <?php } ?>
                <?php if (($totalCounts[0][0] == $totalCounts[1][0]) and ($totalCounts[1][0] == $totalCounts[2][0]) and ($totalCounts[0][0] == $totalCounts[2][0])) { ?>
                    <p><?php echo ('The secondary color that was mixed the most is tied between ' . $totalCounts[0][1] . ',  ' . $totalCounts[1][1] . ', and ' . $totalCounts[2][1] . ' at  ' . $counts . ' counts each.' ); ?></p>
                <?php } ?> 
                <?php if (($totalCounts[0][0] == $totalCounts[1][0]) and ($totalCounts[1][0] != $totalCounts[2][0])) { ?>
                    <p><?php echo ('The secondary color that was mixed the most is tied between ' . $totalCounts[0][1] . ' and ' . $totalCounts[1][1] . ' at  ' . $counts . ' counts each.' ); ?></p>
                <?php } ?>
                <?php break; ?>
            <?php } ?>
            <?php foreach ($totalCounts as $position => [$counts, $name]) { ?>
                <p><?php echo ($name . ' was mixed ' . $counts . ' times.'); ?></p>
             <?php } ?>
                <p><?php echo ('Matching colors were selected ' . $matchingCounts . ' times.'); ?></p>
        </div>

        <div>
            <?php $totalCounts = [
                0 => [0, 'Green'],
                1 => [0, 'Orange'],
                2 => [0, 'Purple'],
            ]; ?>

            <?php for ($a = 1; $a <= 50; $a++) { ?> 

                <h3><?php echo ('Selection #' . $a . ': '); ?></h3>

                <?php for ($i = 0; $i <= 1; $i++) { ?>
                   <?php $primarySelected[0] = $primaryArray[rand(0, 2)]; ?>
                   <?php $primarySelected[1] = $primaryArray[rand(0, 2)]; ?>
                <?php } ?>

                <?php if ($primarySelected[0] == $primarySelected[1]) { ?>
                    <p><?php echo ('Matching colors were selected: ' . $primarySelected[0] . '. '); ?></p>
                <?php } ?>
                <?php if ($primarySelected[0] == 'red' and $primarySelected[1] == 'blue') { ?>
                    <p><?php echo ('Mixing ' . $primarySelected[0] . ' with ' . $primarySelected[1] . ' makes ' . $totalCounts[2][1] . ". "); ?></p>
                <?php } ?>
                <?php if ($primarySelected[0] == 'blue' and $primarySelected[1] == 'red') { ?>
                    <p><?php echo ('Mixing ' . $primarySelected[0] . ' with ' . $primarySelected[1] . ' makes ' . $totalCounts[2][1] . ". "); ?></p>
                <?php } ?>
                <?php if ($primarySelected[0] == 'red' and $primarySelected[1] == 'yellow') { ?>
                    <p><?php echo ('Mixing ' . $primarySelected[0] . ' with ' . $primarySelected[1] . ' makes ' . $totalCounts[1][1] . ". "); ?></p>
                <?php } ?>
                <?php if ($primarySelected[0] == 'yellow' and $primarySelected[1] == 'red') { ?>
                    <p><?php echo ('Mixing ' . $primarySelected[0] . ' with ' . $primarySelected[1] . ' makes ' . $totalCounts[1][1] . ". "); ?></p>
                <?php } ?>
                <?php if ($primarySelected[0] == 'blue' and $primarySelected[1] == 'yellow') { ?>
                    <p><?php echo ('Mixing ' . $primarySelected[0] . ' with ' . $primarySelected[1] . ' makes ' . $totalCounts[0][1] . ". "); ?></p>
                <?php } ?>
                <?php if ($primarySelected[0] == 'yellow' and $primarySelected[1] == 'blue') { ?>
                    <p><?php echo ('Mixing ' . $primarySelected[0] . ' with ' . $primarySelected[1] . ' makes ' . $totalCounts[0][1] . ". "); ?></p>
                <?php } ?>

            <?php } ?>
        </div>

    </article>

</body>

</html>