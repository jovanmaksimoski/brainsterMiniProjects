<style>
    body {
        text-align:center;
    }
</style>

<?php
// 1. Create a variable $name and set its value to be a person's name. Next, check
// if the variable value is equal to ‘Kathrin’, if it is, your script should print “Hello
// Kathrin”. If not, the script should print “Nice name”. Next, create a new
// variable $rating with an integer value of your choice. If the value of $rating is
// between 1 and 10, the script should print “Thank you for rating”, if not, the
// script should print: 'Invalid rating, only numbers between 1 and 10.'
    $name = 'Kathrin';

        if ($name == 'Kathrin') {
            echo "Hello Kathrin\n <br>";
        } else {
            echo "Nice name\n <br>";
        }

    $rating = 7;

        if (is_int($rating) && $rating >= 1 && $rating <= 10) {
            echo "Thank you for rating\n <br>";
        } else {
            echo "Invalid rating, only numbers between 1 and 10.\n <br>";
        }

    echo "<hr>";

    $currentHour = date('H');

        if ($currentHour < 12) {
            echo "Good morning Kathrin\n <br>";
        } elseif ($currentHour >= 12 && $currentHour < 19) {
            echo "Good afternoon Kathrin\n <br>";
        } else {
            echo "Good evening Kathrin\n <br>";
    }

// Extend the previous code with a few new things. Use the native php
// function date() (https://www.php.net/manual/en/function.date.php) to get the
// current hour. If the time value is before 12pm print: “Good morning Kathrin”. If
// the value is after 12pm but before 7pm print: “Good afternoon Kathrin”. If the
// value is after 7pm print: “Good evening Kathrin”.
// Add another variable $rated with values true or false. You will need to extend
// the $rating condition check. Now if the $rating variable has value from 1 to 10,
// the script will need to do another check for the $rated variable. So, if the
// $rated variable is true, the script should print: “You already voted”. If $rated is
// false, the script will need to print “Thanks for voting”.
// Also, for the $rating variable you will need to check if the value is integer or
// some other sign or character.


    $rated = true;

        if (is_int($rating) && $rating >= 1 && $rating <= 10) {
            if ($rated) {
                echo "You already voted\n <br>";
            } else {
                echo "Thanks for voting\n <br>";
            }
        } else {
            echo "Invalid rating, only numbers between 1 and 10.\n <br>";
        }
    echo "<hr>";

// 3. Create an associative array. Add key/value pairs where key should be a
// name of a voter. For value you should combine two parameters: The first
// value should be boolean if voter has already voted (true/false) and the second
// one should be rating value (integer). Concat these two values with “,”. Add 10 elements to the array. For each voter from the array you should print:
// “Good morning/afternoon/evening voterName”
// “You already voted with a $rating. / Thanks for voting with a $rating. / Invalid
// rating, only numbers between 1 and 10.”


    $voters = array(
        'Robert' => array(true, 8),
        'John' => array(false, 5),
        'Oliver' => array(true, 9),
        'Noah' => array(false, 3),
        'Liam' => array(false, 7),
        'Henry' => array(true, 6),
        'Lucas' => array(false, 2),
        'William' => array(true, 10),
        'Ashley' => array(false, 4),
        'Emma' => array(true, 1),
    );

    foreach ($voters as $voter => $data) {
        list($rated, $rating) = $data;

        $currentHour = date('H');

        if ($currentHour < 12) {
            echo "Good morning $voter\n <br>";
        } elseif ($currentHour >= 12 && $currentHour < 19) {
            echo "Good afternoon $voter\n <br>";
        } else {
            echo "Good evening $voter\n <br>";
        }

        if (is_int($rating) && $rating >= 1 && $rating <= 10) {
            if ($rated) {
                echo "You already voted with a $rating.\n <br>";
            } else {
                echo "Thanks for voting with a $rating.\n <br>";
            }
        } else {
            echo "Invalid rating, only numbers between 1 and 10.\n <br>";
        }

        echo "\n";
    }

echo "<hr>";

?>


