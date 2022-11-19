<?php
    /* 
        School.php = class
            Rate per Unit: Based on Year Level
            1 - 500
            2 - 630
            3 - 470
            4 - 501

            Additional:
            with Laboratory Class
            1 - 3359
            2 - 4000
            3 - 2690
            4 - 3555

            no Laboratory Class
            - no additional on the total tuition
    
    */

    //option 1 & 2

    class School{
        //Properties
        private $name;
        private $year;
        private $units;
        private $laboratory;

        public function set_values($name, $year, $units, $laboratory){
            $this->name = $name;
            $this->year = $year;
            $this->units = $units;
            $this->laboratory = $laboratory;
        }

    //option 1
        public function compute(){
            $total_tuition = $this->get_total() + $this->get_addOn();

            return $total_tuition;
        }
        public function get_total(){
            if($this->year == 1){
                return $this->units * 550;
            }elseif($this->year == 2){
                return $this->units * 630;
            }elseif($this->year == 3){
                return $this->units * 470;
            }elseif($this->year == 4){
                return $this->units * 501;
            }
        }
        public function get_addOn(){
            if($this->laboratory == 'yes'){
                if($this->year == 1){
                    return 3359;
                }elseif($this->year == 2){
                    return 4000;
                }elseif($this->year == 3){
                    return 2690;
                }elseif($this->year == 4){
                    return 3555;
                }
            }else{
                return 0;
            }
        }

    // option 2
        // public function unitsCal(){
           
        //     if($this->year == 1){
        //         if($this->laboratory == 'yes'){
        //             $lab = 3359;
        //         }else{
        //             $lab = 0;
        //         }
        //         $ans = ($this->units * 550) + $lab;
        //     }elseif($this->year == 2){
        //         if($this->laboratory == 'yes'){
        //             $lab = 4000;
        //         }else{
        //             $lab = 0;
        //         }
        //         $ans = ($this->units * 630) + $lab;
        //     }elseif($this->year == 3){
        //         if($this->laboratory == 'yes'){
        //             $lab = 2690;
        //         }else{
        //             $lab = 0;
        //         }
        //         $ans = ($this->units * 470) + $lab;
        //     }elseif($this->year == 4){
        //         if($this->laboratory == 'yes'){
        //             $lab = 3555;
        //         }else{
        //             $lab = 0;
        //         }
        //         $ans = ($this->units * 501) + $lab;
        //     }
        //     return $ans;
        // }
    }


?>