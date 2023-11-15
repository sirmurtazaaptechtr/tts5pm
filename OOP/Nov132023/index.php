<?php    
    class Student {
        // poperties
        private $id;
        private $name;
        private $gender;
        private $dob;

        // methods
        function __construct($Student_ID,$Student_Name) {
            $this->id = $Student_ID;
            $this->name = $Student_Name;
        }
        function set_name($NAME) {
            $this->name = $NAME;
        }
        function set_gender($GENDER) {
            $this->gender = $GENDER;
        }
        function set_dob($DOB) {
            $this->dob = $DOB;
        }
        function get_id() {
            return $this->id;
        }
        function get_name() {
            return $this->name;
        }
        function get_gender() {
            return $this->gender;
        }
        function get_dob() {
            return $this->dob;
        }
        function disp_info () {
            return "<h4>ID : $this->id</h4><h4>Name : $this->name</h4><h4>Gender : $this->gender</h4><h4>DOB : $this->dob</h4>";
        }
    }

    $s1 = new Student(1,"Affan");        
    $s1->set_gender("Male");
    $s1->set_dob('2006-03-10');

    $s2 = new Student(2,"Moiz");    
    $s2->set_gender("Male");
    $s2->set_dob('2002-11-26');

    $s3 = new Student(3,"Areesha");
    $s3->set_gender("Female");
    $s3->set_dob('2001-07-28');

    $s4 = new Student(4,"Khizer");

    $s3->set_name("Areesha Saud");
    echo "<h1>Welcome " . $s3->get_name() . "</h1>";
    echo $s3->disp_info();  
    echo "<h1>Welcome " . $s4->get_name() . "</h1>";
    echo $s4->disp_info();  


    
?>