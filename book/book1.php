<?php
    class Book{
        private $title;
        public $price;

        public function setTitle($new_title){
            $this->title = $new_title;
        }

        private function getTitle(){
            return $this->title;
        }

        public function displayTitle(){
            echo $this->getTitle();
        }
    }

    $math = new Book;

//    $math->title = "Linear Algebra"; //cannot accsess private property
    $math->price = 70;
    echo $math->price;
    echo "<br>";

    $math->setTitle("Innumeracy");
    // echo $math->getTitle();  //call to private method
    $math->displayTitle();  //echo Innumeracy





//    ***** Instantiation *****/
// $math = new Book;
// $math is an instance of class Book
// We can access the members of Book using $math
// $chemistry = new Book;
// $chemistry is another instance of class Book


/***** Access public properties *****/
// $math->author = "David Summit"; // OK since $author is public


/***** Access private properties *****/
//$math->title = "Abstract Algebra";     // Error: Cannot access private property


/***** Access public methods *****/
// $math->setTitle("Statistics");  // OK since setTitle is public
// echo $math->getTitle();     // echo "Statistics";
// echo $math->getPrice();     // No result. Not yet set.

// $chemistry->setTitle("Organic Chemistry");
// $chemistry->setPrice(520);
// echo $chemistry->getPrice();    // echo 520;
// echo $chemistry->getTitle();    // echo "Organic Chemistry";


/***** Access private methods *****/
//$math->setValues("Calculus 101", 600);  // Error: Call to private method

?>
