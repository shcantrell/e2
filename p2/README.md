# Project 2
+ By: Susan H. Cantrell
+ Production URL: <http://p2.shcantrell.me>

## Game planning
* Two random color selections will be made from three primary colors of red, blue, or yellow.
    * Create an array with three values: red, blue, and yellow.
    * Use the `rand` function to select a random key from 0 to 2.
    * Use the resulting selection to extract a primary color from the array.
    * Use a `for` loop to repeat the above process twice.
* Retaining the information of the two primary colors chosen
    * Each primary color selection needs to be retained to some parameter/variable so that additional evaluation can be made.
* The two primary colors chosen will determine what secondary color is 'mixed' resuling in either purple, orange, or green.
    * Create an array for the secondary colors with three values: purple, orange, and green
    * Use `if` conditionals to evaluate the primiary colors selected
    * The evaluation with result in a selection to extract from the secondary color array
* Repeat the above steps 50 times
    * Create a `for` loop to repeat the above process 50 times
* Tally all common secondary colors and determine which color was mixed the most
    * After the process of selections, evaluation, and matching has been completed 50 times, use `sort` to determine the highest seondary color that resulted.
    * If primary color selections resulted in like colors, there are no secondary color results. Subsequently, these selections will not be part of the final tally.

## Outside resources
* https://www.w3schools.com/cssref/css_selectors.asp
    * CSS Selectors (I can't remember them all)

* https://www.daniweb.com/programming/web-development/threads/452877/how-to-prevent-undefined-offset-1
    * I was getting an "Undefined offset: 1" Notice
    * I resolved the error by using `array_pad` function, but still do not know what it did, exactly.


## Notes for instructor
That was challengeing.

If you view [index2.php](http://p2.shcantrell.me/index2.php) and [index-controller2.php](http://p2.shcantrell.me/index-controller2.php), you will see my first attempt where I conflicted with what was proper separations of concerns. That was a very challening concept for me.

When the output results in all 'mixed' colors being the the same number (3-way tie), a Notice appears state that I have an `Undefinted variable` but I cannot figure out where the issue is, exactly.

I also was not sure how to address validation errors when the `<?` php was being marked repeadtedly as an error.