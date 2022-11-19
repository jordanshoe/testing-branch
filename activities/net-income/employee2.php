<?php
    class Salary{
        private $name;
        private $position;
        private $civil_status;
        private $emp_status;
        private $hours;

        public function __construct($n, $p, $cs, $es, $h ){
                $this->name = $n;
                $this->position = $p;
                $this->civil_status = $cs;
                $this->emp_status = $es;
                $this->hours = $h;
        }

        public function get_name(){
            echo "<p class = 'text-center mt-2'>$this->name</p>";
            echo "<p class = 'text-center mt-2'>$this->position</p>";
            echo "<p class = 'text-center mt-2'>$this->civil_status</p>";
            echo "<p class = 'text-center mt-2'>$this->emp_status</p>";
            echo "<p class = 'text-center mt-2'>$this->hours</p>";
        }

        public function net(){
            if($this->civil_status == "single"){
                if($this->gross() > 1000){
                    $net = ($this->gross() * .95) - 200;
                }else{
                    $net = $this->gross() - 200;
                }
            }elseif($this->civil_status == "married"){
                if($this->gross() > 1500){
                    $net = ($this->gross() * .97) - 75;
                }else{
                    $net = $this->gross() - 75;
                }
            }
            echo "<p class ='text-center w-50 mx-auto'>Net Income: $net</p>";
        }

        public function gross(){
            // $s = 0;
            if($this->hours <= 40){
                if($this->position == "staff"){
                    if($this->emp_status == "con"){
                        $s = (300/8) * $this->hours;
                    }elseif($this->emp_status == "pro"){
                        $s = (350/8) * $this->hours;
                    }elseif($this->emp_status == "reg"){
                        $s = (400/8) * $this->hours;
                    }
                }elseif($this->position == "admin"){
                    if($this->emp_status == "con"){
                        $s = (350/8) * $this->hours;
                    }elseif($this->emp_status == "pro"){
                        $s = (400/8) * $this->hours;
                    }elseif($this->emp_status == "reg"){
                        $s = (500/8) * $this->hours;
                    }
                }
            }elseif($this->hours > 40){
                if($this->position == "staff"){
                    if($this->emp_status == "con"){
                        $s = ((300/8) * 40 )+ (10 * ($this->hours - 40)); 
                    }elseif($this->emp_status == "pro"){
                        $s = ((350/8) * 40) + (25 * ($this->hours - 40));
                    }elseif($this->emp_status == "reg"){
                        $s = ((400/8) * 40) + (30 * ($this->hours - 40));
                    }
                }elseif($this->position == "admin"){
                    if($this->emp_status == "con"){
                        $s = ((350/8) * 40) + (15 * ($this->hours - 40)); 
                    }elseif($this->emp_status == "pro"){
                        $s = ((400/8) * 40) + (30 * ($this->hours - 40));
                    }elseif($this->emp_status == "reg"){
                        $s = ((500/8) * 40) + (40 * ($this->hours - 40));
                    }
                }
            }
            return $s;
        }
            
        
    }