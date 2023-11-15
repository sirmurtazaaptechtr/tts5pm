<?php 
    class Employee {        
        protected $id;
        protected $name;
        protected $gender;
        protected $dob;
        function __construct($ID,$Name) {
            $this->id = $ID;
            $this->name = $Name;
        }
        function set_name ($Name) {
            $this->name = $Name;
        }
        function set_gender ($Gender) {
            $this->gender = $Gender;
        }
        function set_dob ($DOB) {
            $this->dob = $DOB;
        }
        function get_id () {
            return $this->id;
        }
        function get_name () {
            return $this->name;
        }        
        function get_gender () {
            return $this->gender;
        }
        function get_dob () {
            return $this->dob;
        }
        function disp_info () {
            return "<br><b>ID : </b>$this->id<br><b>Name : </b>$this->name<br><b>Gender : </b>$this->gender<br><b> Date of Birth: </b>$this->dob<br>";
        }
    }
    class PartTimeEmployee extends Employee {
        protected $hourlyrate;
        function __construct($ID,$Name,$Salary)
        {
            $this->id = $ID;
            $this->name = $Name;
            $this->hourlyrate = $Salary;            
        }
        function set_salary ($Salary) {
            $this->hourlyrate = $Salary;
        }
        function get_salary () {
            return $this->hourlyrate;
        }        
        function disp_info()
        {
            return "<br><b>ID : </b>$this->id<br><b>Name : </b>$this->name<br><b>Gender : </b>$this->gender<br><b> Date of Birth: </b>$this->dob<br><b> Hourly Rate: </b>$this->hourlyrate<br>";                        
        }
    }
    class FullTimeEmployee extends Employee {
        protected $monthly;
        function __construct($ID,$Name,$Salary)
        {
            $this->id = $ID;
            $this->name = $Name;
            $this->monthly = $Salary;            
        }
        function set_salary ($Salary) {
            $this->monthly = $Salary;
        }
        function get_salary () {
            return $this->monthly;
        }        
        function disp_info()
        {
            return "<br><b>ID : </b>$this->id<br><b>Name : </b>$this->name<br><b>Gender : </b>$this->gender<br><b> Date of Birth: </b>$this->dob<br><b> Monthly Salary: </b>$this->monthly<br>";                        
        }
    }
?>