<!DOCTYPE html>

<html lang='en'>

<head>
    <title>E2.P3.SHCantrell</title>
    <meta charset='utf-8'>
    <link rel='stylesheet' type='text/css' href='horoscope.css'>
    <link href="https://fonts.googleapis.com/css?family=Autour+One|Open+Sans&display=swap" rel="stylesheet">
</head>

<body>
    <article>

        <header>
            <h2>*Your Horoscope* Forecast</h2>
        </header>
        
        <div>
            <form method='POST' action='process.php'>

                <p>
                    <label for='day'>Hello! What&rsquo;s Your Name?</label>
                    <input type='text' id='userName' name='userName' placeholder="Please Enter Your Name">
                </p>

                <p>
                    <label for='inputMonth'>Please Select Your Birth Month</label>
                    <select id='inputMonth' name='inputMonth'>
                        <option value=''>Select a Month</option><!-- value='' allows option to be present without submitting data -->
                        <option value='jan'>January</option>
                        <option value='feb'>February</option>
                        <option value='mar'>March</option>
                        <option value='apr'>April</option>
                        <option value='may'>May</option>
                        <option value='jun'>June</option>
                        <option value='jul'>July</option>
                        <option value='aug'>August</option>
                        <option value='sep'>September</option>
                        <option value='oct'>October</option>
                        <option value='nov'>November</option>
                        <option value='dec'>December</option>
                    </select>
                </p>            

                <p>
                    <label for='day'>Please Enter Your Day of Birth</label>
                    <input type='number' min='1' id='day' name='day' placeholder='##'><!-- min=1 ensures positive numbers only -->
                </p>
                
                <p>
                    <button type='submit'>Get Horoscope Forecast</button>
                <p>
                
            </form>
        </div>

    </article>
</body>

</html>