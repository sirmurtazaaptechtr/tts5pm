<?php
    class Fruits {
        public $name;
        public $color;
        function __construct($name) {
            $this->name = $name;
        }
        function __destruct() {
            echo "<h2>The fruit is {$this->name}.</p>";
        }
    }
    class Students {
        // poperties
        private $id;
        private $name;
        private $gender;
        private $dob;

        // methods
        function set_id($ID) {
            $this->id = $ID;
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

    $s1 = new Students();
    $s1->set_id(1);
    $s1->set_name("Affan");
    $s1->set_gender("Male");
    $s1->set_dob('2006-03-10');

    $s2 = new Students();
    $s2->set_id(2);
    $s2->set_name("Moiz");
    $s2->set_gender("Male");
    $s2->set_dob('2002-11-26');

    $s3 = new Students();
    $s3->set_id(3);
    $s3->set_name("Areesha");
    $s3->set_gender("Female");
    $s3->set_dob('2001-07-28');

    $s3->set_name("Areesha Saud");
    echo "<h1>Welcome " . $s3->get_name() . "</h1>";
    echo $s3->disp_info();

    $f1 = new Fruits("Banana");
    $f2 = new Fruits("Mango");
    
    echo "<pre>";
    var_dump($f1 instanceof Students);
    echo "</pre>"
    
?>