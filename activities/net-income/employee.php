<?php
    /* EmployeeUI.php
        --html, bootstrap, php

       Employee.php
        --class file
        --5 properties
        --methods? contructor? setter? destructor? inheritance?

        conditions/rules:
        -regular # of hours worked ->40
            over 40 considered OVERTIME 
                45
                -->Overtime of 5 hours
        1 day = 8 hours
        find the hourly rate of the employee
        -Daily rate:
            Position->staff
                employment status -> contractual
                    rate: 300 per day
                employment status -> probationary
                    rate: 350 per day
                employment status -> regular
                    rate: 400 per day

             Position->admin
                employment status -> contractual
                    rate: 350 per day
                employment status -> probationary
                    rate: 400 per day
                employment status -> regular
                    rate: 500 per day
        
        -Overtime rate:
            Position->staff
                    employment status -> contractual
                        rate: 10 per hour
                    employment status -> probationary
                        rate: 25 per hour
                    employment status -> regular
                        rate: 30 per hour

                Position->admin
                    employment status -> contractual
                        rate: 15 per hour
                    employment status -> probationary
                        rate: 30 per hour
                    employment status -> regular
                        rate: 40 per hour

        healthcare: dependent to status
            single - 200
            married - 75

        tax:
            single 
                gross income is greater than 1000 
                    5% of your gross income
            married
                gross income is greater than 1500
                    3% of your gross income
                gross income is less than 1500
                    no tax

        To Do:
        1. create the UI list
        2. make the properties in your class file
        3. make the methods one-by-one

        Gross Income = regular pay + ot pay

        Net Income = gross income - deductions

        deductions (minus/subtract from gross income) are the following:
            -healthcare
            -tax
        
        output the Net Income of the employee

    */


    class Employee
    {
        private $name;
        private $civil_status;
        private $position;
        private $employment_status;
        private $regular_hours;
        private $ot_hours;

        public function __construct($name, $civil_status, $position, $employment_status, $regular_hours, $ot_hours)
        {
            $this->name = $name;
            $this->civil_status = $civil_status;
            $this->position = $position;
            $this->employment_status = $employment_status;
            $this->regular_hours = $regular_hours;
            $this->ot_hours = $ot_hours;
        }

        public function getName()
        {
            return $this->name;
        }

        public function getCivilStatus()
        {
            return $this->civil_status;
        }

        public function getPosition()
        {
            return $this->position;
        }

        public function getEmploymentStatus()
        {
            return $this->employment_status;
        }

        public function getRegularHours()
        {
            return $this->regular_hours;
        }

        public function getOTHours()
        {
            return $this->ot_hours;
        }

        public function getRegularRate()
        {
            $position = $this->position;
            $employment_status = $this->employment_status;
            
            if($position == "staff" && $employment_status== "contractual")
            {
                return "300/day";
            }
            elseif($position == "staff" && $employment_status== "probationary")
            {
                return "350/day";
            }
            elseif($position == "staff" && $employment_status== "regular")
            {
                return "400/day";
            }
            elseif($position == "admin" && $employment_status== "contractual")
            {
                return "350/day";
            }
            elseif($position == "admin" && $employment_status== "probationary")
            {
                return "400/day";
            }
            elseif($position == "admin" && $employment_status== "regular")
            {
                return "500/day";
            }            
        }

        public function getOTRate()
        {
            $position = $this->position;
            $employment_status = $this->employment_status;
            
            if($position == "staff" && $employment_status== "contractual")
            {
                return "10/hour";
            }
            elseif($position == "staff" && $employment_status== "probationary")
            {
                return "25/hour";
            }
            elseif($position == "staff" && $employment_status== "regular")
            {
                return "30/hour";
            }
            elseif($position == "admin" && $employment_status== "contractual")
            {
                return "15/hour";
            }
            elseif($position == "admin" && $employment_status== "probationary")
            {
                return "30/hour";
            }
            elseif($position == "admin" && $employment_status== "regular")
            {
                return "40/hour";
            }     
            
        }

        public function computeGrossIncome()
        {
            return ($this->computeRegularPay() + $this->computeOTPay());
        }

        public function computeNetIncome()
        {
            $gross = $this->computeGrossIncome();
            $tax = $this->computeTax($gross);
            $healthCare = $this->getHealthCare(); 
            return ($gross - ($tax + $healthCare));
        }

        public function computeRegularPay()
        {
            $position = $this->position;
            $employment_status = $this->employment_status;
            $regular_hours = $this->regular_hours;
            
            if($position == "staff" && $employment_status== "contractual")
            {
                return (300/8) * $regular_hours;
            }
            elseif($position == "staff" && $employment_status== "probationary")
            {
                return (350/8) * $regular_hours;
            }
            elseif($position == "staff" && $employment_status== "regular")
            {
                return (400/8) * $regular_hours;
            }
            elseif($position == "admin" && $employment_status== "contractual")
            {
                return (350/8) * $regular_hours;
            }
            elseif($position == "admin" && $employment_status== "probationary")
            {
                return (400/8) * $regular_hours;
            }
            elseif($position == "admin" && $employment_status== "regular")
            {
                return (500/8) * $regular_hours;
            }
        }
        
        public function computeOTPay()
        {
            $position = $this->position;
            $employment_status = $this->employment_status;
            $ot_hours = $this->ot_hours;
            
            if($position == "staff" && $employment_status== "contractual")
            {
                return 10 * $ot_hours;
            }
            elseif($position == "staff" && $employment_status== "probationary")
            {
                return 25 * $ot_hours;
            }
            elseif($position == "staff" && $employment_status== "regular")
            {
                return 30 * $ot_hours;
            }
            elseif($position == "admin" && $employment_status== "contractual")
            {
                return 15 * $ot_hours;
            } 
            elseif($position == "admin" && $employment_status== "probationary")
            {
                return 30 * $ot_hours;
            }
            elseif($position == "admin" && $employment_status== "regular")
            {
                return 40 * $ot_hours;
            }            
        }

        public function computeTax()
        {
            $grossIncome = $this->computeGrossIncome();

            if($this->civil_status == "single" && $grossIncome <= 1000 || $this->civil_status == "married" && $grossIncome <= 1500)
            {
                return 0;
            }
            elseif($this->civil_status == "single" && $grossIncome > 1000) 
            {   
					return ($grossIncome * 0.05);
            }
            elseif($this->civil_status == "married" && $grossIncome > 1500)
            {
                return ($grossIncome * 0.03);
            }
        }

        public function getHealthCare()
        {
            if($this->civil_status == "single")
            {
                return 200;
            }
            elseif($this->civil_status == "married")
            {
                return 75;
            }
        }
    }
?>