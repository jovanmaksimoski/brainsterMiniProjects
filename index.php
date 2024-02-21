<style>

body {
  text-align:center;
}

</style>

<?php 
//////////////////////////////////////////////////////////////////////////////////////
// Write two PHP functions.
// Function 1: Converts decimal number to a binary number.
// Function 2: Converts decimal number to Roman number. Maximum number
// that can be converted is 3999. If the number is greater than 3999, the function
// should print an error message


// Function 1:
function decimalToBinary($decimal) {
    $binary = '';
    
    while ($decimal > 0) {
        $binary = ($decimal % 2) . $binary;
        $decimal = floor($decimal / 2);
    }
    
    return $binary;
}


// Function 2:
function decimalToRoman($decimal) {
    if ($decimal <= 0 || $decimal >= 4000) {
        echo "Error: Number out of range. Please provide a number between 1 and 3999.";
        return;
    }

  echo "<hr>";
    
    $romanNumeral = '';
    $romanSymbols = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    );
    
    foreach ($romanSymbols as $symbol => $value) {
        while ($decimal >= $value) {
            $romanNumeral .= $symbol;
            $decimal -= $value;
        }
    }
    
    return $romanNumeral;
}

$decimalNumber = 123;
echo "Decimal $decimalNumber to Binary: " . decimalToBinary($decimalNumber) . "\n";
echo "Decimal $decimalNumber to Roman: " . decimalToRoman($decimalNumber) . "\n";

echo "<hr>";

////////////////////////////////////////////////////////////////////////////////////////
// Write two more PHP functions.
// Function 3: Converts a binary number to a decimal number.
// Function 4: Converts a roman number to a decimal number.

// Function 3:
function binaryToDecimal($binary) {
    $decimal = 0;
    $length = strlen($binary);
    
    for ($i = 0; $i < $length; $i++) {
        $decimal += intval($binary[$i]) * (2 ** ($length - $i - 1));
    }
    
    return $decimal;
}

// Function 4:
function romanToDecimal($roman) {
    $decimal = 0;
    $romanNumerals = array(
        'M' => 1000,
        'D' => 500,
        'C' => 100,
        'L' => 50,
        'X' => 10,
        'V' => 5,
        'I' => 1
    );

    $prevValue = 0;
    
    for ($i = strlen($roman) - 1; $i >= 0; $i--) {
        $currentValue = $romanNumerals[$roman[$i]];
        
        if ($currentValue < $prevValue) {
            $decimal -= $currentValue;
        } else {
            $decimal += $currentValue;
        }
        
        $prevValue = $currentValue;
    }
    
    return $decimal;
}



$binaryNumber = "1010";
$romanNumber = "MCMLXIV";
echo "Binary $binaryNumber to Decimal: " . binaryToDecimal($binaryNumber) . "\n";
echo "<hr>";
echo "Roman $romanNumber to Decimal: " . romanToDecimal($romanNumber) . "\n";

////////////////////////////////////////////////////////////////////////////////////////////////
// Create a function that will check if a given number is roman, decimal or
// binary.
// ● All decimal numbers should have a plus or a minus sign (‘+’ or ‘-’),
// indicating if they are positive or negative (eg. -10, +20, +4, -8). Binary
// numbers should be without a sign (eg. 01, 100, 001, 10). If the number
// doesn’t have a sign and does not consist of only zeroes and ones, it
// should still be considered a decimal number (ex. 545, 3135 etc.)
// ● If a decade number starts with zero and has a sign in front of it, print an
// error (eg. +0123).
////////////////////////////////////////////////////////////////////////////////////////////////
// ● Call the previous functions to convert the number into the other two
// types of numbers. For example, if the given number is decimal, call the
// function to convert it to roman and binary.
// ● Increase the limit for the roman numbers converter to 3999999. If a
// number is greater than 3999999, print an error message
// ● Create an array with 10 numbers of all types (decade, binary, roman).
// Iterate through the array and print each number in all three numbering
// systems.
// Bonus: Try to make one of the functions for converting numbers recursive.



echo "<hr>";


function checkNumberType($number) {
    $startsWithSign = false;
    if ($number[0] == '+' || $number[0] == '-') {
        $startsWithSign = true;
    }
    
    $numberWithoutSign = $startsWithSign ? substr($number, 1) : $number;

    if (preg_match('/^[01]+$/', $numberWithoutSign)) {
        return "Binary";
    }
    
    if (preg_match('/^[IVXLCDM]+$/', $numberWithoutSign)) {
        return "Roman";
    }
    
    if ($startsWithSign && $numberWithoutSign[0] == '0') {
        return "Error: Decimal numbers with sign cannot start with 0.";
    }
    
    if ($startsWithSign) {
        return "Decimal";
    }
    
    return "Decimal";
}

function binaryDecimal($binary) {
    if (!preg_match('/^[01]+$/', $binary)) {
        return "Error: Invalid binary number.";
    }
    return bindec($binary);
}

function romanDecimal($roman) {
    $romanNumerals = array(
        'M' => 1000,
        'D' => 500,
        'C' => 100,
        'L' => 50,
        'X' => 10,
        'V' => 5,
        'I' => 1
    );

    $decimal = 0;
    $prevValue = 0;
    
    for ($i = strlen($roman) - 1; $i >= 0; $i--) {
        $currentValue = $romanNumerals[$roman[$i]];
        
        if ($currentValue < $prevValue) {
            $decimal -= $currentValue;
        } else {
            $decimal += $currentValue;
        }
        
        $prevValue = $currentValue;
    }
    
    return $decimal;
}
function decimalRoman($decimal) {
    if ($decimal <= 0 || $decimal >= 4000000) {
        return "Error: Number out of range. Please provide a number between 1 and 3999999.";
    }
    
    $romanNumeral = '';
    $romanSymbols = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    );
    
    foreach ($romanSymbols as $symbol => $value) {
        while ($decimal >= $value) {
            $romanNumeral .= $symbol;
            $decimal -= $value;
        }
    }
    
    return $romanNumeral;
}

function decimalBinary($decimal) {
    if (!is_numeric($decimal) || $decimal < 0) {
        return "Error: Invalid decimal number.";
    }
    return decbin($decimal);
}

$romanNumber = "MMCMXCIX"; // 2999
echo "Roman $romanNumber to Decimal: " . romanToDecimal($romanNumber) . "\n";

$numbers = array(
    "+10", "-20", "01", "101", "IV", "XIV", "545", "+0123", "110011", "CXXIII"
);
foreach ($numbers as $number) {
    $type = checkNumberType($number);
    switch ($type) {
        case 'Binary':
            echo "$number is Binary: $number, Decimal: " . binaryToDecimal($number) . ", Roman: " . decimalToRoman(binaryToDecimal($number)) . "\n";
            break;
        case 'Roman':
            echo "$number is Roman: $number, Decimal: " . romanToDecimal($number) . ", Binary: " . decimalToBinary(romanToDecimal($number)) . "\n";
            break;
        case 'Decimal':
            echo "$number is Decimal: $number, Roman: " . decimalToRoman($number) . ", Binary: " . decimalToBinary($number) . "\n";
            break;
        default:
            echo "$type\n";
            break;
    }
}




echo "<hr>";





?>