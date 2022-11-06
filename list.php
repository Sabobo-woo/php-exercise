<?php

//to display list of all the movies we have reviews for 

require_once 'DBBlackbox.php';


//here firt arguments shows how many i wanna display, second once shows how many i wanna skip
$reviews = select(6);
var_dump($reviews);
//always var_dump shit to check whacha doin



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of reviews</title>
</head>
<body>
   <table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>text</th>
            <th>rating</th>
        </tr>
        <tbody>
            <?php foreach($reviews as $review) : ?>
<tr>
    <td>
        <?=$review['id']?>
    </td>
     <td>
        <?=$review['title']?>
    </td>
     <td>
        <?=$review['review']?>
    </td>
     <td>
        <?=$review['rating']?>
    </td>
</tr>

                <?php endforeach; ?>
        </tbody>
    </thead>
   </table>
</body>
</html>