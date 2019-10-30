## P3 Peer Review

+ Reviewer's name: Suan Cantrell
+ Reviwee's name: Janeece
+ URL to reviewee's Github repo: https://github.com/Janeece/e2/tree/master/p3

### Are you able to produce any errors or unexpected results?
* The only "error" that occurred in interacting with the game is when the labels were clicked (vs. the radio button, itself) Door 1 was always chosen.

### Referencing the course notes on [Form design flow](https://hesweb.dev/e2/notes#/php/form-flow), describe the form design flow used in this project.
* The form design flow used in the project is "Design C."

### Are there any separation of concern issues (i.e. non-display specific logic in view files, display code in controller files)? 
* There were no separation of concern issues.

### Are there aspects of the code that you feel were not self-evident and would benefit from comments?'
* I admit that this is similar to learning a spoken language where I can speak it and understand when someone is speaking it to me, but I struggle when reading it.

    That being said, it would have been quicker for me to connect the dots if `$results` and `$showResults` were given comments as to their future usage, since a relationship is not associated in the same code source. Again, this is most likely due to my inability to quickly translate the code.

### List any/all built-in PHP methods used with a brief summary of what the method does
* session_start():
    * Allows the current code source to access data from an external code source that is utilizing an HTML form's `GET` or `POST` request.
* $_GET:
    * Obtains all stored data from an indicated variable
* rand():
    * Chooses a random value from a specified array or generates an integer with an indicated range value.
* $_SESSION:
    * Stores all data for an indicated variable
* header():
    * Allows the current code source's data output be redirected to an indicated external code source.
* isset():
    * Determines if a value is valid and is not null.
* echo():
    * Outputs strings or called variables on a display.
    

### Are there any parts of the code that you found interesting or taught you something new?
* The `isset` method was still a little obscure to me and I believe having to scrutinize this code allowed me to have a stronger understanding of its function.

### Are there any parts of the code that you don't understand?
* There were no parts of the code that I was not able to understand, but it took me a while to confidently associate the relationships of the code.

### Are there any best practices discussed in course material that you feel were not addressed in the code?
* index.php page:
    * Code validation would have pointed out the mistyping of `utg=8` on line 8.
    * The code style of lines 47-58 could have utilized indenting to clarify the different php groupings.
* index-controller.php page:
    * Code style best practices would recommend lines 9-10 be consolidated onto one line.
* process.php page:
    * Lines 6 and 10 are not used and can be removed.

### Do you have any additional comments not covered in the above questions?
* I defintely prefer winning a car over a goat.

