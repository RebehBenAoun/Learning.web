<?php

echo"Hello World   ";

$x = 5;

$NAME = "NADA";
echo"$x ";
echo"$NAME";

echo "<br>";


echo "<h1 style='color:purple'> Hello World </h1>";
echo "<h1>My First HTML Page</h1>";


echo "<br>";

for ($i=0; $i < 10; $i++) { 
    echo "The number is: $i <br>";
}

$T =[10,20,30,40,50,60];

echo "<br>";
echo "<br>";

for ($i= 0; $i < 5; $i++) {
   echo "$T[$i] <br>"; 
}

echo "<br>";
echo "<br>";

foreach ($T as $a ) {
   echo "$a <br>";
}

<table border="1">
    <tr>
        <th>Name</th>
    </tr>
    <tr>';
    foreach ($users as $user) {
        echo '
        <tr> 
             <td>'.$user.'</td>';
        </tr>
    }
    echo "</tr>";
</table>