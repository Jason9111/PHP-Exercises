
<!doctype html>
<html lang="en">
    <head>
    
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
       
       
    </head>
    <body style= "font-family: Poppins">
    <?php 
      /*
+---+
| 1 |
+---+
Use while-loop to print the numbers 1 to 10.
*/

$i = 0;
while($i <= 10){
  echo $i . "<br>";
  $i ++;
}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Use the PHP function range(start, end, step) 
to create array of numbers 5 to 100 with the step 5 
(example: 5, 10, 15, ...)
*/

$number = range(5, 100, 5);


/*
Use for-loop and if-statement to print all odd numbers.


How to check if a number is odd or even? 
Divide it by 2, and if there is a remainder, the number is odd. 
Use modulus operator (outputs the remainder after division), 
for example: 
1 % 2 = 1 -> odd number
2 % 2 = 0 -> even number
3 % 2 = 1 -> odd number
4 % 2 = 0 -> even number
*/
for($i = 5 ; $i <= 100; $i += 5){
  if($i % 2 == 1){
     echo "The odd number is " . $i . "<br>"; 
  } 
}










// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/

/*
Use while-loop to print array elements (every food in a new row).
*/

/*
Use for-loop to print array elements (every food in a new row).
*/

/*
Use foreach-loop to print array elements (every food in a new row).
*/


$favFood =["Pho", "Noodle", "Chicken", "Beef"];


echo "<h1 style=\"font-weight: bold\">While - loop</h1>" ."<br>";

$i = 0;
while($i < sizeof($favFood)){
  echo $favFood[$i] ."<br>";
  $i ++;
}


echo "<h1 style=\"font-weight: bold\">For - loop</h1>" ."<br>";
for ($i = 0; $i < sizeof($favFood); $i ++){
  echo $favFood[$i] . "<br>";
}


echo "<h1 style=\"font-weight: bold\">Foreach loop</h1>" ."<br>";

foreach($favFood as $value){
  echo $value . "<br>";
}







// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Print the array from task 3 as unordered list. Printing has to be done inside the for-loop.

Before looping, you need to print the opening list-tag <ul>
After looping, you need to print the closing list-tag </ul>
*/

for ($i = 0; $i < sizeof($favFood); $i ++){
  echo "<ul>";
    echo "<li>" . $favFood[$i] . "</li>";
  echo "</ul>";



}


// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
The array from task 3 is turned into associative array. 
The meal courses are broken down based on the type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)

$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
]

So, food_assoc is an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin.
*/



$food_assoc = [
  "pizza" => [
    "type" => "main course",
    "origin" => "Italy"
  ],
  "cheesesake" => [
    "type" => "desert",
    "origin" => "Greece"
  ]
];













/*
Loop through $food_assoc and use print_r() to print the entire meal course 
(entire array that includes type and origin).
*/

/*
Loop through $food_assoc and print the meal names (keys of $food_assoc)
as unordered list-items. Loop through the current meal (inner loop through sub-array) 
and print the type and origin as nested list items (see the example below).
*/



print_r($food_assoc);

foreach($food_assoc as $keys =>$value){
  echo "<ul>";
  echo "<li>" . $keys . "</li>";
  echo "</ul>";
}




  echo "<p style =\" font-weight: bold\"> My favourite meals </p>";
foreach($food_assoc as $keys =>$value){
  echo "<ul>";
    echo "<li>" . $keys . "<br>";
      echo "<ul>";
        echo "<li>"."type: " . $value['type'] . "</li>";
        echo "<li>" ."origin: " . $value['origin'] ."</li>";
      echo "</ul>";
    echo "</li>";
  echo "</ul>";
 
}





    ?>

    </body>

</html>

















