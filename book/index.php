<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>
</head>
<body>
    <form action="" method="post">
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <br>
        <label for="price">Price</label>
        <input type="number" name="price" id="price">
        <br>
        <button type="submit" name="btn_submit">Submit</button>
    </form>
</body>
</html>
<?php
include "Book.php";

if(isset($_POST['btn_submit'])){
    $title = $_POST['title'];
    $price = $_POST['price'];

    // Instantiate class Book
    $book = new Book;

    // Setters (set values)
    $book->setTitle($title);
    $book->setPrice($price);

    // Getters (Get and display values)
    echo "<h1>" . $book->getTitle() . "</h1>";
    echo "<h3>$" . $book->getPrice() . "</h3>";
}
?>