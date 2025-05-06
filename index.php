<?php

// ==================== 1. SYNTAX ====================

// PHP scripts start with "<?php" and end with "\?\>"
/* 

Like this ---->

<?php 

//php code
?>

# single line comment

*/

// Similar to Python, PHP code is executed from top to bottom.


// Unlike Python, PHP uses semicolons (;) to end each statement.

echo "Hello, World!"; // Output to the browser (like print("Hello, World!") in Python)
echo "Welcome to PHP class!";

echo "My name is Debashis Nayak";
echo "I am a Software Engineer";


// ==================== 2. VARIABLES ====================
//variables that can store data of different types (string, integer, float, boolean, Array, Object, Null, Resource)
// In PHP, variables start with a $ symbol
// No need to declare data types explicitly, like Python's dynamic typing.

$name = "Alice";        // string variable
$age = 25;              // integer
$isStudent = true;      // boolean
$iamfloat = 3.14;      // float
$fruits = array("apple", "banana", "cherry"); // array (similar to list in Python)
$person = (object) ['name' => 'John', 'age' => 30]; // object (similar to dict in Python)
$iamNull= null; // null (similar to None in Python)
//If a variable is not set, it will be NULL by default.
// In PHP, you can use the isset() function to check if a variable is set or not.

/*

If you assign an integer to a variable, it will be treated as an integer.
If you assign a string to the same variable, it will be treated as a string.

Type Casting in PHP:
- (int) $var  // Cast to integer
- (float) $var // Cast to float
- (string) $var // Cast to string
- (bool) $var // Cast to boolean
- (array) $var // Cast to array
- (object) $var // Cast to object


*/

/*
PHP Objects are instances of classes, which can have properties and methods.
A class is template for objects, and an object is an instance of a class.

When an object is created,they inherit all the properties and behaviours of the class, but each
object will have its own unique set of properties and behaviours.
 
*/

/*

var_dump($name); // Outputs the type and value of the variable (like type() in Python)
var_dump($age);  // Outputs the type and value of the variable

*/

// Python equivalent:
// name = "Alice"
// age = 25
// is_student = True

const mycar="BMW";
/*


$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

*/

echo "<br>Name: " . $name; // Concatenation using dot (.) operator; Python uses + for strings
echo "<br>Age: $age";      // Variables in double quotes are automatically expanded


// ==================== 3. OPERATORS ====================

// Arithmetic Operators
$a = 10;
$b = 3;

echo "<br>Sum: " . ($a + $b);   // Addition (same as a + b in Python)
echo "<br>Modulo: " . ($a % $b); // Modulo operator

// Assignment Operators
$a += 5; // Same as a = a + 5 in Python

// Comparison Operators
// == (equality), === (strict equality: value and type), !=, >, <, >=, <=

// Logical Operators
// && (and), || (or), ! (not)

// Python uses `and`, `or`, `not` instead


// ==================== 4. CONTROL STRUCTURES ====================

// IF-ELSE
$score = 85;

if ($score >= 90) {
    echo "<br>Grade: A";
} elseif ($score >= 75) {
    echo "<br>Grade: B";
} else {
    echo "<br>Grade: C";
}

// Similar to:
// if score >= 90:
//     print("Grade: A")
// elif score >= 75:
//     print("Grade: B")
// else:
//     print("Grade: C")

// WHILE loop
$i = 1;
while ($i <= 3) {
    echo "<br>Count: $i";
    $i++;
}

// FOR loop
for ($j = 0; $j < 3; $j++) {
    echo "<br>Index: $j";
}

// FOREACH (like for x in list in Python)
$fruits = array("apple", "banana", "cherry");
foreach ($fruits as $fruit) {
    echo "<br>Fruit: $fruit";
}


// ==================== 5. FUNCTIONS ====================

// Function definition
function greet($name) {
    return "Hello, $name!";
}

echo "<br>" . greet("Bob");

// Similar to:
// def greet(name):
//     return f"Hello, {name}"


// ==================== 6. ERROR HANDLING ====================

// Basic error handling using try-catch (like Python's try-except)

function divide($x, $y) {
    if ($y == 0) {
        throw new Exception("Division by zero is not allowed.");
    }
    return $x / $y;
}

try {
    echo "<br>Division: " . divide(10, 0);
} catch (Exception $e) {
    echo "<br>Error: " . $e->getMessage();
}

// Python equivalent:
// try:
//     result = divide(10, 0)
// except Exception as e:
//     print("Error:", e)



?>
    