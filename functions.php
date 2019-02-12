
<!doctype html>
<html lang="en">
    <head>
        <title>PHP Exercises</title>  
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
       
       
    </head>
    <body style= "font-family: Poppins">

    <?php 
      /*
+---+
| 1 |
+---+
Declare the function named greeting. When this function is called,
it prints: "<p>Welcome to the well structured code.</p>";
*/

/*
Call the function.
*/
function greeting(){
  echo "<p>Welcome to the well structured code.</p>";
}

greeting();


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Declare the function named calculateArithmeticMean. 
This function has 3 parameters: a, b and c.
calculateArithmeticMean prints the arithmetic mean of a, b and c.
*/

function calculateArithmeticMean($a,$b,$c) {
$arithmetic = ($a + $b + $c) / 3;
echo $arithmetic;
}


/*
Call the function with the values for paremeters.
*/

calculateArithmeticMean(4,5,6);



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare the function named calculateTotalPrice. 
This function has 1 parameter: price.
calculateTotalPrice returns the total price after the tax of 13%.
*/

function calculateTotalPrice($price){
$total = $price - ($price * 0.13);
 return $total;
}


echo calculateTotalPrice(2000);




/*
Declare the variable total
and assign it with the value 
that calculateTotalPrice outputs 
when it is called (with the value for price parameter).
*/

/*
Print total.
*/





// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Declare the global variable length and assign it with the value 12.
Declare the global variable width and assign it with the value 6.

Declare the function named calculateRectangleArea. 

This function calculates and prints the area of rectangle based on the 
global variables length and width.

Make these variables accessible inside the local scope, and do the calculation and printing
*/

/*
Call the function.
*/

$length = 12;
$width = 6;

function calculateRectangleArea(){
echo $GLOBALS["length"] * $GLOBALS["width"];

}

calculateRectangleArea();










// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
If the function for calculating the area of a triangle looks like this:
*/
function calculateTriangleArea($base, $height) {
  $area =  ($base * $height) / 2;
  $GLOBALS["area"] = $area;

}

calculateTriangleArea(9,10);
echo $area;


/*
What can you do to make the $area accessible in global scope 
(without using the return statement)?
*/

/*
Choose the values for parameters and call the function.
*/




    ?>
    </body>

</html>

















