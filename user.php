<?php
$users = [
           [ "name" => "ali" , "age" => 33],
           [ "name" => "mohamed" , "age" => 19],
           [ "name" => "nada" , "age" => 20],
           
        ];

        <!-- $_GET is a super global variable in php to get data from url -->
        <!-- $_POST is a super global variable in php to get data from body of request -->
        
if (isset($_GET['send'])) {
    $name = $_GET['name'];
    $age = $_GET['age'];

    echo $name ;
}       

?>

 

<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title>ueser </title>
</head>
<body>

<table border="2">
    <tr>
        <th>name</th>
        <th>age</th>
    </tr>
    <?php


       
        foreach ($users as $user) {
            echo '
                <tr>
                    <td>' . $user['name'] . '</td>
                    <td>' . $user['age'] . '</td>

                </tr>

            ';
        }
     ?>
</table>

<form action="" method="get">
    <!-- get method to send data in url -->
    <!-- post method to send data in body of request -->
    <input  name="name" type="text" placeholder="enter your name"> 
    <br>
    <input name="age" type="number" placeholder="enter your age">

    <button type="submit" name="send">OK</button>
</body>
</html>
