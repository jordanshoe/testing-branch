<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container mx-auto w-50 mt-5">
        <form action="" method="post">
            <!-- input number -->
            <input type="number" name="num1" class="form-control" placeholder="Num1">
            <input type="number" name="num2" id="" class="form-control" placeholder="Num2">
            <!-- operation -->
            <div class="text-center mt-3">
                 <input type="radio" name="operation" id="add" value="+" class="mb-3">
                <label for="add">Addition</label>
                <input type="radio" name="operation" id="minus" value="-" class="mb-3">
                <label for="minus">Subtraction</label>
                <input type="radio" name="operation" id="multiply" value="*" class="mb-3">
                <label for="multiply">Multiplication</label>
                <input type="radio" name="operation" id="divide" value="/" class="mb-3">
                <label for="divide">Division</label>
            </div>
           
            <!-- calculate -->
            <input type="submit" name="calculate" value="Calculate" class="btn btn-success w-100">


        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>
</body>
</html>

<?php
    // using for option 1,2, and 3 include 'calculator.php';
        
        //option using function
        if(isset($_POST['calculate'])){
            //for inputs
            //Starting function - input function (local)
            function getInputs(){
                $num1 = $_POST['num1'];
                $num2 = $_POST['num2'];
                $operation = $_POST['operation'];

                passToObject($num1, $num2, $operation);
            }
            //for process
            function passToObject($num1, $num2, $operation){
                include 'Calculator.php';
                $f1 = new Calculator();
            
            //for outputs
                //calling of the class input
                // set values for the class
                $f1->set($num1, $num2, $operation);

                echo "<div class='text-center display-1'>" .$f1->getFirstNum(). " " .$f1->getOperator(). " " .$f1->getSecondNum(). " = " .$f1->compute(). "</div>";

            }
            getInputs();// get the local input
        }



        // if(isset($_POST['calculate'])){
        //     $f1 = new Calculator();
        //     $num1 = $_POST['num1'];
        //     $num2 = $_POST['num2'];
        //     $operation = $_POST['operation'];


        //     $f1->set($num1, $num2, $operation);
            //option 1
           // $display = $f1->calculation();

           //option 2
        //    echo $f1->display();

            // echo "<div class='alert alert-success text-center mx-auto w-50 mt-5'>
            //         <h1>$num1 $operation $num2 = <span class= 'text=danger'>". $f1->display() . "</span></h1>
            //       </div>";


           //option 1
            // echo "<div class='alert alert-success text-center mx-auto w-50 mt-5'>
            //         <h1>$num1 $operation $num2 = <span class= 'text=danger'>$display</span></h1>
            //       </div>";



            //option 3
        //     if($operation == '+'){
        //         $f1->add();
        //     }elseif($operation == '-'){
        //         $f1->subtract();
        //     }elseif($operation == '*'){
        //         $f1->multiply();
        //     }elseif($operation == '/'){
        //         $f1->divide();
        //     }
        // }
    ?>
          