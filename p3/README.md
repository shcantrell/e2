# Project 3
+ By: Susan H. Cantrell
+ Production URL: <http://p3.shcantrell.me>

## Game planning
* Users will enter and submit their month and day of birth in a form. Based on the information entered, a respective horoscope forecast and symbol will be displayed.
* Two pieces of data must be acquired: month and day of birth.
    * Include these two requests on a form.
    * The value of the `name` attribute within the `input` tag will be referred to in the form design flow later.
    * The birth day should be a positive integer and entering a negative integer should be prevented.
    * The birth day should fall within the maximum days available within a respective month and entering a day higher than the maximum should be prevented.
    * The form input will require both the month and day be entered.
        * A response should be made if only one or none of the two inputs are missing.
* Maximum days within a month:
    * Define the maximum number of days in respective months.
    * Determine if the day and month input falls within the month's maximum days. Otherwise, the entry is not valid and a response should be made.
* Horoscope signs:
    * Define horoscope signs with the respective horoscope date ranges.
    * Determine which horoscope sign correlates with the valid day and month input.
* After the day and month input is correlated with a designated horoscope sign:
    * Display the designated horoscope sign's symbol.
    * Display the designated horoscope sign's forecast.

 
## Outside resources
* Putting a line break in my string
    * https://www.php.net/manual/en/function.nl2br.php
        * This method did not work at all, though I tried all options. I was greatly frustrated.
    * https://www.tutorialrepublic.com/faq/how-to-create-a-new-line-in-php.php
        * Finally, using `. <br> .` in the string worked!

* https://stackoverflow.com/questions/5805059/how-do-i-make-a-placeholder-for-a-select-box
    * Created a placeholder in the form's dropdown `select` tag.
    * HTML validation prompted me to remove `disabled selected` that was recommended

* https://w3docs.com/snippets/html/how-to-create-an-html-button-that-acts-like-a-link.html
    * Make a button point to a URL vs. submitting data.

* https://stackoverflow.com/questions/19233415/how-to-make-type-number-to-positive-numbers-only
    * Making form input positive numbers only

* https://pixabay.com/images/search/horoscope/
    * All images used are from this site.
    * Pixabay license stipulates, "Free for commercial use/No attribution required."

* https://www.astrologers.com/sun-signs/
    * Horoscope predictions

* https://phpcodechecker.com/
    * Started to use this for PHP validation (is it a credible service?)

## Notes for instructor
That was fun - really, really fun.

This is not a game and I am hoping that it satisfies the "pre-programmed strategies" of the project's parameters. I also believe the label of the form inputs explains the mechanics of the "game."

I chose what I thought was the best form design flow to use, but cannot support my choice with a thoroughly thought-out list of pros and cons.