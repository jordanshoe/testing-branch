<?php
        /* calculatorUI.php - html + php code (POST and creation of onject)
                            - this only contains the following:
                                form, transfer of inputs to php local php variables, creation of objectm passing of entered values to class using objects, call of display method using objects.
            
            calculator.php - class file
                                3 properties(n1, n2, operation)
                                operations:
                                    addition +
                                    subtraction -
                                    muiltiplication *
                                    division /
                                methods:
                                    - addition
                                    - subtraction
                                    - multiplication
                                    - division
                                    - output
                                ---> or you can create your own methods as long as computation is inside the class file
                                
        */
            //For process -- using assignmeent and operation
    class Calculator{
        //properties
        private $num1;
        private $num2;
        private $operation;

        //method/setter = sets/gives/assigns values to your private properties

        public function set($num1, $num2, $operation){
            $this->num1 = $num1;
            $this->num2 = $num2;
            $this->operation = $operation;
        }

        //method/getters -- get/returns the values of properties
        public function getFirstNum(){
            return $this->num1;

        }

        public function getSecondNum(){
            return $this->num2;

        }

        public function getOperator(){
            return $this->operation;

        }
        
        public function compute(){
                if($this->operation == '+'){
                    $ans = $this->num1 + $this->num2;
                }elseif($this->operation == '-'){
                    $ans = $this->num1 - $this->num2;
                }elseif($this->operation == '*'){
                    $ans = $this->num1 * $this->num2;
                }elseif($this->operation == '/'){
                    $ans = $this->num1 / $this->num2;
                }
                return $ans;
            }

        // method/getter
        //option 1
        // public function calculation(){
        //     if($this->operation == '+'){
        //         return $this->num1 + $this->num2;
        //     }elseif($this->operation == '-'){
        //         return $this->num1 - $this->num2;
        //     }elseif($this->operation == '*'){
        //         return $this->num1 * $this->num2;
        //     }elseif($this->operation == '/'){
        //         return $this->num1 / $this->num2;
        //     }
        // }

        //option 2
        // public function add(){
        //     return $this->num1 + $this->num2;
        // }

        // public function subtract(){
        //     return $this->num1 - $this->num2;
        // }

        // public function multiply(){
        //     return $this->num1 * $this->num2;
        // }

        // public function divide(){
        //     return $this->num1 / $this->num2;
        // }

        // public function display(){
        //     if($this->operation == '+'){
        //        return $this->add();
        //     }elseif($this->operation == '-'){
        //        return $this->subtract();
        //     }elseif($this->operation == '*'){
        //        return $this->multiply();
        //     }elseif($this->operation == '/'){
        //        return $this->divide();
        //     }
        // }  
        
        //option 3
        // public function add(){
        //     $result = $this->num1 + $this->num2;
        //     $this->displayResult($result);
        // }

        // public function subtract(){
        //     $result = $this->num1 - $this->num2;
        //     $this->displayResult($result);
        // }

        // public function multiply(){
        //     $result = $this->num1 * $this->num2;
        //     $this->displayResult($result);
        // }

        // public function divide(){
        //     $result = $this->num1 / $this->num2;
        //     $this->displayResult($result);
        // }

        // method option 3
        // public function displayResult($result){
        //     echo "<div class='text-center mx-auto w-50 mt-3 display-3'>";
        //     echo   $this->num1  ;          
        //     echo   $this->operation ;
        //     echo   $this->num2  ;
        //     echo     '='  . $result ;
        //     echo  "</div>";
        // }

    }
?>