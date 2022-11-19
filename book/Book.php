<?php

class Book {
    /*** Properties ***/
    private $title;
    private $price;

    // public $author;
    // private $isbn;
    // private $num_of_pages;
    // private $publishing_company;
    // private $publishing_date;
    // private $category;


    /*** Methods ***/
    public function setTitle($new_title){
        $this->title = $new_title;
    }

    public function setPrice($new_price){
        $this->price = $new_price;
    }

    public function getTitle(){
        return $this->title;
        // refers to private $title
    }

    public function getPrice(){
        return $this->price;
        // refers to private $price
    }

    public function displayValues(){
        echo "Book Title: " . $this->title;
        echo "<br>";
        echo "$" . $this->price;
        echo "<br>";
    }

    private function setValues($new_title, $new_price){
        $this->title = $new_title;
        $this->price = $new_price;
    }
}

/***** Instantiation *****/
$math = new Book;
// $math is an instance of class Book
// We can access the members of Book using $math
$chemistry = new Book;
// $chemistry is another instance of class Book


/***** Access public properties *****/
$math->author = "David Summit"; // OK since $author is public


/***** Access private properties *****/
//$math->title = "Abstract Algebra";     // Error: Cannot access private property


/***** Access public methods *****/
$math->setTitle("Statistics");  // OK since setTitle is public
echo $math->getTitle();     // echo "Statistics";
echo $math->getPrice();     // No result. Not yet set.

$chemistry->setTitle("Organic Chemistry");
$chemistry->setPrice(520);
echo $chemistry->getPrice();    // echo 520;
echo $chemistry->getTitle();    // echo "Organic Chemistry";


/***** Access private methods *****/
//$math->setValues("Calculus 101", 600);  // Error: Call to private method
?>