<?php
//here we display a form to edit an existing record


require_once "DBBlackbox.php";

$review_id = $_GET["review_id"];

$review= find($review_id);
// var_dump($review);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="review2.php" method="post">
        movie title<br>
        <input type="text" name="title" value="<?= $review['title'] ?>">
        <br>
        <textarea name="review" id="" cols="30" rows="10"><?= $review['review'] ?></textarea>
        <br>
        <input type="range" name="rating" min="0" max="10" value="<?= $review['rating'] ?>">
        <br>
        <button>Submit</button>
    </form>
    
</body>
</html>