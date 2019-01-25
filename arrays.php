
<!doctype html>
<html lang="en">
    <head>
        <tltle>Arrays Exerciese</tltle>
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
       
    </head>
    <body style= "font-family: Poppins">



/*
+---+
| 1 |
+---+
Declare and assign the indexed array with your favourite food 
(at least 4 array elements). Name the array food.
*/
<?php 
    echo "<br>";
     echo "<br>";
    $favFood = ["Noodes", "Chicken", "Pho", "Potato Soup"];
?>

/*
Print every array element in a new line.
*/

<?php

 echo "<br>";
print_r($favFood);

?>




// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 2 |
+---+
Print the array elements from the previous exercise in unordered list.
<ul>
  <li>...</li>
  <li>...</li>
  <li>...</li>
  <li>...</li>
</ul>
*/

<?php 
    
    echo "<ul>";
        echo "<li>$favFood[0]</li>";
        echo "<li>$favFood[1]</li>";
        echo "<li>$favFood[2]</li>";
        echo "<li>$favFood[3]</li>"; 
    echo "</ul>";

echo $favFood[0];
?>



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 3 |
+---+
Turn the indexed array food from task 1 into associative array named food_assoc. 
Every array element of food becomes the key of food_assoc.
Every key of food_assoc has the value that describes the type of food (salad, main course or dessert).
*/

<?php 



$food_assoc = ["appetizer" => "Noodles",
                "main_course" => "Potato Soup",
                "add-on" => "Chicken",
                "traditional" => "Pho"            
];



?>

/*
Print every food and type in the separate lines so it renders like this:
pizza | main counrse 
cheesesake | desert 
*/

<?php 

echo "<br>";
echo "<br>";
echo $food_assoc["appetizer"]; echo " | Appetizer";
echo "<br>";
echo $food_assoc["main_course"]; echo " | Main Course";
echo "<br>";
echo $food_assoc["add-on"]; echo " | Add On";
echo "<br>";
echo $food_assoc["traditional"]; echo " | Traditional";
echo "<br>";
echo "<br>";
?>;



// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 4 |
+---+
Break down the food_assoc from the task 3 to type (salad, main course, dessert, ...) 
and country of origin (Italy, Spain, India, ...)
food_assoc:
  pizza:
    type: main course
    origin: Italy
  cheesesake: 
    type:desert
    origin: Greece
  
So, food_assoc is still going to be an associative array. 
Every key of food_assoc (pizza, cheesecake) will now have the value that is associative array itself 
and carries the information about the type and origin
*/

<?php 


$food_assoc = ["appetizer" => "Noodles",
                "main_course" => "Potato Soup",
                "add-on" => "Chicken",
                "traditional" => "Pho"            
];

$country = ["appetizer" => "China",
            "main_course" => "Thailand",
            "add_on" => "Campodia",
            "traditional" => "Vietnam"

];
?>


/*
Print every food, type and origin in the separate lines so it renders like this:
pizza | main counrse | Italy
cheesesake | desert | Greece
*/

<?php 
    echo "<br>";
    echo "<br>";
    echo $food_assoc["appetizer"]; echo " | Appetizer | "; echo $country["appetizer"];
    echo "<br>";
    echo $food_assoc["main_course"]; echo " | Main Course | "; echo $country["main_course"];
    echo "<br>";
    echo $food_assoc["add-on"]; echo " | Add On | "; echo $country["add_on"];
    echo "<br>";
    echo $food_assoc["traditional"]; echo " | Traditional | "; echo $country["traditional"];
    echo "<br>";
    echo "<br>";

?>





// task separator
echo "<hr style=\"margin 1rem 0\">";

/*
+---+
| 5 |
+---+
Print the array from task 4 in html table:
<table>
  <tr>
    <th>food</th>
    <th>type</th>
    <th>origin</th>
  </tr>
  <tr>
    <td>pizza</td>
    <td>main course</td>
    <td>Italy</td>
  </tr>
  <tr>
    <td>cheesecake</td>
    <td>desert</td>
    <td>Greece</td>
  </tr>
</table>
*/




<?php 

echo "<table style=\"border-spacing: 30px\">";
    echo "<tr style=\"color: white;
                    text-align: left;
                    background-color: green;\">";
        echo "<th syle>Food</th>";
        echo "<th>Type</th>";
        echo "<th>Origin</th>";
    echo "</tr>";

    echo "<tr>";
        echo "<td>";
            echo $food_assoc["appetizer"];
            echo "<div class='red' style = \"height: 3px;
                     width: 20%;
                    background-color: red;\">";
            echo "</div>";
        echo "</td>";
         echo "<td>";
            echo "Appetizer";
        echo "</td>";
         echo "<td>";
            echo $country["appetizer"];
        echo "</td>";
    echo "</tr>";

      
    echo "<tr>";
         echo "<td>";
            echo $food_assoc["main_course"];
             echo "<div class='blue' style = \"height: 3px;
                     width: 20%;
                    background-color: blue\">";
            echo "</div>";
        echo "</td>";
         echo "<td>";
            echo "Main Course";
        echo "</td>";
         echo "<td>";
            echo $country["main_course"];
        
        echo "</td>";
    echo "</tr>";


    echo "<tr>";
         echo "<td>";
            echo $food_assoc["add-on"];
             echo "<div class='brown' style = \"height: 3px;
                     width: 20%;
                    background-color: brown;\">";
            echo "</div>";
        echo "</td>";
         echo "<td>";
            echo "Add On";
        echo "</td>";
         echo "<td>";
            echo $country["add_on"];
        echo "</td>";
    echo "</tr>";



     echo "<tr>";
         echo "<td>";
            echo $food_assoc["traditional"];
             echo "<div class='orange' style = \"height: 3px;
                     width: 20%;
                    background-color: orange;\">";
            echo "</div>";
        echo "</td>";
         echo "<td>";
            echo "Traditional";
        echo "</td>";
         echo "<td>";
            echo $country["traditional"];
        echo "</td>";
    echo "</tr>";


echo "</table>";



?>

    </body>

</html>

















