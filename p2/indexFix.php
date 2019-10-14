<?php require 'index_controllerFix.php' ?>

<!doctyp html>
<html lang='en'>

<head>

    <title>Mixing Primary Colors</title>
    <meta charset='utf-8'>
    <style>
        body {
            width: 50em;
            margin: 3em auto 0 auto;
            font-family: Calibri, sans-serif;
        }
        h1 {
            font-size: 3em;
            margin: 0 0 1em 0;
        }
        section {
            border-bottom: .1em solid #9a9fa1;
            height: 20em;
        }
        section div:first-child {
            width: 50%;
            height: 20em;
            float: left;
            display: inline-block;
            padding: 0 2.5em 0 0;
            margin:  -1em 0 0 0;
            vertical-align: top;
        }
        section div:nth-of-type(2) {
            width: 50%;
            height: 20em;
            display: inline;
            vertical-align: text-top;
            padding: 0 0 1em 0;
            margin: 0 0 0 0;
        }
        section div:nth-of-type(2) p:first-of-type {
           margin: -.3em 0 0 0;
           font-size: 1.5em;
        }
         article {
            width: 100%;
            display: grid;
            grid-template-columns: repeat(5, 20%);
            grid-template-rows: repeat(20, auto);
            grid-auto-flow: column;
            grid-row-start: 1;
            grid-column-start: 1;
        }
        article p {
            padding: 0 .75em 0 0;
            margin: -1em 0 .5em 0;
        }
        article h3 {
            padding: 0;
        }
    </style>

</head>

<body>
    <header>
        <h1>Mixing Primary Colors</h1>
    </header>

    <section>
        <div>
            <h2>Mechanics:</h2>
            <ul>
                <li>Using primary colors of red, blue, or yellow, make two separate and random selections from the three colors.</li>
                <li>Based on the two colors chosen, what secondary color would result, if mixed?</li>
                <li>Repeat the two above steps 50 times.</li>
                <li>Out of the 50 iterations, determine which secondary color was mixed the most.</li>
                <li>If the two random primary colors selected are the same, they do not have a resulting secondary color and are not considered in the ending tally.</li>
            </ul>
        </div>
        <div>
           <h2>Results:</h2>

            <p><?php echo $mostCounted ?></p>

            <?php foreach ($secondaryColorArray as $position => [$counts, $name]) { ?>
                <p><?php echo ($name . ' was mixed ' . $counts . ' times.'); ?>
            <?php } ?>
                <p><?php echo ('Matching colors were selected ' . $matchingCounts . ' times.'); ?>
        </div>
    </section>

    <article>
        <?php foreach ($primaryColorSelected as list ($colorName1, $colorName2, $mixedColorResult)) { ?>
            <?php $selectionCount = $selectionCount + 1; ?>
            <h3><?php echo ('Selection #' . $selectionCount . ':' ); ?></h3>
            <p><?php echo ('Mixing ' . $colorName1 . ' and ' . $colorName2 . ' makes ' . $mixedColorResult . '. ' ); ?></p>
        <?php } ?>
    </article>

</body>

</html>